<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вывод списка книг</title>
</head>
<body>
    <form method="GET" action="">
        Фамилия автора: <input type="text" name="author"><br>
        <input type="submit" value="Вывести">
    </form>
    <?
    $mysqli = new mysqli("localhost", "root", "", "mybd");
    $mysqli->set_charset("cp1251");
    $mysqli->query('SET NAMES utf8');
    
    $Author = $_GET['author'];
    if ($Author != "") {
        $s = "SELECT * FROM `books` WHERE `author`='$Author'";
        $result = $mysqli->query($s);
        while ($row = $result->fetch_assoc()) {
            echo $row["title"].' - '.$row["pages"].'. Издание: '.$row["publisher"];
            echo "<br>";
        }
    } else {
        $s = "SELECT `author` FROM `books` GROUP BY `author`";
        $result = $mysqli->query($s);
        while ($row = $result->fetch_assoc()) {
            echo $row["author"];
            echo "<br>";
        }
    }
?>
</body>
</html>