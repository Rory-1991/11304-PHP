<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號密碼檢查</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .message {
            margin: 15px 0;
            font-size: 1.1em;
            color: #555;
        }
        a {
            text-decoration: none;
            color: #28a745;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
 <!--    <?php
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin' && $pw=='1234'){
    $result =  "登入成功！歡迎{$acc}！";
}else{
    $result =  "帳號或密碼錯誤，請重新嘗試。";
}
?>

<div class="container">
        <h1>登入結果</h1>
        <div class="message"><?= htmlspecialchars($result); ?></div>
        <div>
            <a href="login.php">回到登入頁面</a>
        </div>
    </div> -->


    <!-- session -->
    <?php 
session_start();
if(!isset($_POST['acc'])){
    header("location:login.php");
    exit();
}

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin' && $pw=='1234'){
    echo "帳密正確:登入成功";

    $_SESSION['login']=$acc;
    echo "<br><a href='login.php'>回首頁</a>";
}else{
    echo "帳密錯誤:登入失敗";

}
?>

<!-- COOKIE -->
<!-- <?php 

if(!isset($_POST['acc'])){
    header("location:login.php");
    exit();
}

$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc=='admin' && $pw=='1234'){
    echo "帳密正確:登入成功";
    setcookie("login","$acc",time()+180);
    echo $_COOKIE['login'];
    echo "<br><a href='login.php'>回首頁</a>";
}else{
    echo "帳密錯誤:登入失敗";

}


?> -->

</body>
</html>