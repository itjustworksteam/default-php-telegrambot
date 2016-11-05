<?php

    require_once 'connect.inc.php';
    require_once 'Telegram.php';
    require_once 'src/BotResponse.php';

    $telegram = new Telegram(BotId);
    $text = $telegram->Text();
    $chat_id = $telegram->ChatID();
    $bot = new BotResponse();
    $response = $bot->reply($text);

    send($telegram, $chat_id, $response);

    function send($telegram, $chat_id, $response){
        $content = array('chat_id' => $chat_id, 'text' => $response);
        $telegram->sendMessage($content);
    }

?>
