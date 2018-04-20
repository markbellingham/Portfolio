<?php
session_start();
// $_SESSION['favourites'] = [];
if(!isset($_SESSION['likes'])) { $_SESSION['likes'] = []; }
if(!isset($_SESSION['dislikes'])) { $_SESSION['dislikes'] = []; }
// print_r($_SESSION);

$title = "Blog";

include_once("includes/header.php");
require_once("includes/blog_model.php");
require_once("includes/functions.php");

// Get the parameter from the URL which determines page content
if(isset($_GET['month']) && isset($_GET['year'])) {
  $year = $_GET['year'];
  $month = $_GET['month'];
  $articles = Blog::find_articles_by_month($year, $month);
} else if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $articles = Blog::find_articles_by_id($id);
} else {
  $articles = Blog::find_articles_by_id();
}
?>

<div id="blog">
	<div id="navigation">
    <div id="article-stubs">
      <h4>Browse articles by name</h4>
      <?php echo Blog::navigation_by_article(); ?>
    </div> <!-- ends article-stubs -->
    <div class="tree">
      <h4><a href="blog.php">Show all articles</a></h4>
      <h4>Browse articles by date</h4>
  		<?php echo Blog::navigation_by_date(); ?>
    </div> <!-- ends tree -->
	</div> <!--ends navigation-->
	<div id="articles">
    <?php
    foreach($articles as $article) {?>
      <div>
        <div id="blog-post-<?php echo $article->b_id; ?>" class="blog-post">
          <h2><?php echo $article->b_title ?></h2>
          <?php echo $article->b_date ?><br /><br />
          <?php echo $article->b_content; ?>
          <a class="like-heart" href="#">&hearts; <span id="like-value"><?php echo $article->b_like; ?></span></a>
          <a class="dislike-heart" href="#">&hearts; <span id="dislike-value"><?php echo $article->b_dislike; ?></span></a>
        </div><?php
    }
    ?>
	</div> <!--ends articles-->

</div> <!-- ends blog -->
<?php
include_once("includes/footer.php");
?>
