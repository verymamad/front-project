<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7bd119aee0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Profile</title>
</head>

<body>
    <header class="head">
        <button class="back-btn" onclick="history.back()"><i class="fa-solid fa-angle-left"></i></button>
        <input class="search-box" type="search" placeholder="search">
        <a class="btn head-btn sign-in-btn" href="./login.php">Sign In</a>
        <a class="btn head-btn sign-up-btn" href="./register.php">Sign Up</a>
    </header>
    <div class="container">
        <h1>Profile</h1>
        <form action="" method="POST">
            <div class="pfp">
                <i class="fa-regular fa-user pfp-icon"></i>
            </div>
            <div class="form">
                <label for="name">Name</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="username">Username</label>
                <br>
                <input type="text" name="title" id="title">
                <br>
                <label for="bio">Biography</label>
                <br>
                <textarea name="description" id="description"></textarea>
                <br>
            </div>
            <button class="btn" type="submit">Apply</button>
        </form>
    </div>
</body>

</html>