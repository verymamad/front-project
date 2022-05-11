<!DOCTYPE html>
<html lang="fa">

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>
    <header class="head">
        <img class="logo" src="../assets/css/files/logo-colored.png" alt="logo">
        <input class="search-box" type="search" placeholder="search">
        <a class="btn head-btn sign-in-btn" href="./login.php">Sign In</a>
        <a class="btn head-btn sign-up-btn" href="./register.php">Sign Up</a>
    </header>

    <div class="container">
        <h1>Register</h1>
        <form action="" method="POST">
            <div class="form">
                <label for="name">Name</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="username">Username</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" id="email">
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
                <label for="c-password">Confirm Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
            </div>
            <button class="btn" type="submit">Register</button>
        </form>
    </div>
</body>

</html>