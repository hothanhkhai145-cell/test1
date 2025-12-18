<?php

if (isset($_SESSION['user'])) {
    echo "<p style='color:green;'>Xin chào, " . htmlspecialchars($_SESSION['user']) . "!</p>";
} else {
    echo "<p style='color:red;'>Bạn chưa đăng nhập</p>";
}
?>
