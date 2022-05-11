<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7bd119aee0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Contact Us</title>
</head>

<body>
    <header class="head">
        <img class="logo" src="../assets/css/files/logo-colored.png" alt="logo">
        <input class="search-box" type="search" placeholder="search">
        <a class="btn head-btn sign-in-btn" href="./login.php">Sign In</a>
        <a class="btn head-btn sign-up-btn" href="./register.php">Sign Up</a>
    </header>
    <nav class="nav">
        <div class="nav-icons">
            <a href="./index.php"><i class="fa-solid fa-house nav-btn"></i></a>
            <a href="./chat.php"><i class="fa-solid fa-comment nav-btn"></i></a>
            <a href="./addSong.php"><i class="fa-solid fa-plus nav-btn"> </i></a>
            <a href="./library.php"><i class="fa-solid fa-compact-disc nav-btn"></i></a>
            <a href="./editProfile.php"><i class="fa-solid fa-user nav-btn"></i></a>
        </div>
    </nav>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="" method="POST">
            <div class="form">
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" id="email">
                <br>
                <label for="title">Title</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="description">Description</label>
                <br>
                <textarea name="description" id="description"></textarea>
                <br>
            </div>
            <button class="btn" type="submit">Send</button>
        </form>
    </div>
</body>

</html>