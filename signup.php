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
    <div class="login">
        <form action="php/signup.inc.php" method="post">
           <h1><input type="text" name="uid" placeholder="Používateľské meno"></h1>
           <h1><input type="text" name="mail" placeholder="E-mail"></h1>
           <h1><input type="password" name="pwd" placeholder="Heslo"></h1>
           <h1><input type="text" name="pwd-repeat" placeholder="Zopakuj heslo"></h1>
           <button type="submit" name="signup-submit"><span></span>REGISTROVAŤ</button>
</div>
</form>
</body>
</html>