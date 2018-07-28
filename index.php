<?php
$title = "Computing Graduate";
include_once("portfolio/includes/header.php");
?>
<div id="index-page">
  <h1 id="heading-big">A showcase of my projects and achievements</h1>
  <h1 id="heading-small">My projects and achievements</h1>
  <a id="cv" class="applink centre" href="/portfolio/documents/Mark_Bellingham_CV.pdf" target="_blank"
    onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'document-CV'});"><b>Download a copy of my CV</b></a>
  <div id="article">
    <div id="col1">
      <div id="col1a">
        <img class="me-slideshow" src="portfolio/images/Me/me-1.png" alt="Mark Bellingham">
        <img class="me-slideshow" src="portfolio/images/Me/me-2a.jpg" alt="Mark Bellingham">
        <img class="me-slideshow" src="portfolio/images/Me/me-3.jpg" alt="Mark Bellingham">
        <img class="me-slideshow" src="portfolio/images/Me/me-4.jpg" alt="Mark Bellingham">
      </div> <!-- ends col1a -->
    </div> <!--ends col1 -->
    <a id="col2" href="#about">
      <div class="context">
        <p>
          I am a graduate from Manchester Metropolitan University where I was awarded a 1st Class (Hons) degree in BSc Computing. My areas of interest include working with data engineering, data security or software development. I also enjoy building computers, diagnosing problems and repairing them.
        </p>
        <p>
          This website is hosted on my Raspberry Pi and serves to demonstrate my university projects and coding ability.
        </p>
        <p>
          In the About Me section below you can get a brief oversight of my skills and abilities. Here you will also find confirmation of my degree results. Full certificates available on request.
        </p>
      </div> <!-- ends context -->
      <div id="col2-name">
        <p>about</p>
      </div> <!-- ends col2-name -->
    </a> <!-- ends col2 -->
    <a id="col3" href="/portfolio/projects.php">
      <div id="col3-name">
        <p>portfolio</p>
      </div> <!-- ends col3-name -->
      <div class="context">
        <p>
          Click on the Projects link at the top of the page to find out more about my projects and assignments. You can filter the results using the links in the word cloud. If you click on one of the projects, an information box appears giving you more details as well as a link to the project report and where possible, a working project demonstration.<br/><br/>
        </p>
      </div> <!-- ends context -->
    </a> <!-- ends col3 -->
    <div id="col4">
      <a id="col4a" href="/wiki">
        <div class="context">
          <p>
            The wiki contains lots of information about my areas of study, as well as some programming tutorials.
          </p>
        </div> <!-- ends context -->
        <div id="col4a-name">
          <p>wiki</p>
        </div> <!-- ends col4a-name -->
      </a> <!-- ends col4a -->
      <a id="col4b" href="/contact.php">
        <div class="context">
          <p>
            Feel free to contact me if you have any questions about anything on my website, if you have something that you think might interest me, or if you just want to say hi.
          </p>
        </div> <!-- ends context -->
        <div id="col4b-name">
          <p>contact</p>
        </div> <!-- ends col4b-name -->
      </a> <!-- ends col4b -->
    </div> <!-- ends col4 -->
  </div>

<?php include("portfolio/about.php"); ?>
</div> <!-- ends index-page -->

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("me-slideshow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

<?php
include_once("portfolio/includes/footer.php");
?>
