<?php
session_start();

if(!isset($_SESSION['dislikes'])) { $_SESSION['dislikes'] = []; }

function is_ajax_request() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(!is_ajax_request()) { exit; }

$raw_id = isset($_POST['id']) ? $_POST['id'] : '';
echo raw_id;

if(preg_match("/blog-post-(\d+)/", $raw_id, $matches)) {
  $id = $matches[1];

  if(!in_array($id, $_SESSION['dislikes'])) {
    $_SESSION['dislikes'][] = $id;
  }

  echo 'true';
} else {
  echo 'false';
}

?>
