<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫連線</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>資料庫連線</h1>
    <?php
    // 資料庫連線
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', '');  // 假設root無密碼，若有請填寫

    // 查詢所有資料
    $sql = "SELECT * FROM classes";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);  // 以關聯陣列形式獲取資料

    // 顯示表格
    echo "<table>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>班級名稱</th><th>班導師</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    // 迴圈列出每一行資料
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['tutor'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    ?>
</body>
</html>
