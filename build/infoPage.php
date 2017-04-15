<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="infoPageStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body>
<div class="info_page">
<div class="container">
   
    <h2>О проекте</h2>

    <div class="about_app row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, soluta, quas. Dolorum iste obcaecati, dolore, corrupti ut enim eum nihil nulla harum illum optio nisi exercitationem ad natus. Quisquam, quaerat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil obcaecati, maiores optio. Fuga, eos. Possimus aut, quod sunt, quibusdam iusto in perspiciatis dolores expedita deserunt amet tenetur, qui modi nihil.</div>   

    <div class="row">
        <div class="feedback col-md-6">
            <h3>Обратная связь</h3>
            <p>Если у вас есть какие-либо предложения по улучшению проекта или вы хотите добавить информацию о других личностях и местах, где они побывали, пожалуйста, напишите нам.</p>
<!--
            <form action="post" action="sendmail.php">
                <input type="text" name="name" value="Ваше имя">
                <input type="text" name="mail" value="Ваша почта">
                <input type="textaria" style="width:300px; height:150px;" name="message" value="Ваше сообщение">
                <input type="submit" name="submitFeedback" value="Отправить">
            </form>
-->
        </div>

        <div class="subscribe col-md-6">
            <h3>Подписаться на рассылку</h3>
            <p>Если вы хотете подписаться на рассылку новостей о проекте, пожалуйста, оставьте свои контактные данные.</p>
            <form method="post" action="subscribe.php">
               Ваше имя
                <input type="text" name="saveName">
                Ваша почта
                <input type="text" name="saveMail">
                <p>Какие новости вас интересуют?</p>
                <select class="choose_news" name="saveNewsType">
                    <option value="all">Все новости</option>
                    <option value="new people and places">Новые люди и места</option>
                    <option value="new features">Новый функционал приложения</option>
                </select>
                <input type="submit" value="Подписаться">
            </form>
        </div>   
    </div>
    
</div>

</div>
</body>
</html>

<?php
    
    // для отправки обратной связи
//   if (isset($_POST['submitFeedback'])) {
//        
//      // $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
//
//       if(!empty($_POST['name']) and !empty($_POST['mail']) 
//       and !empty($_POST['message'])){
//          $name = trim(strip_tags($_POST['name']));
//          $mail = trim(strip_tags($_POST['mail']));
//          $message = trim(strip_tags($_POST['message']));
//
//
//          mail('alesya.kholod.90@mail.ru', 'Отзыв о react-app', 
//          'Вы получили письмо от: '.$name.'<br />почта отправителя: '.$mail.'<br />
//          Сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
//
//          if(isset($mail)) {
//            echo "Письмо отправлено";
//            }
//            else {
//            echo "Письмо не отправлено";
//            }
//
//          echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
//          ближайшее время<Br>";
//
//          exit;
//       } 
//       else {
//          echo "Для отправки сообщения необходимо заполните все поля! $back";
//          exit;
//       }
//    }

 
?>