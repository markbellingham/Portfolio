// Function to display the Project Info div with relevant information
function showProjectInfo(url) {
  var xhr = new XMLHttpRequest();
  var target = document.getElementById("projectInfo");
  xhr.open('GET', url, true);
  xhr.onreadystatechange = function () {
    console.log('readyState: ' + xhr.readyState);
    if(xhr.readyState == 2) {
      target.innerHTML = 'Description not available.';
    }
    if(xhr.readyState == 4 && xhr.status == 200) {
      $('#closeButton').show();
      $('#projectInfo').fadeIn(500).show();
      target.innerHTML = xhr.responseText;
      ga('set', 'page', url);
      ga('send', 'pageview');
    }
  }
  xhr.send();
}

// Function to close the projectInfo div
function closeDiv() {
	$('#projectInfo').fadeOut(500).hide();
  $('#closeButton').hide();
};

function like() {
  var parent = this.parentElement;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'includes/like.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.onreadystatechange = function () {
    if(xhr.readyState == 4 && xhr.status == 200) {
      var result = xhr.responseText;
      console.log('Result: ' + result);
      if(result == 'true') {

        parent.classList.add("like");
      }
    }
  };
  xhr.send("id=" + parent.id);
}

var likes = document.getElementsByClassName("like-heart");
for(i=0; i < likes.length; i++) {
  likes.item(i).addEventListener("click", like);
}

function dislike() {
  var parent = this.parentElement;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'includes/dislike.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.onreadystatechange = function () {
    if(xhr.readyState == 4 && xhr.status == 200) {
      var result = xhr.responseText;
      console.log('Result: ' + result);
      if(result == 'true') {
        parent.classList.add("dislike");
      }
    }
  };
  xhr.send("id=" + parent.id);
}

var dislikes = document.getElementsByClassName("dislike-heart");
for(i=0; i < dislikes.length; i++) {
  dislikes.item(i).addEventListener("click", dislike);
}

// Function to enable the blog menu
$( document ).ready( function( ) {
    $( '.tree li' ).each( function() {
        if( $( this ).children( 'ul' ).length > 0 ) {
            $( this ).addClass( 'parent' );
        }
    });

    $( '.tree li.parent > a' ).click( function( ) {
        $( this ).parent().toggleClass( 'active' );
        $( this ).parent().children( 'ul' ).slideToggle( 'fast' );
    });

});
