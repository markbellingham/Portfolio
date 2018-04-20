<?php
require_once('database.php');
require_once('database_object.php');

class Categories extends DatabaseObject {

  protected static $table_name = "categories";
  protected static $db_fields = array('c_name');

  public $c_name;
}
?>
