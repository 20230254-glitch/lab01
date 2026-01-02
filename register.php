<?php
$error = "";
$result = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST["fullname"] ?? "");
    $email    = trim($_POST["email"] ?? "");
    $gender   = $_POST["gender"] ?? "Chưa chọn";
    $hobbies  = $_POST["hobbies"] ?? [];

    // KIỂM TRA BẮT BUỘC
    if ($fullname == "" || $email == "") {
        $error = "❌ Họ tên và Email là bắt buộc, vui lòng nhập đầy đủ!";
    } else {
        // LƯU DỮ LIỆU HỢP LỆ
        $result = [
            "Họ tên"    => htmlspecialchars($fullname),
            "Email"     => htmlspecialchars($email),
            "Giới tính" => htmlspecialchars($gender),
            "Sở thích"  => array_map("htmlspecialchars", $hobbies)
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form đăng ký</title>
</head>
<body>

<h2>Form đăng ký</h2>

<!-- HIỂN THỊ LỖI -->
<?php if ($error != ""): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<!-- FORM -->
<form method="post">
    <p>
        Họ tên:<br>
        <input type="text" name="fullname">
    </p>

    <p>
        Email:<br>
        <input type="email" name="email">
    </p>

    <p>
        Giới tính:<br>
        <input type="radio" name="gender" value="Nam"> Nam
        <input type="radio" name="gender" value="Nữ"> Nữ
    </p>

    <p>
        Sở thích:<br>
        <input type="checkbox" name="hobbies[]" value="Đọc sách"> Đọc sách
        <input type="checkbox" name="hobbies[]" value="Nghe nhạc"> Nghe nhạc
        <input type="checkbox" name="hobbies[]" value="Thể thao"> Thể thao
    </p>

    <button type="submit">Submit</button>
</form>

<hr>

<!-- HIỂN THỊ KẾT QUẢ -->
<?php if (!empty($result)): ?>
    <h3>✅ Dữ liệu đã gửi (POST)</h3>
    <ul>
        <li><strong>Họ tên:</strong> <?php echo $result["Họ tên"]; ?></li>
        <li><strong>Email:</strong> <?php echo $result["Email"]; ?></li>
        <li><strong>Giới tính:</strong> <?php echo $result["Giới tính"]; ?></li>
        <li><strong>Sở thích:</strong>
            <ul>
                <?php foreach ($result["Sở thích"] as $hb): ?>
                    <li><?php echo $hb; ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
<?php endif; ?>

</body>
</html>
