<hmtl>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>E-Liga</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="banner">
    <div class="navbar">
        <img src="logoo.png" class="logo">
        <ul>
            <li><a href="index.php">Domov</a></li>
             <li><a href="tabuľka.php">Tabuľka</a></li>
             <li><a href="program.php">Program</a></li>
             <li><a href="blog.php">Blog</a></li>
             <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </div>
    <div class="content1">
        <h1>PRIHLÁSIŤ</h1>
    </div>
    <div class="login">
        <form action="php/login.inc.php" method="post">
           <h1><input type="text" name="mailuid" placeholder="Používateľské meno/E-mail"></h1>
           <h1><input type="password" name="pwd" placeholder="Heslo"></h1>
           <button type="submit" name="login-submit"><span></span>PRIHLÁSIŤ</button>
</div>
</form>
</body>
</html>