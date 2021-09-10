<?php
 http_response_code(503);
 header('Cache-Control: no-store, no-cache, must-revalidate');
 header('Cache-Control: post-check=0, pre-check=0', false);
 header('Pragma: no-cache');
?>
<!doctype html>

<head>
 <title>Site Maintenance</title>
<style>
  body { text-align: center; padding-top: 150px; }
  body { font: 18px Segoe UI, sans-serif; color: #000000; background-color: #f6f8fa; }
  article { text-align: left; width: 650px; margin: 0 auto; padding: 20px; box-shadow: -1px 0px 97px -38px rgb(198 182 182 / 70%); border-radius: 10px; background-color: #fff;}
  p {font: 18px Segoe UI, sans-serif;}
</style>
</head>

<body>
<article>
    <h2>Updating website to better serve you.!</h2>
    <div>
        <p>We apologise for the inconvenience, but we are now undergoing maintenance. Thank you for your patience. Please visit us after a while.</p>
        <p>- Team</p>
    </div>
</article>    
</body
    
</html>
