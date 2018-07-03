<?php
$title = "Computing Graduate";
include_once("portfolio/includes/header.php");
?>
<div id="index-page">
<div class="left">
  <h1 id="heading-big">A showcase of my projects and achievements</h1>
  <h1 id="heading-small">My projects and achievements</h1>
  <p>
    I am a graduate from Manchester Metropolitan University where I was awarded a 1st Class (Hons) degree in BSc Computing. My areas of interest include working with data engineering, data security or software development. I also enjoy building computers, diagnosing problems and repairing them.
  </p>
  <p>
    This website is hosted on my Raspberry Pi and serves to demonstrate my university projects and coding ability.
  </p>
  <p>
    In the About Me section below you can get a brief oversight of my skills and abilities. Here you will also find confirmation of my degree results. Full certificates available on request.
  </p>
  <p>
    Click on the <a href="portfolio/projects.php"><b>Projects</b></a> link at the top of the page to find out more about my projects and assignments. You can filter the results using the dropdown selection box. If you click on one of the projects, an information box appears giving you more details as well as a link to the project report and where possible, a working project demonstration.<br/><br/>
    <a class="applink centre" href="/portfolio/documents/Mark_Bellingham_CV.pdf" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'document-CV'});"><b>Download a copy of my CV</b></a>
  </p>
  <p>
    The <a href="wiki" target="_blank" alt="wiki"><b>wiki</b></a> contains lots of information about my areas of study, as well as some programming tutorials.
  </p>
  <p>
    Feel free to <a href="contact.php"><b>contact me</b></a> if you have any questions about anything on my website, if you have something that you think might interest me, or if you just want to say hi.
  </p>

</div> <!-- ends left -->
<div class="right fadein">
  <img src="portfolio/images/Me/me-1.jpg" width="115%" alt="Mark Bellingham">
  <img src="portfolio/images/Me/me-2.jpg" width="115%" alt="Mark Bellingham">
  <img src="portfolio/images/Me/me-3.jpg" width="115%" alt="Mark Bellingham">
  <img src="portfolio/images/Me/me-4.jpg" alt="Mark Bellingham">
</div> <!-- ends right - ends fadein -->
<?php include("portfolio/about.php"); ?>
</div> <!-- ends index-page -->

<script>
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');},
      6000);
});
</script>

<?php
include_once("portfolio/includes/footer.php");
?>
