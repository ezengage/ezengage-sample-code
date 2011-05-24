<html>
<head>
</head>
<body>

<h1>Login</h1>

<div id="ezc-login-widget-container"></div>
<script type="text/javascript">
  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
  var ezengage_app_domain = 'demo'; // required: replace example with your ezengage app domain
  //var ezengage_token_cb = 'http://demo.ezengage.com/php/token.php'; //required: replace it with your actuall token url
  //var ezengage_token_cb = 'http://demo.ezengage.com/php/token.php'; //required: replace it with your actuall token url
  var ezengage_token_cb = 'http://localhost/php/token.php'; //required: replace it with your actuall token url

  // var ezengage_widget_style = 'normal';
  //var ezengage_widget_width = '400';
  //var ezengage_widget_height = '250';

  /* * * DON'T EDIT BELOW THIS LINE * * */
  (function() {
      //var ezengage_host = 'ezengage.net';
      var ezc = document.createElement('script'); ezc.type = 'text/javascript'; ezc.async = true;
      ezc.src = 'http://' + ezengage_app_domain + '.ezengage.net/login/embed.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ezc);
  })();
</script>
    
</body>
