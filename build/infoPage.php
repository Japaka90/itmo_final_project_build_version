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

    <div class="about_app row">Данное приложение носит информационный характер и отображает на карте достопримечательности, связанные с известными личностями. <br>
    На главной странице расположена карта. При первом открытии приложения шапке присутствуют только категории, на которые подразделены известные личности, а также ссылки входа в личный кабинет и регистрации. При клике на одну из категорий в правом верхнем углу карты появляется блок со списком людей, принадлежащий выбранной категории. При клике на любого человека из этого списка, выпадает другой - с перечислением мест, как-то связанных с этим человеком. Кроме того, они сразу же отображаются на карте. При клике на Пржевальского пока что ничего не происходит, просто звучит ржание лошади. При клике на одну из этих меток, рядом с ней появляется небольшое окно с названием и описанием места.</div>   

    <div class="row">
<!--
        <div class="feedback col-md-6">
            <h3>Обратная связь</h3>
            <p>Если у вас есть какие-либо предложения по улучшению проекта или вы хотите добавить информацию о других личностях и местах, где они побывали, пожалуйста, напишите нам.</p>
            <form action="post" action="sendmail.php">
                <input type="text" name="name" value="Ваше имя">
                <input type="text" name="mail" value="Ваша почта">
                <input type="textaria" style="width:300px; height:150px;" name="message" value="Ваше сообщение">
                <input type="submit" name="submitFeedback" value="Отправить">
            </form>
        </div>
-->
            
        <div class="subscribe col-md-6 col-md-offset-3">
            <h3>Подписаться на рассылку</h3>
            <p>Если вы хотете подписаться на рассылку новостей о проекте, пожалуйста, оставьте свои контактные данные.</p>
            <form method="post" onsubmit="return checkForm()" action="subscribe.php">
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
    <script>
        function checkForm () {
	    var saveName = document.getElementsByName('saveName')[0].value;
	    var saveMail = document.getElementsByName('saveMail')[0].value;
        var regExpr = /@/;
	    if(saveName == '' || saveMail == '')  {
	        alert('Вы должны заполнить все поля');
	        return false;
	    }   
        if(!regExpr.test(saveMail)) {
            alert('Неправильный формат поля почта');
	        return false;
        }
	    return true;
	}

    </script>


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