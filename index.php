<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/default.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/material.js"></script>
    <script src="js/main.js"></script>
    <style>
        .section { position: relative; overflow: hidden; height: 480px; }
        .section video { position: absolute; left: 0; right: 0; width: 100%; z-index: -10; }
        .section .jumbotron { background: transparent; color: white; box-shadow: none; margin-top: 60px; }
    </style>
</head>
<body>
<script>
window.fbAsyncInit = function() {
    FB.init({
    appId     : '189547994777355',
    xfbml     : true,
    version   : 'v2.6'
    });
}; 
(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Facebook Broadcast Starter</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Help</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

<div class="section">
    <video class="bg" autoplay loop>
        <source src="media/FB_Live_Hero.mp4" />
    </video>
    <div class="container">
    <div class="jumbotron">
      <div class="text-center">
        <h1>Facebook Live</h1>
        <p class="lead">Start your facebook live broadcast today.</p>
        <p><button class="btn btn-lg btn-success" href="#" role="button" id="liveButton">Begin</button></p>
      </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row marketing">
    <div class="col-lg-6">
      <h4>Easy</h4>
      <p>Login facebook to get broadcasting code.</p>

      <h4>Your software</h4>
      <p>You can use any broadcast software to publish your contents.</p>

      <h4>Instant</h4>
      <p>Start Live after you get your codes.</p>
    </div>

    <div class="col-lg-6">

    </div>
    </div>
</div>
    
<footer class="footer">
    <div class="container">
        <p>© 2015 frozenology elemental, Inc.</p>
    </div>
</footer>
     
<script>
document.getElementById('liveButton').onclick = function() {
    FB.ui({
        display: 'popup',
        method: 'live_broadcast',
        phase: 'create',
    }, function(response) {
        if (!response.id) {
          alert('dialog canceled');
          return;
        } 
        alert('stream url:' + response.secure_stream_url + ' ');
        FB.ui({
          display: 'popup',
          method: 'live_broadcast',
          phase: 'publish',
          broadcast_data: response,
        }, function(response) {
            alert("video status: \n" + response.status);
        });
    });
};
</script>

</body>
</html>