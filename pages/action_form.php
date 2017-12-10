<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div id="feedback">
        <div class="head">
            <h3>Feedback</h3>
            <p>You can put your message from this form</p>
        </div>
        <form action="#" id="form" method="post" name="form">
            <input name="vname" placeholder="Ваше имя" type="text" value="">
            <input name="vemail" placeholder="Ваш Email" type="text" value="">
            <input name="sub" placeholder="Тема" type="text" value="">
            <label>Your sentences</label>
            <textarea name="msg" placeholder="Введите текст сообщения..."></textarea>
            <input id="send" name="submit" type="submit" value="Отправить сообщение">
        </form>
        <h3>
          <?php include "action_form.php"?>
        </h3>
        </div>
    </div>
</body>
</html>
