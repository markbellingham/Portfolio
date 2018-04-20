<?php
session_start();
require_once("includes/send-email.php");

$title = "Contact Me";

// $accept = '';
// $error = '';

if(isset($_POST['submit'])) {
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['code'])) {
    if(strtolower($_POST['code']) == $_SESSION['random_code']) {
      // send email
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      send_email($name, $email, $message);
      $accept = "Message sent successfully";

    } else {
      $error = "Please verify that you typed in the correct code.";
    }
  } else {
    $error = "Please fill out the entire form.";
  }
}

include_once("includes/header.php");
?>
  <script type='text/javascript' src="/portfolio/scripts/fg_captcha_validator.js"></script>

<article style="float:none; clear:both; margin-left:auto; margin-right:auto;">
  <h1>Contact me</h1>
  <?php if(!empty($error)) echo '<div class="error">'.$error.'</div>'; ?>
  <?php if(!empty($accept)) echo '<div class="accept">'.$accept.'</div>'; ?>
  <div id="contact-wrapper">
    <div id="contact-content">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=post enctype=multipart/form-data>
        <p><input class=contact type=text name=name placeholder=Name autocorrect=off autocapitalize=words/></p>
        <p><input class=contact type=email name=email placeholder="Email address"/></p>
        <p><textarea id=message name=message placeholder="Your message"></textarea></p>
        <img src="includes/captcha.php" alt="captcha"/>
        <p><input id=captcha-code type=text name=code placeholder="Input code above"/></p>
        <p><input type=submit name=submit value=Send /></p>
      </form>
    </div> <!-- ends contact-content -->
  </div> <!-- ends contact-wrapper -->
</article>

<?php
include_once("includes/footer.php");
?>
