<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7bd119aee0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Upload Song</title>
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
    <form action="">
        <input type="file" name="a" id="img-input" accept="image/*">
        <label for="img-input">Choose a Picture...</label>

    </form>
    <script src="../assets/js/fileUpload.js"></script>
</body>

</html>