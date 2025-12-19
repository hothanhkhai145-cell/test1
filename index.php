<?php
session_start();
include 'login_handler.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insect Blog Template - PHP Backend</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_top_panel">
	<div id="templatemo_top_section">
		<div id="site_title"> chào</div> 
        <div id="site_tagline">Ho Thanh Khai - Thứ 5 ca 3</div>  
        <div id="templatemo_menu">
        	<ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li><a href="#">Recent Posts</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Company</a></li> 
                <li><a href="logout.php" class="last">Logout</a></li>                     
            </ul> 
		</div>
    </div>
</div>

<div id="templatemo_content_panel">
	<div id="templatemo_content_section">   
    	<div id="templatemo_content_left">
        	<div id="login_section">
            	<div id="login_section_top"></div>
                <div id="login_section_title">Member Login</div>
                <div id="login_section_middle">
                    <?php if (!empty($login_error)) echo "<p style='color:red;'>$login_error</p>"; ?>
                	<form action="" method="post">
                        <div class="form_row">
                            <label>Email: </label>
                            <input name="email_address" type="text" id="email_address" required/>
                        </div>
                        <div class="form_row">
                            <label>Password: </label>
                            <input name="password" type="password" id="password" required/>
                        </div>
                        <input class="button" type="submit" name="Submit" value="Login" />
                    </form>
                    <a href="#">Forget Password ?</a><br />
                    <a href="#">Create New Account</a>
                </div>
                <div id="login_section_bottom"></div>
            </div>

            <div id="left_column_section">
            	<div id="left_column_section_top"></div>
                <div id="left_column_section_title">Thông tin người dùng</div>
                <div id="left_column_section_middle">
                    <?php include 'user_info.php'; ?>
                </div>
            </div>
        </div>
        
        <div id="templatemo_content_right">
            <!-- Giữ nguyên nội dung bên phải (posts, hình ảnh…) -->
        </div>
    </div>
</div>

<div id="templatemo_footer_panel">
	<div id="templatemo_footer_section">
    	Copyright © 2024 <a href="#">Your Company Name</a>
    </div>
</div>
</body>
</html>
