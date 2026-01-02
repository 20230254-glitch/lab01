<?php
// Kiểm tra có đủ tham số name và age chưa
if (isset($_GET['name']) && isset($_GET['age'])) {
    // Lấy dữ liệu và chống lỗi ký tự đặc biệt
    $name = htmlspecialchars($_GET['name']);
    $age  = htmlspecialchars($_GET['age']);

    echo "<h2>Xin chào $name, tuổi: $age</h2>";
} else {
    // Nếu thiếu tham số
    echo "<h3>Thiếu tham số!</h3>";
    echo "<p>Vui lòng truy cập theo mẫu:</p>";
    echo "<code>get_demo.php?name=Nam&age=20</code>";
}
?>
