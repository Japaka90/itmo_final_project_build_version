<?php
    $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

    if(!empty($_POST['saveName']) and !empty($_POST['saveMail']) ){
       $saveName = trim(strip_tags($_POST['saveName']));
	   $saveMail = trim(strip_tags($_POST['saveMail']));
       $saveNewsType = trim(strip_tags($_POST['saveNewsType']));
        
//        phpinfo();
        $host = "localhost";
        $user = "root";
        $password = "toor";
        $db = "subscribeinfo";
        $charset = 'utf8';
        
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $password, $opt);
        
                
        $sql =  'INSERT INTO `emails` (`user_name`, `user_email`, `news_type`) VALUES (:saveName, :saveMail, :saveNewsType)';
        
        $statement = $pdo->prepare($sql);
        
        $statement->bindValue(':saveName', $saveName);
        $statement->bindValue(':saveMail', $saveMail);
        $statement->bindValue(':saveNewsType', $saveNewsType);

        $inserted = $statement->execute();

        echo             
            'Поздравляем, вы успешно подписаны!'.
            
            $back;

    }
    else {
        var_dump(2);
    }

?>