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
    <title>Gramaphone</title>
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
            <a href="./library.php"><i class="fa-solid fa-heart nav-btn"></i></a>
            <a href="./editProfile.php"><i class="fa-solid fa-user nav-btn"></i></a>
        </div>
    </nav>
    <div class="content">
        <article>
            <div id="song">
                <audio id="song-file" src="../assets/css/files/pink.mp3"></audio>
            </div>
            <div class="card-body">
                <div class="pic">
                    <img class="card-img" src="../assets/css/files/pic4.png">
                    <i id="play-btn" class="fa-solid fa-play play"></i>
                </div>
                <div class="texts">
                    <p class="file-name">File Name</p>
                    <p class="file-author">Author</p>
                </div>
                <i class="fa-regular fa-heart add-song"></i>
                <img class="music-img" src="../assets/css/files/music.png">
            </div>
        </article>
    </div>
    <script src="../assets/js/audioControl.js">

    </script>
</body>

</html>