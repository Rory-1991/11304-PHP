<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI結果</title>
</head>
<body>

<h1>BMI結果</h1>    
<div>你的身高:<?=$_GET['height'];?>公分</div>
<!-- 表單的值來自'name' -->
<div>你的體重:<?=$_GET['weight'];?>公斤</div>
<!-- <?=$_GET[''];?> GET前一定要加_底線，GET必須是大寫-->
 <?php

$h=$_GET['height']/100;
$bmi=round($_GET['weight']/($h * $h),2);
// $bmi=round小數點後($_GET['height']/($h * $h),2第二位)

/* if ($bmi < 18.5) {
    $category = "體重過輕";
} elseif ($bmi >= 18.5 && $bmi < 24) {
    $category = "健康體重";
} elseif ($bmi >= 24 && $bmi < 27) {
    $category = "體重過重";
} else {
    $category = "肥胖";
} */

if($bmi<18.5){
    $level="體重過輕";
}else if($bmi<24){
    $level="健康體位";
}else if($bmi<27){
    $level="過重";
}else if($bmi<30){
    $level="輕度肥胖";
}else if($bmi<35){
    $level="中度肥胖";
}else{
    $level="重度肥胖";
}


?>
<div>你的BMI為:<?=$bmi;?></div>
<div>體位判定為:<?=$level;?></div>
<div>
<a href="index.php">回首頁/重新量測</a>

</div>

</body>
</html>