<?php
    if(!empty($_POST['saveName']) and !empty($_POST['saveMail']) ){
        var_dump(1);
//        $db = mysql_connect("mysql_host", "mysql_user", "mysql_password") 
//        or die("Could not connect : " . mysql_error()); //подключение к серверу БД
//
//        mysql_select_db("my_database") or die("Could not select database"); //Выбор базы данных
//
//        $query = 'INSERT INTO table_name (name, email) VALUES ($_POST['name'], $POST['email'])';
//        mysql_query($query); //добавление имени и мыла
//
//        mysql_close($db); //закрытие соединения
    }
    else {
        var_dump(2);
    }
?>
?>