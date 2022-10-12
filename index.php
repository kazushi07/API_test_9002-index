<?php 
//エラーリポーティングの設定
error_reporting((E_ALL | E_STRICT));
ini_set('display_errors', 'On');
ini_set('log_errors', 'On');
ini_set('error_log', '\bin\xampp\php\log\errorlog');

class Employee
{
  public function __toString()
  {
    return 'this class is: ' . __CLASS__;
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>各リンク</p>
  <ol>
    <li><a href="API_joke.php">API_joke</a></li>
    <li><a href="API_ijin.php">API_ijin</a></li>
    <li><a href="API_IP.php">API_IP</a></li>
  </ol>
    
</body>
</html>
