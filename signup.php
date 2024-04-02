<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Page</title>
    <!--css file references-->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/index-style.css" />
</head>

<body>

    <nav>
        <div class="wrapper">
            <a href="index.php"><img src="_img/logo.png" alt="Logo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="signup.php">signup</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
    </div>
</body>


<!--php sign up-->
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="inludes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>
<!--php sign up-->

</html>