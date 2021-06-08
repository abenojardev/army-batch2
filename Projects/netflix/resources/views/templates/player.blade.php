<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://vjs.zencdn.net/5-unsafe/video-js.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="video.css">
</head>
<body>
  <div id="instructions"> 
    @yield('content')
  </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://vjs.zencdn.net/5-unsafe/video.js"></script>
  <script>
      $(function(){
          var $refreshButton = $('#refresh');
          var $results = $('#css_result'); 
          function refresh(){
              var css = $('style.cp-pen-styles').text();
              $results.html(css);
          } 
          refresh();
          $refreshButton.click(refresh); 
          $results.click(function(){
              $(this).select();
          });
      });
  </script> 
</body>
</html>