<?php
// Thiết lập múi giờ Việt Nam
date_default_timezone_set("Asia/Ha_Noi");

// Thông tin sinh viên
$hoTen = "Vũ Văn Nam";
$ngaySinh = "07/02/2005";
$maSV = "20230254";
$queQuan = "Ninh Bình";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            margin: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        td:first-child {
            font-weight: bold;
            width: 35%;
        }

        .time {
            margin-top: 20px;
            text-align: center;
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>THÔNG TIN SINH VIÊN</h1>

    <table>
        <tr>
            <td>Họ và tên</td>
            <td><?php echo $hoTen; ?></td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><?php echo $ngaySinh; ?></td>
        </tr>
        <tr>
            <td>Mã sinh viên</td>
            <td><?php echo $maSV; ?></td>
        </tr>
        <tr>
            <td>Quê quán</td>
            <td><?php echo $queQuan; ?></td>
        </tr>
    </table>

    <div class="time">
        Ngày giờ truy cập: <?php echo date("d/m/Y H:i:s"); ?>
    </div>
</div>

<hr>

<?php
// Hiển thị thông tin cấu hình PHP
phpinfo();
?>

</body>
</html>
