<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7bd119aee0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <header class="head">
        <img class="logo" src="../assets/css/files/logo-colored.png" alt="logo">
        <input class="search-box" type="search" placeholder="search">
        <a class="btn head-btn sign-in-btn" href="./login.php">Sign In</a>
        <a class="btn head-btn sign-up-btn" href="./register.php">Sign Up</a>
    </header>
    <nav>
        <div class="nav">
            <div class="nav-icons">
                <i class="fa-solid fa-house nav-btn"></i>
                <i class="fa-solid fa-comment nav-btn"></i>
                <i class="fa-solid fa-plus nav-btn"> </i>
                <i class="fa-solid fa-compact-disc nav-btn"></i>
                <i class="fa-solid fa-user nav-btn"></i>
            </div>
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
                <i class="fa-solid fa-compact-disc add-song"></i>
                <img class="music-img" src="../assets/css/files/music.png">
            </div>
        </article>
    </div>
    <script src="../assets/js/audioControl.js">

    </script>
</body>

</html>