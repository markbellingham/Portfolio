<?php
require_once('database.php');
require_once('database_object.php');

class Blog extends DatabaseObject {

  protected static $table_name = "blog";
  protected static $db_fields = array('b_id', 'b_title', 'b_date', 'b_content', 'b_visible', 'b_like', 'b_dislike');

  public $b_id;
  public $b_title;
  public $b_date;
  public $b_content;
  public $b_visible;
  public $b_like;
  public $b_dislike;

  public function navigation_by_article() {
    $sql = "SELECT b_title, b_id FROM blog ORDER BY b_date DESC";
    $articles = static::find_by_sql($sql);

    foreach($articles as $article) { ?>
      <a href="blog.php?id=<?php echo $article->b_id ?>"><?php echo $article->b_title . "</a><br/><br/>";
    }
  }

  public function navigation_by_date() {
    $years = array();
    $output = '<ul>';
    $sql = "SELECT b_date FROM blog ORDER BY b_date DESC";
    $dates = static::find_by_sql($sql);

    foreach($dates as $date) {
      $formatted_date = date("Y-F-d", strtotime($date->b_date));
      list($year, $month, $day) = explode('-', $formatted_date);

      if(!in_array($year, $years)) {
        $years[] = $year;
      }
    }

    foreach($years as $y) {
      $months = array();
      $output .= '<li><a>' . $y . '</a>';
      $output .= '<ul>';
      foreach($dates as $date) {
        $formatted_date = date("Y-F-d", strtotime($date->b_date));
        list($year, $month, $day) = explode('-', $formatted_date);

        if($year == $y && !in_array($month, $months)) {
          $months[] = $month;
          $output .= '<li><a href="blog.php?';
          $output .= 'year=' . $year;
          $output .= '&month=' . $month . '">';
          $output .= $month;
          $output .= '</a></li>';
        }
      }
      $output .= '</ul>';
      $output .= '</li>';
    }
    $output .= '</ul>';
    return $output;
  }


  public function find_articles_by_id($url_parameter = "") {
    global $database;
    $sql = "SELECT * FROM blog";
    if($url_parameter != "") {
      $escaped_parameter = $database->escape_value($url_parameter);
      $sql .= " WHERE b_id = {$escaped_parameter}";
    }
    $sql .= " ORDER BY b_date DESC";
    $articles = static::find_by_sql($sql);
    return $articles;
  }

  public function find_articles_by_month($year = "", $month = "") {
    global $database;
    $sql = "SELECT * FROM blog";
    if($year != "") {
      $escaped_year = $database->escape_value($year);
      $escaped_month = $database->escape_value($month);
      $numeric_month = date('m', strtotime($escaped_month));
      $sql .= " WHERE year(b_date) = {$escaped_year} AND";
      $sql .= " month(b_date) = {$numeric_month}";
    }
    $sql .= " ORDER BY b_date DESC";
    $articles = static::find_by_sql($sql);
    return $articles;
  }

}
?>
