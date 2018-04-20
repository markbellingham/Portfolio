<?php
$title = "Computing Graduate";
include_once("portfolio/includes/header.php");
?>
<div id="index-page">
<div class="left">
  <h1>A showcase of my projects and achievements</h1>
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
    <a class="applink" href="/portfolio/documents/Mark_Bellingham_CV.pdf" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'document-CV'});">Download a copy of my CV</a>
  </p>
  <!-- <br style="clear:both;"> -->
  <h2 style="clear:both;">Change the website style</h2>
  <section>
    <div style="display: inline;">
        <input type="radio" name="grootte" value="1" onclick="SetCookie(nameOfCookie, this.value, exp); doRefresh();"> Style 1 &nbsp;
        <input type="radio" name="grootte" value="2" onclick="SetCookie(nameOfCookie, this.value, exp); doRefresh();"> Style 2 &nbsp;
        <input type="radio" name="grootte" value="3" onclick="SetCookie(nameOfCookie, this.value, exp); doRefresh();"> Style 3 &nbsp;
        <input type="radio" name="grootte" value="4" onclick="SetCookie(nameOfCookie, this.value, exp); doRefresh();"> Style 4 &nbsp;
    </div>
  </section>
</div> <!-- ends left -->
<div class="right fadein">
  <img src="portfolio/images/Me/me-1.jpg" width="115%" alt="Mark Bellingham">
  <img src="portfolio/images/Me/me-2.jpg" width="115%" alt="Mark Bellingham">
  <img src="portfolio/images/Me/me-3.jpg" width="115%" alt="Mark Bellingham">
  <img src="portfolio/images/Me/me-4.jpg" alt="Mark Bellingham">
</div> <!-- ends right - ends fadein -->
<?php include("portfolio/about.php"); ?>
</div> <!-- ends index-page -->
<?php
include_once("portfolio/includes/footer.php");
?>


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
