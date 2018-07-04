<?php
require_once('database.php');
require_once('database_object.php');

class ProjectCategories extends DatabaseObject {

  protected static $table_name = "categories";
  protected static $db_fields = array('p_name', 'c_name', 'value');

  public $p_name;
  public $c_name;

  public $value;

}
?>
