<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    Username: sPJAkGFeRc

Database name: sPJAkGFeRc

Password: ll4BvY7ufL

Server: remotemysql.com

Port: 3306
    */
    $link = mysqli_connect("remotemysql.com", "sPJAkGFeRc", "ll4BvY7ufL")
        or die("Не удалось соединится с сервером");

    mysqli_select_db($link, "chat")
        or die("Не удалось выбрать БД");
    echo "Hello world!!!!вфывыфва!!";
    ?>
</body>

</html>