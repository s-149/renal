<html>
<head>
<?php include "meta.php"; ?>
    <title>Login Administrator</title>
    <link rel="stylesheet" type="text/css" href="style.css">     
<?php include "icon.php"; ?>
</head>
<body>
    <div id="kotak">
    <div id="atas">LOGIN ADMINISTRATOR</div>


                
                <?php
                if(isset($_POST['login'])){
                    include "koneksi.php";
                    
                    $username   = $_POST['username'];
                    $password   = $_POST['password'];
                    
                        
                   
                    if($username='admin' AND $password='admin123')
                        {
                            header("Location: home.php");
                        }
                    else
                        {
                            echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                        }
                    
                }
                ?>

    <div id="bawah">
   
    <form method="post" action="">
    <input class="masuk" type="text" autocomplete="off" placeholder="Username .." name="username"><br/>
    <input class="masuk" type="password" autocomplete="off" placeholder="Password .." name="password"><br/>
    <input id="tombol" type="submit" name="login" value="Login">
    </form>
   
    </div>
    </div>
</body>

</html>