<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Login-Page.css" />
    <title>Login</title>
</head>

<body>
    <!-- Navbar start -->
    <header class="header">
        <img src="./img/logo.png" alt="logo">
        <nav class="navbar">
            <a href="Register">Register</a>
            <a href="Profile">Profile</a>
        </nav>
    </header>
    <!-- Navbar end -->

    <!-- Form start -->
    <div class="container">
        <form method="post" action="" class="form">

            <h2>Login</h2>
            <input type="text" name="email" class="box" placeholder="Enter Email" />
            <input type="password" name="password" class="box" placeholder="Enter Password" />
            <button class="button" type="submit" id="submit" name="button">SIGN IN</button>
            <a href="#">Forget Password?</a>
        </form>
        <?php
        if (isset($_POST['button'])) {
            if (
                $_POST['email'] == "admin" &&
                $_POST['password'] == "admin"
            ) {
                header("Location: Store.php");
                exit;

            } else {
                echo '<script>alert("Login Gagal")</script>';
            }
        }
        ?>

        <div class="side">
            <img src="./img/people1.svg" alt="" />
        </div>
    </div>
        <!-- Form End -->

</body>


</html>