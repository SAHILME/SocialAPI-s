<!--index.php-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SocialAPI's</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>  
      <style>
          body{
            background: url(balloons.jpg) center center fixed;
              background-size: cover;
              text-align: center;
              font-family: Arvo, serif;
          }
          
          .jumbotron{
            background-color: transparent;   
          }
          .jumbotron h1{
            letter-spacing: 2.5px;   
          }
          
          .form-horizontal{
            margin-top: 50px;   
          }
          
          .row{
            margin-top: 30px;   
          }
          
          .col-sm-2{
            margin-bottom: 10px;   
          }
          
/*Navigation bar*/
.navbar-custom, .footer {
  background-color: #372C2A;
  border-color: #499cc7;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#372C2A), to(#372C2A));
  background-image: -webkit-linear-gradient(top, #372C2A, 0%, #372C2A, 100%);
  background-image: -moz-linear-gradient(top, #372C2A 0%, #372C2A 100%);
  background-image: linear-gradient(to bottom, #372C2A 0%, #372C2A 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff89bfdb', endColorstr='#ffbf3030', GradientType=0);
}
.navbar-custom .navbar-brand {
  color: #ffffff;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #e6e6e6;
  background-color: transparent;
}
.navbar-custom .navbar-text {
  color: #ffffff;
}
.navbar-custom .navbar-nav > li:last-child > a {
  border-right: 1px solid #499cc7;
}
.navbar-custom .navbar-nav > li > a {
  color: #ffffff;
  border-left: 1px solid #499cc7;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #c0c0c0;
  background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #c0c0c0;
  background-color: #499cc7;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#499cc7), to(#70b1d3));
  background-image: -webkit-linear-gradient(top, #499cc7, 0%, #70b1d3, 100%);
  background-image: -moz-linear-gradient(top, #499cc7 0%, #70b1d3 100%);
  background-image: linear-gradient(to bottom, #499cc7 0%, #70b1d3 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff499cc7', endColorstr='#ff70b1d3', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #dddddd;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #479bc7;
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color: #499cc7;
  color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
@media (max-width: 767) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #c0c0c0;
    background-color: transparent;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #c0c0c0;
    background-color: #499cc7;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-custom .navbar-link {
  color: #ffffff;
}
.navbar-custom .navbar-link:hover {
  color: #c0c0c0;
}
      </style>

  </head>
  <body>
  <!--Navigation Bar-->  
  <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
      
      <div class="container-fluid">
        
          <div class="navbar-header">
          
              <a class="navbar-brand">Wanna see?</a>
              <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              
              </button>
          </div>
          <div class="navbar-collapse collapse" id="navbarCollapse">
              <ul class="nav navbar-nav">
                <li ><a href="index.php">Twitter</a></li>
                <li><a href="index2.php">FB pages</a></li>
                <li class="active"><a href="#">Entertainment</a></li>
              </ul>
              <!-- <ul class="nav navbar-nav navbar-right">
                <li><a href="#loginModal" data-toggle="modal">Login</a></li>
              </ul>
           -->
          </div>
      </div>
  
  </nav>
      
      <!--Facebook code-->
      <div id="fb-root"></div>
      
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="jqWoM6b0"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="SR6hh5D8"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="QOCfQcd6"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="wD36pFC7"></script>
    
      <div class="jumbotron">
          <div class="container-fluid">
              <h1>Join us and build Freedom</h1>
              <p>We make freedom, we love freedom, we spread freedom.</p>
          </div>
          
          <form class="form-horizontal">
              <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-8">
                      <input type="email" id="email" placeholder="Your Email" class="form-control">
                  
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-xs-offset-3 col-xs-6">
                      <input type="submit" id="submit" value="Subscribe" class="btn btn-info btn-lg">
                      
                  
                  </div>
              </div>
          
          </form>
          
          <div class="row">
              <!--facebook button-->
              <div class="col-sm-offset-5 col-sm-2">
              <div class="fb-like" data-href="https://www.facebook.com/theengineerbroofficial/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
              <div class="fb-share-button" data-href="https://www.facebook.com/theengineerbroofficial/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Ftheengineerbroofficial%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
              <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="ypu2fpy4"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="aEp7m6Cg"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="sHDULmWO"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="R6ye9XRW"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="e691BdoY"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="9drkMMzp"></script>
              
              </div> 
          </div>


          <div>
          <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/10153231379946729/" data-show-text="false" data-width="600px"><blockquote cite="https://developers.facebook.com/facebookapp/videos/10153231379946729/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/facebookapp/videos/10153231379946729/">How to Share With Just Friends</a><p>How to share with just friends.</p>Posted by <a href="https://www.facebook.com/facebookapp/">Facebook App</a> on Friday, 5 December 2014</blockquote></div>
          </div>
          <div>
          <div class="fb-post" data-href="https://www.facebook.com/crictracker/posts/4061821487181875" data-show-text="true" data-width="600px"><blockquote cite="https://www.facebook.com/crictracker/posts/4061821487181875" class="fb-xfbml-parse-ignore"><p>KKR might not want these five players in their team.</p>Posted by <a href="https://www.facebook.com/crictracker/">CricTracker</a> on&nbsp;<a href="https://www.facebook.com/crictracker/posts/4061821487181875">Monday, 9 November 2020</a></blockquote></div>
          </div>
          <div>
          <div class="fb-post" data-href="https://www.facebook.com/PrinceEa/posts/10159366022509769" data-show-text="true" data-width="600px"><blockquote cite="https://www.facebook.com/PrinceEa/posts/10159366022509769" class="fb-xfbml-parse-ignore">Posted by <a href="https://www.facebook.com/PrinceEa/">Prince Ea</a> on&nbsp;<a href="https://www.facebook.com/PrinceEa/posts/10159366022509769">Monday, 9 November 2020</a></blockquote></div>
          </div>
          <div>
          <div class="fb-post" data-href="https://www.facebook.com/cistheta/posts/1109999292773370" data-show-text="true" data-width="600px"><blockquote cite="https://www.facebook.com/cistheta/posts/1109999292773370" class="fb-xfbml-parse-ignore"><p>© Yagi Agney</p>Posted by <a href="https://www.facebook.com/cistheta/">CiS θ  : Commonsense is seriously Complex</a> on&nbsp;<a href="https://www.facebook.com/cistheta/posts/1109999292773370">Monday, 9 November 2020</a></blockquote></div>
          </div>
          <div>
          <div class="fb-video" data-href="https://www.facebook.com/106416977511463/videos/607788953474464" data-show-text="false" data-width="600px"><blockquote cite="https://developers.facebook.com/106416977511463/videos/607788953474464/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/106416977511463/videos/607788953474464/">Beautiful Nature videos</a><p>Beautiful Nature videos</p>Posted by <a href="https://www.facebook.com/Videos-Funny-HD-106416977511463/">Videos Funny HD</a> on Tuesday, 28 July 2020</blockquote></div>
          </div>
          <div>
          <div class="fb-video" data-href="https://www.facebook.com/TheDailyBugleSpidey/videos/811691689597144" data-show-text="false" data-width="600px"><blockquote cite="https://developers.facebook.com/TheDailyBugleSpidey/videos/811691689597144/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/TheDailyBugleSpidey/videos/811691689597144/">Americad the Democrats as the Avengers, fa🤣!</a><p>Ae in Avengers Endgame to hav</p>Posted by <a href="https://www.facebook.com/TheDailyBugleSpidey/">Daily Bugle Spidey</a> on Saturday, 7 November 2020</blockquote></div>
          </div>
          <div>
          <div class="fb-video" data-href="https://www.facebook.com/106738347740604/videos/994732914374276" data-show-text="false" data-width="600px"><blockquote cite="https://developers.facebook.com/106738347740604/videos/994732914374276/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/106738347740604/videos/994732914374276/">Avengers Endgame Captain America 2019 vs Captain America 2012</a><p></p>Posted by <a href="https://www.facebook.com/MaximumEntertainment-106738347740604/">MaximumEntertainment</a> on Sunday, 8 November 2020</blockquote></div>
         </div>
          
     
      <!--Twitter-->
      <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>