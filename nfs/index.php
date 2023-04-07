
<h1>Test php-mysql </h1>
<?php
  mysqli_connect('mysql-svc.default.svc.cluster.local','sun','123') or die('failed');
  echo 'success';
#  phpinfo();
?>
