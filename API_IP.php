<?php
//APIにアクセスするURL
$url = 'https://api.ipify.org/?format=json';

//ストリームコンテキストのオプションを作成
$options = array(
  //HTTPコンテキストオプションをセット
  'http' => array(
    'method' => 'GET',
    'header' =>  'Content-type: application/json; charset=UTF-8' //JSON形式で表示
  )
);

//ストリームコンテキストの作成
$context = stream_context_create($options);
$row_data = file_get_contents($url, false, $context);

//jsonの中身を連想配列にして格納
$data = json_decode($row_data, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1">
    <tr>
      <th>your IP</th>
    </tr>
    <?php foreach ($data as $key => $value) {
    } ?>
    <th><?php echo ($data["ip"]); ?></th>
  </table>
  <a href="index.php">戻る</a>
</body>

</html>