<html>
<head>
<title>External IP</title>
<body>
<h1>
<?php
  $ip = file_get_contents('https://api.ipify.org');
  echo "External IP: " . $ip;
  //phpinfo();
?>
</h1>
</body>
</html>
