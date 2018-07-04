<?php
$title = "Portfolio Projects";
include_once('includes/header.php');
include_once('includes/project_model.php');
include_once('includes/categories_model.php');
include_once('includes/project_categories_model.php');
?>
<article style="width: 100%">
  <h1>A showcase of some of my projects</h1>
  <?php

  if (isset($_GET['category'])) {
    $url_parameter = $_GET['category'];
  } else {
    $url_parameter = "";
  }

  // Code for generating the word cloud
  $sql = "SELECT pc.c_name, SUM(p.p_group + 1) AS 'value' FROM projects p JOIN project_categories pc ON p.p_name = pc.p_name GROUP BY pc.c_name";
  $categories = ProjectCategories::find_by_sql($sql);
  ?>
  <div id="tagcloud">
  <?php
  foreach ($categories as $category) {
    $size = 1 + ($category->value)/10 . "em";
  ?>
    <span style="font-size: <?php echo $size; ?>">
    <a href="projects.php?category=<?php echo $category->c_name; ?>"><?php echo $category->c_name ?></a>
    </span>
  <?php
  }?>
  </div> <!-- ends tagcloud -->

  <div id="dropdown">
  Use the dropdown box to filter results by category. <?php
  if($categories) { ?>
    <form action = <?php echo $_SERVER['PHP_SELF']; ?> method="GET">
      <select name="category" onchange="this.form.submit()">
        <option>Show all</option>
        <?php foreach($categories as $option) {
          if($option->c_name == $url_parameter) { ?>
            <option selected><?php echo $option->c_name ?></option><?php
          } else { ?>
            <option><?php echo $option->c_name ?></option><?php
          }
        } ?>
      </select>
    </form><?php
  } ?>
  </div> <!-- ends dropdown -->

  <?php
  // Query to filter the projects
  if($url_parameter != "" && $url_parameter != "Show all") {
    $escaped_parameter = $database->escape_value($url_parameter);
    $sql = "SELECT * FROM projects p JOIN project_categories pc ON p.p_name = pc.p_name WHERE pc.c_name = '$escaped_parameter' ORDER BY p_group DESC";
  } else {
    $sql = "SELECT * FROM projects ORDER BY p_group DESC";
  }

  $projects = Project::find_by_sql($sql);

  $sql = "SELECT * FROM project_categories";
  $project_categories = ProjectCategories::find_by_sql($sql);
  ?>

  <a id="closeButton" href="#" onclick="closeDiv()">[close X]</a>
  <div id="projectInfo"></div>

  <!-- Listing the projects -->
  <div id="projects">
    <?php
    $title = 0;
    foreach($projects as $project) {

      $name = $project->p_name;
      $group = $project->p_group;

      if($group == 0 && $title == 0) {
        echo "<hr style=\"clear:both;\"/>";
        echo "<h1>From Tutorials</h1>";
        $title = 1;
      } ?>
      <a class="about <?php echo "project-".$project->p_group ?>" id="<?php echo $name ?>" href="#"
        onclick="showProjectInfo('<?php echo $project->p_url ?>')"
        style="border: none;">
        <div class="categories"><?php
        foreach($project_categories as $index) {
          if($name == $index->p_name) {
            echo $index->c_name . ", ";
          }
        } ?>
        </div> <!-- ends categories -->
        <?php
        echo "<h3>" . $name . "</h3>";
        echo "<p>" . $project->p_description . "</p>";
        ?>
      </a>
      <?php
    }
    ?>
  </div> <!-- ends projects -->
</article>

<?php include_once('includes/footer.php'); ?>
