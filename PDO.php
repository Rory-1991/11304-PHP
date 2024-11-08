<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫連線</title>
</head>
<body>
    <h1>資料庫連線</h1>
    <?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn, 'root','');
// 上面這行代表意思 PDO後面三個參數 $pdo = new PDO(Data Source Name, '資料庫的使用者名稱', 'your_password_here');
// ''空字串，表示沒有密碼

$sql="select * from classes";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo $rows[0]['tutor'];

foreach($rows as $row){
    echo $row['id']."-".$row['name']."-".$row['tutor']."<br>";
}

/* 
echo "<pre>";
print_r($rows);
echo "</pre>"; */

    ?>
</body>
</html>