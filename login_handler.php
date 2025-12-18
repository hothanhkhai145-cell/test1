<?php
$users = [
    'user@gmail.com' => '123456',
    'admin@gmail.com' => '123456'
];

$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email_address'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$email]) && $users[$email] === $password) {
        $_SESSION['user'] = $email;
        header('Location: index.php'); 
        exit;
    } else {
        $login_error = 'Email hoặc mật khẩu không đúng!';
    }
}
?>
