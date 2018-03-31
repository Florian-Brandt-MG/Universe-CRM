<?php
session_start();

require_once("../UniverseCRM/Vendor/Autoload.class.php");
$autoload = new UniverseCRM\Vendor\Autoload;
$universe = new UniverseCRM\Crypt\Universe;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universe CRM</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/universe.min.css">
</head>
<body>
<header>
    <div class="branding">
        <div class="center">
            <i class="fas fa-globe"></i>
            <span>Universe CRM</span>
        </div>
    </div>
    <div class="nav">
        <a href="#" data-tg="aside" class="toggle-aside tg left"><i class="fas fa-street-view"></i></a>
        <a class="toggle-mobile tg left" data-tg=".mb" href="#" class="left"><i class="fas fa-bars"></i></a>
        <a href="#"><i class="fas fa-sign-out-alt"></i><span>Abmelden</span></a>
    </div>
    <div class="row mb">
        <a href="#"><i class="fas fa-home"></i><span>Startseite</span></a>
        <a href="#"><i class="fas fa-users"></i><span>Gruppen</span></a>
        <a href="#"><i class="fas fa-user"></i><span>Kunden</span></a>
        <a href="#"><i class="fas fa-chart-bar"></i><span>Statistiken</span></a>
        <a href="#"><i class="fas fa-comment"></i><span>Nachrichten</span></a>
        <a href="#"><i class="fas fa-cubes"></i><span>Erweiterungen</span></a>
        <a href="#"><i class="fas fa-cog"></i><span>Einstellungen</span></a>
    </div>
</header>
<aside class="toggled">

</aside>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(".tg").click(function() {
       $($(this).data('tg')).toggleClass("toggled");
    });
</script>
</body>
</html>
