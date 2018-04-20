<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-115626803-1', 'auto');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<h1>Congo</h1>
<div class="left">
<p>
  2nd year Web and Mobile assignment comprising a dynamic website linking html/css, java, and mysql.
</p>
<p>
  The brief was to create a dynamic website which would take data from a database and display relevant content in the context of an online shop. The technologies that are used in this project are MySQL for the database and a combination of Java servlets and JSP for the front end.
</p>
<p>
  <a href="documents/web-mobile-assignment-report.pdf" target="_blank"
    onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'PDF document', 'eventAction':'assignment-report-congo'});">
    <b>Assignment report</b>
  </a>
</p>
<p>
  <a class="applink" href="https://markbellingham.me/Congo" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'application demo', 'eventAction':'app-Congo'});">
    Try out the website here
  </a>
</p>
<p>
  Some of the features of this web application will require you to log in before they are accessible<br/>
  <a href="https://markbellingham.me/portfolio/documents/congo_passwords.txt" target="_blank"><b>You can find a list of current users and their passwords here</b></a>
</p>
<p>
  <a href="https://github.com/markbellingham/congo" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'code', 'eventAction':'GitHub-Congo'});">
    Link to the project source code
  </a>
</p>
<strong>Task 1 (40% - 50%)</strong>
<ol>
  <li>Create a dynamic web project in eclipse</li>
  <li>Create a servlet,	MusicListing.java, that	generates	a	web	page showing the details of all music recordings (albums), the results should be tabulated with column headings.</li>
  <li>Create a html page, index.html. This should have a hyperlink or button that takes you to 2) and should be accessed using the relative URL 'albums'</li>
  <li>Create another html page, category.html. This page provides a drop-down menu, from which it is possible to display a table of album details based on selecting a particular musical category.</li>
  <li>All pages should contain a link back to the index page.</li>
</ol>
<strong>Task 2 (50% - 60%)</strong>
<ol>
  <li>Complete Task 1</li>
  <li>Create and use a cascading style sheet used throughout the site that displays a suitable logo on each page in the same position.</li>
  <li>Create price.html, a page providing a drop-down menu, from which it is possible to display a table of albums based on selecting a particular price range.</li>
  <li>Create artist.html that provides a text entry search for the albums of a particular artist. Should the search not return any albums then a suitable error page is to be displayed.</li>
  <li>All pages that display the results of various searches should now display a hyperlink from the album title which goes to another page where the details of the album and a full track listing are displayed.</li>
  <li>All pages should display a link back to the index page.</li>
</ol>
<strong>Task 3 (60% - 70%)</strong>
<ol>
  <li>Extend the application, allowing albums to be added to a shopping cart from whichever page displays the album details. Once the shopping is completed, the user will be able to amend their order by deleting items from the cart. The interim cart page should display: the title, artist and price of albums; and the running total of the order.</li>
  <li>The checkout page is to display the total price and details of teh order, and provide a form for delivery and contact details to be entered (payment details are not required). All details are to be completed before submission of the order. On submission the details of the order are to be entered into a suitable set of database tables.</li>
</ol>
<strong>Task 4 (70% - 80%)</strong>
<ol style="list-style-type:none">
  <li>Implement a logging in system with ussers distinguished as either admin or customer. Those not logged in can access searches but cannot buy anything. The system will have a registration screen and the details stored in suitable database table(s). Allocate customers a unique customer number. When logged in, as well as the functionality in the previous tasks, there is the ability to check their current orders. Admin had the functionality to amend the stock database by deleting/adding albums</li>
</ol>
<strong>Other tasks (80%+)</strong>
<ol style="list-style-type:none">
  <li><p>Demostrate the use of MVC and DAO design patterns by implementing JavaBeans, JSP and the use of response.redirect. Implement any other features such as the use of AJAX to provide update/gossip information etc.</p></li>
  <li><p>Add functionality to display pages that allow the listings to be ordered by price or title or artist etc. Provide any other functionality as desired.</p></li>
</ol>
</div> <!-- ends left -->
<div class="right">
  <a href="https://markbellingham.me/Congo" target="_blank"
      onclick="ga(‘send’, {'hitType':'event', 'eventCategory':'application demo', 'eventAction':'app-Congo'});">
    <img src="images/screens/congo.png" width="100%"/>
  </a>
</div> <!-- ends right -->
