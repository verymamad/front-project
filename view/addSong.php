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
    <title>Upload Song</title>
</head>

<body>
    <header class="head">
        <button class="back-btn" onclick="history.back()"><i class="fa-solid fa-angle-left"></i></button>
        <input class="search-box" type="search" placeholder="Search">
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        <a class="btn head-btn sign-in-btn" href="./login.php">Sign In</a>
        <a class="btn head-btn sign-up-btn" href="./register.php">Sign Up</a>
    </header>

    <div class="container">
        <h1>Add Song</h1>
        <form action="" method="POST">
            <label for="choose-file" class="cover-img">
                <i class="fa-solid fa-plus add-cover"> </i>
                <input id="choose-file" type="file" accept="image/*" />
            </label>
            <div class="form">
                <label for="song-title">Song Title</label>
                <br>
                <input type="text" name="song-title" id="song-title">
                <br>
                <label for="artist">Artist</label>
                <br>
                <input type="text" name="artist" id="artist">
                <br>
                <label for="genre">Genre</label>
                <br>
                <select name="genre" id="genre" required>
                    <option value="Other">Other</option>
                    <option value="rock">Rock</option>
                    <option value="pop">Pop</option>
                    <option value="rap">Rap</option>
                    <option value="jazz">Jazz</option>
                    <option value="edm">EDM</option>
                    <option value="podcast">Podcast</option>
                    <option value="voice">Voice</option>
                </select>
                <label for="description">Description</label>
                <br>
                <textarea name="description" id="description"></textarea>
                <br>
            </div>
            <button class="btn" type="submit">Apply</button>
        </form>
    </div>
</body>

</html>