<?php

# Поместите сюда название вашего бота, токен и адрес, на который Telegram перенаправит пользователя после авторизации
$BOT_USERNAME = 'legalaizbot';
$BOT_TOKEN = '6703394767:AAFy1MdXCrylzfha3tBwjzKSsJDwhvJs4Ec';
$REDIRECT_URI = 'http://legalaiz.github.io/auth/callback';

?>

<html>
    <body>
	<script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-login="legalaizbot" data-size="large" data-onauth="onTelegramAuth(user)" data-request-access="write"></script>
<script type="text/javascript">
  function onTelegramAuth(user) {
    alert('Logged in as ' + user.first_name + ' ' + user.last_name + ' (' + user.id + (user.username ? ', @' + user.username : '') + ')');
  }
</script>
    <!-- Код виджета в том месте, где хотим видеть кнопку -->
    // <script src="https://telegram.org/js/telegram-widget.js?2" data-telegram-login="<?= $BOT_USERNAME ?>" data-size="medium" data-auth-url="<?= $REDIRECT_URI ?>" data-request-access="write"></script>
    </body>
</html>
