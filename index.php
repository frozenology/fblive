<html>
<head>
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

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
 
<button id="liveButton">Live API activator</button>
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
alert('stream url:' + response.secure_stream_url);
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