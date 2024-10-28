<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號密碼檢查</title>
</head>
<body>
    <?php
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin' && $pw=='1234'){
    echo "帳密正確:登入成功";
}else{
    echo "帳密錯誤:登入錯誤";
}


?>
</body>
</html>