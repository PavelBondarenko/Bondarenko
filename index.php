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

    mysqli_select_db($link, "sPJAkGFeRc")
        or die("Не удалось выбрать БД");

    $query = "SELECT * FROM book";
    $result = mysqli_query($link, $query)
        or die("Не удалось выполнить запрос");

    echo "<table border = '1'>\n";
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td> <a href= 'del.php?id=$row[0]'>" . $row[0] . "</a></td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>\n";

    mysqli_free_result($result);
    mysqli_close($link);
    ?>
</body>

</html>
