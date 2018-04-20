<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-115626803-1', 'auto');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<h1>Third Year Project - Web Security</h1>
<div class="left">
  <p>
    3rd year project to develop a program that monitors for unauthorised changes to a website, and performs notification and restoration tasks when changes are found
  </p>
  <p>
    <h3>Features</h3>
    <ul>
      <li>Ongoing monitoring, even after there has been a breach</li>
      <li>Restores the website from backup</li>
      <li>Analyses log files to extract information about the attack, including date, time and user IP address</li>
      <li>Emails the administrator with details about the attack</li>
      <li>Attempts to block the attacker from returning to the website</li>
    </ul>
  </p>
  <p>
    Web pages are hashed and the hashes stored in a database. The program monitors the website, getting new hashes of the pages at set intervals. It then compares the new hashes with those in the database and if there is no match it retrieves the webserver access_log, finds the entry that has the same time (to within about 1 minute) of the error time, extracts the IP address(es) that were accessing the page at that time and sends all this information in an email to the administrator of the website. Then it restores the website from the backup and continues monitoring. If there is a second breach the program identifies whether the IP address is one that modified the website previously, and if this is found to be the case it adds that IP address to the .htaccess file preventing it from accessing the website further.
  </p>
  <p>
    <a href="https://github.com/markbellingham/ProjectWebSecurity" target="_blank"
        onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'code', 'eventAction':'GitHub-project-WebSec'});">
      <b>Program source code</b>
    </a>
  </p>
  <p>
    <a href="documents/project-websec-report.pdf" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'report-Project-WebSec'});">
      <b>Project report</b>
    </a>
  </p>
</div> <!-- ends left -->
<div class="right">
  <a data-fancybox="gallery" href="images/screens/web-security.png" onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'image', 'eventAction':'image-project-websec-output'});">
    <img src="images/screens/web-security.png" width="100%"/>
  </a>
</div> <!-- ends right -->
