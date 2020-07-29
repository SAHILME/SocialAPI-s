<!--index.php-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Social Networks API's</title>

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
      </style>

  </head>
  <body>
      
      <!--Facebook code-->
      <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="Px85BF8k"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="SR6hh5D8"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="QOCfQcd6"></script>
    
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
              <div class="col-sm-offset-3 col-sm-2">
              <div class="fb-like" data-href="https://www.facebook.com/theengineerbroofficial/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
              <div class="fb-share-button" data-href="https://www.facebook.com/theengineerbroofficial/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Ftheengineerbroofficial%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
              <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="2bXJCyek"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="lBIfYv0a"></script>
              </div>
              <!--G+ button-->
              <!--<div class="col-sm-2">
                    <div class="g-plusone" data-size="medium"></div>    
              </div>-->
              <!--Twitter button-->
              <div class="col-sm-6">
                  <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet">
Tweet</a>
              </div>
          </div>
          
          <!--Twitter timeline-->
          <div>
               <a class="twitter-timeline" href="https://twitter.com/Cristiano" data-widget-id="659188207645495297" data-chrome="nofooter noborders" data-tweet-limit="8">Tweets by @Learn_OpenDoors</a>
 
          </div>
          <div class="fb-post" data-href="https://www.facebook.com/memetechpvtltd/videos/4326540184030585" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/memetechpvtltd/videos/4326540184030585/" class="fb-xfbml-parse-ignore"><p>Chance hai ab bhi😳</p>Posted by <a href="https://www.facebook.com/memetechpvtltd/">Meme Chat</a> on&nbsp;<a href="https://developers.facebook.com/memetechpvtltd/videos/4326540184030585/">Friday, 26 June 2020</a></blockquote></div>
          <div class="fb-video" data-href="https://www.facebook.com/facebook/videos/10153231379946729/" data-show-text="false" data-width="500px"><blockquote cite="https://developers.facebook.com/facebookapp/videos/10153231379946729/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/facebookapp/videos/10153231379946729/">How to Share With Just Friends</a><p>How to share with just friends.</p>Posted by <a href="https://www.facebook.com/facebookapp/">Facebook App</a> on Friday, 5 December 2014</blockquote></div>
          <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
      </div>

      <!--Google+-->
     <!-- <script src="https://apis.google.com/js/platform.js" async defer></script>-->
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