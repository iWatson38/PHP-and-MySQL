<?
    $mysqli = new mysqli("localhost", "root", "", "mybd");
    $mysqli->set_charset("cp1251");
    $mysqli->query('SET NAMES utf8');

    $Title = $_POST['title'];
    $Author = $_POST['author'];
    $Pages = $_POST['pages'];
    $Publisher = $_POST['publisher'];
    if ($Title != "" && $Author != "" && $Pages != "" && $Publisher != "") {
        $s = "INSERT INTO `books`(`title`, `author`, `pages`, `publisher`) VALUES ('$Title','$Author','$Pages','$Publisher')";
        $result = $mysqli->query($s);
        echo 'Книга добавлена!';
    } else {
        echo 'ERROR';
    }
?>