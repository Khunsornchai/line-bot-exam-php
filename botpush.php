<?php



require "vendor/autoload.php";

$access_token = 'KJgeHeFYkG0/7rF1/jk6/uFG/JSfEwjHKX/RYcANNMQvz0bdghlSbzQeweO1VMP1f6+kFmTONW0FzvXVsN4z5qViMtrZgwd56fMZpRujrHVr3NVY8IdbGhi9VrePiHNKo3m/03PAxWY3U6gHPdIbTgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8198ede1d11a55f3df2ba26e1fbf2889';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







