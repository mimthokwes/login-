<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>Web Login wice.com</title>
    <link rel="stylesheet" href="registrasi.css">
 
    
</head>
<body>   
    <?php include "layout/wrapper.html" ?>
    <div class="boxregister" id="registerBox" >
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="rbox">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" placeholder=" " required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="Email" placeholder=" " required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="Password" placeholder=" " required>
                    <label>Password</label>
                </div>
                <div class="agreedom">
                    <label><input type="checkbox">  I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="regis">Register</button>
                <div class="register">
                    <p>Already have an account?<a href="login.php" class="login" id="loginLink"> Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

