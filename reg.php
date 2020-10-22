<?php
    $host = 'localhost'; // адрес сервера
    $database = 'webtodo'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = '22qumara';
    if( isset( $_POST['myButton'] ) ) {
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        $surname = $_POST[Surname];
        $name = $_POST[Name];
        $patronymic = $_POST[Patronymic];
        $login = $_POST[Login];
        $password = $_POST[Password];
        $sql = "INSERT INTO users (surname ,name, patronymic, login, password , type) VALUES ('$surname','$name','$patronymic','$login','$password',1)";
        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        mysqli_close($link);
    }
?>