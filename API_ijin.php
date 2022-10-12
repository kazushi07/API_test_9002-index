<?php
// APIアクセスURL
$url = 'https://umayadia-apisample.azurewebsites.net/api/persons';
// ストリームコンテキストのオプションを作成
$options = array(
    // HTTPコンテキストオプションをセット
    'http' => array(
        'method' => 'GET',
        'header' => 'Content-type: application/json; charset=UTF-8' //JSON形式で表示
    )
);

// ストリームコンテキストの作成
$context = stream_context_create($options);

$raw_data = file_get_contents($url, false, $context);

// debug
//var_dump($raw_data);

// json の内容を連想配列として $data に格納する
$data = json_decode($raw_data, true);
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
    <table>
        <tr>
            <th>name</th>
            <th>note</th>
        </tr>
        <?php foreach ($data as $key => $value) { // 連想配列を取り出す、単独のvalueとkeyだと配列にならないので空白になる 
        ?>
            <?php if (is_array($value)) { // 値が配列のみループで回して表示 
            ?>
                <?php foreach ($value as $column) { ?>
                    <tr>
                        <td><?php echo $column['name']; ?></td>
                        <td><?php echo $column['note']; ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </table>
    <a href="index.php">戻る</a>
</body>

</html>