<?php
require_once('database.php');
require_once('database_object.php');

class Project extends DatabaseObject {

  protected static $table_name = "projects";
  protected static $db_fields = array('p_name', 'p_description', 'p_picture', 'p_group', 'p_url');

  public $p_name;
  public $p_description;
  public $p_picture;
  public $p_group;
  public $p_url;

}
?>
