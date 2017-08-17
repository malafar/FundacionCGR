<?php
include('/opt/telegram-api/vendor/autoload.php');
define('BOT_TOKEN', '');
use \unreal4u\TelegramAPI\TgLog;
use \unreal4u\TelegramAPI\Telegram\Methods\SetWebhook;

$setWebhook = new SetWebhook();
$setWebhook->url = 'https://fundacioncgr.hopto.org/bot/bot.php';

$tgLog = new TgLog(BOT_TOKEN);
$tgLog->performApiRequest($setWebhook);
?>
