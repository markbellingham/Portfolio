<?php

if(!isset($_SESSION['likes'])) { $_SESSION['likes'] = []; }

function is_ajax_request() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(!is_ajax_request()) { exit; }

$raw_id = isset($_POST['id']) ? $_POST['id'] : '';
echo $raw_id;

if(preg_match("/blog-post-(\d+)/", $raw_id, $matches)) {
  $id = $matches[1];

  if(!in_array($id, $_SESSION['likes'])) {
    $_SESSION['likes'][] = $id;
    $esc_id = escape_value($id);

    $sql = "UPDATE blog SET b_like = b_like + 1 WHERE b_id = $esc_id";
    echo $sql;
    $database->query($sql);
    if($database->affected_rows() == 1) {
      $sql = "SELECT b_like FROM blog WHERE b_id = $esc_id";
      echo $sql;
      $favourite = $database->query($sql);
    }
  }
  echo $favourite;
  print_r($favourite);
  return $favourite;
} else {
  echo 'false';
}

?>
