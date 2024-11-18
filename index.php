<?php

include('./api/config.php');
$ip = getUserIP();
$ua = $_SERVER['HTTP_USER_AGENT'];

if ( !isset($_COOKIE['session']) ) {

	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$session         = substr(str_shuffle($permitted_chars), 5, 5);
    
	//$chat_id_s = "";
    $chat_id = $chat_id_s;
    setcookie('chat', 0, strtotime('+30 days'));
    // if ( isset($_GET['ref']) ) {
        // $ref = $_GET['ref'];
        // if ($ref == 'march') {
            // $chat = 2;
        // } elseif ($ref == 'april') {
            // $chat = 1;
        // }
    // } else {
        // $chat = rand(0, 2);
        // if ($chat != 0) {
            // $chat = 0;
        // } else {
            // $chat = 1;
        // }
    // }
    // setcookie('chat', $chat, strtotime('+30 days'));
    setcookie('session', $session, strtotime('+30 days'));
    sendTelegram(
		'sendMessage',
		array(
			'chat_id' => CHATS[$chat]['sessions'],
			'text' => "&#128100; <b>SESSION: </b>#".$session." \n".
					  "<b>IP: </b><code>".$ip."</code>\n".
					  "<b>UA: </b><code>".$ua."</code>",
			'parse_mode' =>  'html',
			'disable_notification' => true
		),
		CHATS[$chat]['token']
	);

    
} else {
    $session = $_COOKIE['session'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="page-homepage">

<head>
    <title>Museum of The Future - Future Museum Dubai - Visit Today</title>
<meta property="og:title" content="Museum of The Future - Future Museum Dubai - Visit Today" />
<meta name="twitter:title" content="Museum of The Future - Future Museum Dubai - Visit Today" />
<meta itemprop="name" content="Museum of The Future - Future Museum Dubai - Visit Today">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="csrf-token" content="">
<link rel="shortcut icon" href="favicon.ico">

<!-- iOS -->
<meta name="apple-mobile-web-app-title" content="Museum of the Future" />
<meta name="format-detection" content="telephone=no" />

<!-- Android -->
<meta name="theme-color" content="#FFFFFF" />

<!-- Facebook / Open Graph globals -->
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Museum of the Future" />

<!-- Twitter globals -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="Museum of the Future" />
<meta name="twitter:domain" content="https://museumofthefuture.ae" />
<meta name="twitter:creator" content="Museum of the Future" />

<meta name="description" content="Explore the Museum of the Future in Dubai and experience futuristic exhibits. Visit today and immerse yourself in innovative technologies and ideas.">
<meta property="og:description" content="Explore the Museum of the Future in Dubai and experience futuristic exhibits. Visit today and immerse yourself in innovative technologies and ideas." />
<meta name="twitter:description" content="Explore the Museum of the Future in Dubai and experience futuristic exhibits. Visit today and immerse yourself in innovative technologies and ideas." />
<meta itemprop="description" content="Explore the Museum of the Future in Dubai and experience futuristic exhibits. Visit today and immerse yourself in innovative technologies and ideas.">
<link rel="canonical" href="index.html" />
<meta property="og:url" content="https://museumofthefuture.ae" />
<meta name="twitter:url" content="https://museumofthefuture.ae" />
<meta property="og:image" content="https://motf-p-16570672ab7e.imgix.net/f21d4a68-c003-4ce6-82c9-167f74b1a452/MOTF_Default_Social1.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:image" content="https://motf-p-16570672ab7e.imgix.net/f21d4a68-c003-4ce6-82c9-167f74b1a452/MOTF_Default_Social1.jpeg">
    <meta itemprop="image" content="https://motf-p-16570672ab7e.imgix.net/f21d4a68-c003-4ce6-82c9-167f74b1a452/MOTF_Default_Social1.jpeg">

<link rel="preload" href="fonts/Obibok-Regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/Obibok-Normal.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/UntitledSans-Regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/UntitledSans-Medium.woff" as="font" type="font/woff" crossorigin>

<link rel="stylesheet" href="assets/css/app.341c40.css">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8P8RPX');
</script>
<!-- End Google Tag Manager -->
            </head>

<body class="body-homepage" data-behavior="detectTabs modal getUser">
    
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8P8RPX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>    <div class="svg-sprite">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol fill="none" id="icon--alert" viewBox="0 0 20 20"><title>alert</title><path fill-rule="evenodd" clip-rule="evenodd" d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0s10 4.477 10 10Zm-8.25-6v6h-3.5V4h3.5ZM10 16a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--arrow-down" viewBox="0 0 20 20"><title>arrow-down</title><path d="m2 11 6.505 7.318a2 2 0 0 0 2.99 0L18 11" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M10 18V0" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--arrow-left" viewBox="0 0 20 20"><title>arrow-left</title><g clip-path="url(#a)" stroke="currentColor" stroke-width="2"><path d="M9 2 1.682 8.505a2 2 0 0 0 0 2.99L9 18" stroke-linejoin="round"/><path d="M2 10h18"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"/></clipPath></defs></symbol><symbol fill="none" id="icon--arrow-right" viewBox="0 0 20 20"><title>arrow-right</title><path d="m11 18 7.318-6.505a2 2 0 0 0 0-2.99L11 2" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M18 10H0" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--arrow-up" viewBox="0 0 20 20"><title>arrow-up</title><g clip-path="url(#a)" stroke="currentColor" stroke-width="2"><path d="m18 9-6.505-7.318a2 2 0 0 0-2.99 0L2 9" stroke-linejoin="round"/><path d="M10 2v18"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"/></clipPath></defs></symbol><symbol fill="none" id="icon--audio" viewBox="0 0 20 20"><title>audio</title><path d="M2 7.605v4.79h3.556L10 16.385V3.615l-4.444 3.99H2ZM14 10c0-1.413-.907-2.626-2.222-3.217v6.426C13.093 12.626 14 11.413 14 10Zm-2.222-7v1.644c2.569.687 4.444 2.826 4.444 5.356s-1.875 4.67-4.444 5.356V17C15.342 16.274 18 13.416 18 10s-2.658-6.274-6.222-7Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--cart" viewBox="0 0 20 20"><title>cart</title><path d="M3 7v7a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V7M7 6.5V5a3 3 0 0 1 6 0v1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--checkbox-active" viewBox="0 0 20 20"><title>checkbox-active</title><rect width="20" height="20" rx="10" fill="currentColor"/><path d="M4.429 11c.64.61 2.238 2.111 3.171 3L15 6.6" stroke="#fff" stroke-width="2"/></symbol><symbol fill="none" id="icon--checkbox" viewBox="0 0 20 20"><title>checkbox</title><path d="M4.429 11c.64.61 2.238 2.111 3.171 3L15 6.6" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--chevron-down-small" viewBox="0 0 20 20"><title>chevron-down-small</title><path d="m4 7 5.293 5.293a1 1 0 0 0 1.414 0L16 7" stroke="currentColor" stroke-width="1.5"/></symbol><symbol fill="none" id="icon--chevron-down" viewBox="0 0 20 20"><title>chevron-down</title><path d="m3 7 5.495 6.28a2 2 0 0 0 3.01 0L17 7" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--chevron-left-small" viewBox="0 0 20 20"><title>chevron-left-small</title><path d="M12 6 7.976 9.22a1 1 0 0 0 0 1.56L12 14" stroke="currentColor"/></symbol><symbol fill="none" id="icon--chevron-left" viewBox="0 0 20 20"><title>chevron-left</title><path d="M13 3 6.72 8.495a2 2 0 0 0 0 3.01L13 17" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--chevron-right" viewBox="0 0 20 20"><title>chevron-right</title><path d="m7 17 6.28-5.495a2 2 0 0 0 0-3.01L7 3" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--chevron-up" viewBox="0 0 20 20"><title>chevron-up</title><path d="m17 13-5.495-6.28a2 2 0 0 0-3.01 0L3 13" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--circle" viewBox="0 0 119 119"><title>circle</title><pattern id="a" height="1" patternContentUnits="objectBoundingBox" width="1"><image height="437" transform="scale(.00229)" width="437" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="data:image/png;base64,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"/></pattern><path d="M0 0h119v119H0z" fill="url(#a)"/></symbol><symbol fill="none" id="icon--clock" viewBox="0 0 20 20"><title>clock</title><circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="1.5"/><path d="M10 5v5h5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--close-small" viewBox="0 0 20 20"><title>close-small</title><path d="M16 4 4 16M4 4l12 12" stroke="currentColor" stroke-width="1.5"/></symbol><symbol fill="none" id="icon--close" viewBox="0 0 20 20"><title>close</title><path d="M17 3 3 17M3 3l14 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></symbol><symbol fill="none" id="icon--day" viewBox="0 0 20 20"><title>day</title><circle cx="10" cy="10" r="3" stroke="currentColor" stroke-width="1.5"/><path d="M10 3.5V1m0 18v-2.5M3.5 10H1m18 0h-2.5M5.404 14.596l-1.768 1.768M16.364 3.636l-1.768 1.768m0 9.192 1.768 1.768M3.636 3.636l1.768 1.768" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--edit" viewBox="0 0 20 20"><title>edit</title><path d="m4 11 8-8 3 3-8 8H4v-3Zm0 4h12v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--expand" viewBox="0 0 20 20"><title>expand</title><path d="M7.5 17.5H3m0 0v-4m0 4L8.5 12M13 3h4.5m0 0v4m0-4L12 8.5" stroke="currentColor" stroke-width="1.5"/></symbol><symbol fill="none" id="icon--experience-card-icon" viewBox="0 0 29 28"><title>experience-card-icon</title><path d="M9.752 6.34c1.472-1.2 1.74-3.424.598-4.97C9.208-.174 7.089-.454 5.617.745 2.206 3.523 0 7.88 0 12.776 0 21.184 6.492 28 14.5 28S29 21.184 29 12.777C29 7.88 26.794 3.523 23.383.744c-1.472-1.2-3.59-.919-4.732.627-1.142 1.545-.875 3.77.597 4.968 1.835 1.495 3.006 3.822 3.006 6.438 0 4.496-3.472 8.14-7.754 8.14-4.283 0-7.754-3.644-7.754-8.14 0-2.616 1.17-4.943 3.006-6.438Z" fill="currentColor"/><path d="M14.535 18.91c3.207 0 5.807-2.73 5.807-6.097 0-3.367-2.6-6.097-5.807-6.097-3.207 0-5.807 2.73-5.807 6.097 0 3.367 2.6 6.097 5.807 6.097Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--external" viewBox="0 0 20 20"><title>external</title><path d="M8.267 5.583h5.493a1 1 0 0 1 1 1v5.493m-.542-5.99-8.978 8.33" stroke="currentColor" stroke-width="1.5"/></symbol><symbol id="icon--facebook-login" viewBox="0 0 24 24"><title>facebook-login</title><path fill="#1877F2" d="M23.5 12.07C23.5 5.719 18.351.57 12 .57S.5 5.719.5 12.07c0 5.74 4.205 10.497 9.703 11.36v-8.036h-2.92V12.07h2.92V9.536c0-2.882 1.717-4.474 4.344-4.474 1.258 0 2.574.225 2.574.225v2.83h-1.45c-1.429 0-1.874.886-1.874 1.796v2.157h3.19l-.51 3.324h-2.68v8.036c5.498-.863 9.703-5.62 9.703-11.36Z"/></symbol><symbol fill="none" id="icon--facebook" viewBox="0 0 20 20"><title>facebook</title><path fill-rule="evenodd" clip-rule="evenodd" d="M11.28 18.06V10h2.296l.305-2.779h-2.6l.003-1.39c0-.725.071-1.113 1.145-1.113h1.436V1.94h-2.297c-2.758 0-3.73 1.347-3.73 3.614V7.22H6.12V10h1.72v8.061h3.441Z" fill="currentColor"/></symbol><symbol id="icon--google-login" viewBox="0 0 24 24"><title>google-login</title><g fill="none" fill-rule="evenodd"><path fill="#4285F4" d="M23.04 12.261c0-.815-.073-1.6-.21-2.352H12v4.449h6.19a5.29 5.29 0 0 1-2.296 3.47v2.886h3.717c2.174-2.002 3.429-4.95 3.429-8.452Z"/><path fill="#34A853" d="M12 23.5c3.105 0 5.708-1.03 7.61-2.786l-3.716-2.886c-1.03.69-2.347 1.098-3.894 1.098-2.995 0-5.53-2.023-6.435-4.74H1.723v2.979A11.496 11.496 0 0 0 12 23.5Z"/><path fill="#FBBC05" d="M5.565 14.185A6.913 6.913 0 0 1 5.205 12c0-.758.13-1.495.36-2.185v-2.98H1.723A11.495 11.495 0 0 0 .5 12c0 1.856.444 3.612 1.223 5.165l3.842-2.98Z"/><path fill="#EA4335" d="M12 5.074c1.688 0 3.204.58 4.396 1.72l3.299-3.299C17.703 1.64 15.1.5 12 .5A11.496 11.496 0 0 0 1.723 6.835l3.842 2.98C6.47 7.097 9.005 5.074 12 5.074Z"/></g></symbol><symbol fill="none" id="icon--instagram" viewBox="0 0 20 20"><title>instagram</title><path d="M10 1.76c2.238 0 2.518.01 3.397.05.877.04 1.476.18 2 .383.542.21 1.001.493 1.46.95.457.459.74.918.95 1.46.203.524.343 1.123.383 2 .04.879.05 1.16.05 3.397 0 2.238-.01 2.518-.05 3.397-.04.877-.18 1.476-.383 2a4.038 4.038 0 0 1-.95 1.46 4.04 4.04 0 0 1-1.46.95c-.524.203-1.123.343-2 .383-.879.04-1.16.05-3.397.05-2.238 0-2.518-.01-3.397-.05-.877-.04-1.476-.18-2-.383a4.04 4.04 0 0 1-1.46-.95 4.039 4.039 0 0 1-.95-1.46c-.203-.524-.343-1.123-.383-2-.04-.879-.05-1.16-.05-3.397 0-2.238.01-2.518.05-3.397.04-.877.18-1.476.383-2 .21-.542.493-1.001.95-1.46a4.066 4.066 0 0 1 1.46-.95c.524-.203 1.123-.343 2-.383.879-.04 1.16-.05 3.397-.05Zm0 1.485c-2.2 0-2.46.009-3.33.048-.803.037-1.239.171-1.53.284-.384.15-.658.328-.947.616a2.553 2.553 0 0 0-.616.948c-.113.29-.247.726-.284 1.53-.04.868-.048 1.13-.048 3.33 0 2.199.009 2.46.048 3.328.037.804.171 1.24.284 1.53.15.385.328.66.616.948.289.288.563.466.948.616.29.113.726.247 1.53.284.868.04 1.129.048 3.329.048s2.46-.009 3.33-.048c.803-.037 1.239-.171 1.53-.284.384-.15.658-.328.947-.616.288-.289.466-.563.616-.948.113-.29.247-.726.284-1.53.04-.868.048-1.129.048-3.329s-.009-2.46-.048-3.33c-.037-.803-.171-1.239-.284-1.53a2.553 2.553 0 0 0-.616-.947 2.552 2.552 0 0 0-.948-.616c-.29-.113-.726-.247-1.53-.284-.869-.04-1.13-.048-3.329-.048Zm.003 9.427a2.675 2.675 0 1 0 0-5.35 2.675 2.675 0 0 0 0 5.35Zm0-6.795a4.12 4.12 0 1 1 0 8.241 4.12 4.12 0 0 1 0-8.241Zm5.15 0a1.03 1.03 0 1 1-2.06 0 1.03 1.03 0 0 1 2.06 0Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--link" viewBox="0 0 20 20"><title>link</title><path fill-rule="evenodd" clip-rule="evenodd" d="M11.636 7.6V6h3.273C17.17 6 19 7.79 19 10s-1.832 4-4.09 4h-3.274v-1.6h3.273c1.356 0 2.455-1.075 2.455-2.4s-1.1-2.4-2.455-2.4h-3.273Zm-3.272 4.8V14H5.09C2.83 14 1 12.21 1 10s1.832-4 4.09-4h3.274v1.6H5.09c-1.356 0-2.455 1.075-2.455 2.4s1.1 2.4 2.455 2.4h3.273Zm-2.455-1.6V9.2h8.182v1.6H5.909Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--linkedin" viewBox="0 0 20 20"><title>linkedin</title><path d="M5.875 6.791v11.001H2.208v-11h3.667Zm0-2.75c0 1.018-.708 1.834-1.845 1.834h-.02c-1.095 0-1.802-.816-1.802-1.834 0-1.04.729-1.833 1.844-1.833 1.115 0 1.802.792 1.823 1.833Zm11.917 7.588v6.163H14.49v-5.75c0-1.445-.478-2.43-1.674-2.43-.912 0-1.456.664-1.694 1.306-.088.23-.11.55-.11.872v6.002H7.709s.044-9.74 0-10.748h3.304v1.522c.438-.731 1.223-1.775 2.977-1.775 2.174 0 3.803 1.537 3.803 4.838Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--logo" viewBox="0 0 172 67"><title>logo</title><path d="M94.4 20.245c-7.732 0-14-3.021-14-6.748 0-3.727 6.268-6.749 14-6.749s14 3.022 14 6.749-6.268 6.748-14 6.748ZM86 0C70.536 0 58 6.043 58 13.497s12.536 13.497 28 13.497 28-6.043 28-13.497S101.464 0 86 0Zm23.117 49.022.047-11.727-1.712.17.097 11.557h1.568Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="m9.316 45.644-.222-8.337-1.744.146.35 7.125c.031.662.063 2.323.063 2.768 0 .853-.316 1.566-.888 2.066-.573.502-1.428.812-2.548.812-1.06 0-1.722-.225-2.122-.588-.398-.361-.586-.906-.586-1.654 0-.616.09-1.323.242-2.129l.044-.237-1.399-.269-.065.228C.175 46.513 0 47.52 0 48.33c0 1.125.308 2.037 1.009 2.665.699.626 1.742.927 3.114.927 1.532 0 2.728-.393 3.589-1.082.735-.589 1.207-1.38 1.439-2.281.3.213.661.351 1.047.42l-.027.05h1.372c1.19 0 2.131-.356 2.643-1.014.382.528 1.055.889 2.013.985l-.012.033h1.343a10.37 10.37 0 0 0 3.615-.63c.957.432 1.924.63 2.957.63h1.45c1.19 0 2.131-.357 2.644-1.014.38.527 1.054.888 2.012.984l-.011.033h46.481c.952 0 1.916-.252 2.5-1.02.55.714 1.505 1.05 2.636 1.05.912 0 1.869-.214 2.475-.88.455.6 1.225.88 2.152.88.844 0 1.67-.273 2.169-.981.424.562 1.039.81 1.658.902l-.016.046h1.142c.997 0 1.823-.47 2.493-1.437.59.427 1.262.813 1.893 1.103.706.325 1.403.552 1.878.552.556 0 1.014-.32 1.338-.798l.007-.011c.09-.152.174-.312.25-.477.158.241.342.443.555.604.283.213.605.347.961.412l-.014.052h1.239c.896 0 1.69-.176 2.273-.633.589-.461.916-1.172.957-2.15.063-.905.076-2.1.076-3.312l-.014-5.621-1.725.128.176 6.544.006.304c.013.577.025 1.162.025 1.528 0 .524-.115.898-.328 1.138-.205.23-.539.38-1.086.38h-.786c-.306 0-.539-.047-.724-.127-.184-.08-.334-.2-.468-.366-.278-.348-.468-.88-.695-1.638-.175-.627-.445-1.188-.864-1.596-.428-.416-.996-.655-1.723-.655-.697 0-1.32.175-1.916.614-.587.43-1.136 1.108-1.714 2.088-.384.64-.695 1.064-.996 1.326-.29.253-.565.354-.898.354h-.183c-.867 0-1.32-.136-1.57-.374-.252-.24-.367-.645-.367-1.361V44.14h-1.508v1.537c0 .668-.15 1.074-.375 1.312-.219.231-.552.349-1.04.349-.485 0-.82-.121-1.036-.336-.219-.217-.36-.573-.36-1.123V44.14H83.61v1.885c0 .404-.106.722-.334.939-.225.215-.615.374-1.28.374-.624 0-1.098-.14-1.413-.388-.307-.243-.497-.616-.497-1.16v-1.65h-1.508v1.755c0 .449-.118.8-.364 1.04-.244.237-.656.406-1.344.406H31.065c-.8 0-1.307-.106-1.617-.328-.29-.208-.461-.56-.461-1.203v-2.114h-1.522v2.085c0 .63-.183 1.005-.443 1.226-.265.226-.659.334-1.172.334h-.973c-.705 0-1.23-.016-1.763-.099.337-.264.586-.53.796-.813.32-.423.481-.806.481-1.342 0-1.63-1.282-3.086-2.815-3.086-.748 0-1.511.34-2.084.874-.575.537-.977 1.288-.977 2.137 0 .651.382 1.452 1.03 2.152-.656.12-1.272.177-1.842.177h-.647c-.8 0-1.307-.106-1.617-.328-.29-.208-.461-.56-.461-1.203v-2.114h-1.522v2.085c0 .63-.183 1.005-.444 1.226-.264.226-.658.334-1.171.334h-.772c-.657 0-1.065-.14-1.32-.388-.26-.252-.412-.663-.433-1.31Zm12.07.99c-.822-.523-1.281-1.065-1.543-1.788.219-.488.474-.791.732-.974.27-.19.562-.264.866-.264.222 0 .56.134.881.47.3.313.569.787.688 1.432-.337.412-.754.728-1.624 1.125Zm74.48-1.785c-.314.25-.67.683-1.132 1.419 1.15.748 2.13 1.237 3.022 1.407.302-.376.475-.871.475-1.29 0-1.266-.72-1.865-1.414-1.865-.344 0-.626.07-.95.329Z" fill="currentColor"/><path d="m126.99 40.156-1.422-1.131-1.098 1.261 1.376 1.042 1.144-1.172Zm-103.222.331-1.392-1.096-.83.937-1.098-.866-1.084 1.23 1.346 1.012.863-.875 1.065.804 1.13-1.146Zm6.572 1.302-1.393-1.097-.828.94-1.099-.869-1.084 1.23 1.346 1.012.863-.872 1.065.8 1.13-1.144Zm132.288 0-1.393-1.097-.828.94-1.099-.869-1.084 1.23 1.346 1.012.864-.872 1.064.8 1.13-1.144Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M125.648 41.998c-.748 0-1.507.34-2.075.875-.571.537-.968 1.288-.968 2.136 0 .639.368 1.438 1.026 2.148-1.205.216-2.335.294-3.565.294-1.435 0-2.294-.183-2.795-.532-.478-.334-.685-.86-.685-1.71 0-.45.081-.903.161-1.352.029-.16.057-.32.082-.478l.036-.232-1.398-.264-.07.218c-.236.737-.458 1.817-.458 2.56 0 1.051.281 1.942 1.058 2.561.766.611 1.963.914 3.685.914 1.746 0 3.688-.268 5.376-.803 1.017.492 2.064.686 3.279.686h18.682c2.969 0 4.535-.946 6.258-2.04.372.625.836 1.107 1.398 1.445.571.344 1.229.531 1.967.58v.015h1.209c1.189 0 2.131-.357 2.643-1.014.427.59 1.218.971 2.366 1.008h.006l.799.01h.007c.967-.01 1.806-.494 2.445-1.45.587.433 1.258.827 1.886 1.126.36.17.71.311 1.026.41.312.098.608.16.855.16.546 0 .956-.311 1.287-.795.503-.701.829-1.643.829-2.407 0-.828-.23-1.595-.693-2.16-.468-.573-1.164-.925-2.046-.925-.697 0-1.308.175-1.895.611-.576.428-1.117 1.097-1.702 2.063l-.002.004c-.376.64-.68 1.063-.975 1.326-.283.251-.554.352-.887.352h-.446c-.8 0-1.308-.107-1.617-.328-.291-.208-.462-.56-.462-1.203v-2.115h-1.522v2.086c0 .63-.183 1.005-.443 1.226-.265.225-.658.334-1.172.334h-.602c-.889 0-1.512-.11-1.997-.323-.407-.18-.735-.44-1.045-.8.18-.111.366-.22.559-.332h.001l.182-.107c.301.037.605.062.926.062h.25l.113-1.503-.28-.006c-1.232-.028-2.358-.39-3.507-.761l-.017-.006c-1.13-.365-2.29-.74-3.532-.74-.593 0-1.119.061-1.701.164l-.227.04.066 1.497.29-.034c.121-.014.233-.03.34-.043a7.302 7.302 0 0 1 1.062-.085c.869 0 1.648.18 2.433.419.274.083.554.176.84.27.327.109.661.22 1.003.322-.251.135-.488.266-.717.393h-.002c-1.638.907-2.842 1.573-5.239 1.573h-18.373c-.733 0-1.273-.008-1.788-.095.343-.263.595-.532.807-.817.319-.423.48-.806.48-1.343 0-1.63-1.282-3.085-2.815-3.085Zm-.208 4.637c-.788-.509-1.25-1.05-1.527-1.777.227-.495.482-.801.739-.985.267-.192.554-.265.858-.265.223 0 .565.135.888.469.302.312.571.783.683 1.42-.337.425-.753.74-1.641 1.138Zm44.546 1.04c-.895-.17-1.887-.66-3.04-1.42.462-.735.821-1.163 1.139-1.411.326-.256.614-.324.962-.324.694 0 1.414.599 1.414 1.865 0 .419-.173.914-.475 1.29Z" fill="currentColor"/><path d="m15.234 50.977-1.421-1.126-1.095 1.257 1.376 1.047 1.14-1.178Zm8.814 12.31 1.515.393c.287.075.565.157.771.292.19.124.314.287.314.553 0 .29-.14.52-.392.685-.26.17-.652.277-1.14.277-.975 0-1.66-.444-2.045-1.063l-.165-.267-1.34 1.12.137.18c.72.952 1.87 1.53 3.368 1.53.948 0 1.78-.246 2.38-.7.604-.457.958-1.114.958-1.895 0-.817-.398-1.345-.909-1.687-.494-.331-1.091-.487-1.495-.59l-1.394-.351h-.001c-.305-.08-.507-.175-.633-.29-.116-.107-.188-.252-.188-.487 0-.28.12-.46.308-.58.201-.129.504-.201.874-.201.726 0 1.293.31 1.739.903l.184.245 1.242-1.165-.15-.172c-.745-.86-1.785-1.294-2.95-1.294-.822 0-1.493.184-2.063.608-.57.423-.824 1.11-.824 1.72 0 .937.47 1.725 1.899 2.236Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M69.41 58.726c-1.295 0-2.4.427-3.181 1.167-.78.74-1.222 1.776-1.222 2.97 0 1.195.442 2.232 1.223 2.971.782.74 1.887 1.166 3.18 1.166 1.297 0 2.402-.427 3.183-1.167.78-.74 1.221-1.776 1.221-2.97 0-1.194-.441-2.23-1.222-2.97-.782-.74-1.887-1.167-3.181-1.167Zm-2.517 4.137c0-.795.258-1.446.691-1.896.431-.447 1.053-.712 1.827-.712.779 0 1.4.266 1.83.712.432.45.688 1.1.688 1.896 0 .797-.256 1.45-.688 1.898-.43.447-1.051.712-1.83.71-.774 0-1.396-.266-1.827-.712-.433-.45-.691-1.101-.691-1.896Z" fill="currentColor"/><path d="M3.011 58.917H.604v7.879h1.792v-5.008l2.25 5.008h1.579l2.26-5.065v5.065h1.791v-7.879H7.892l-2.413 5.656-2.468-5.656Zm11.423 0h-1.802v4.699c0 .644.122 1.482.641 2.166.532.7 1.447 1.195 2.935 1.195 1.52 0 2.451-.523 2.99-1.253.528-.714.652-1.589.652-2.257v-4.55h-1.806v4.433c0 .49-.044 1.02-.289 1.422a1.25 1.25 0 0 1-.52.478c-.238.12-.562.198-1.006.198-.432 0-.749-.077-.983-.195a1.256 1.256 0 0 1-.517-.474c-.244-.397-.295-.918-.295-1.397v-4.465Zm26.091 0h-1.802v4.699c0 .644.122 1.482.641 2.166.532.7 1.447 1.195 2.935 1.195 1.519 0 2.451-.523 2.99-1.253.528-.714.652-1.589.652-2.257v-4.55h-1.806v4.433c0 .49-.045 1.02-.29 1.422a1.25 1.25 0 0 1-.52.478c-.237.12-.56.198-1.005.198-.433 0-.75-.077-.983-.195a1.256 1.256 0 0 1-.517-.474c-.245-.397-.295-.918-.295-1.397v-4.465Zm10.392 0H48.51v7.879h1.792v-5.008l2.25 5.008h1.579l2.259-5.065v5.065h1.792v-7.879h-2.385l-2.412 5.656-2.468-5.656Zm48.147 0h-1.806v7.879h1.806v-3.23h4.188v3.23h1.806v-7.879h-1.806v3.09h-4.188v-3.09Zm31.299 0h-1.806v4.699c0 .644.123 1.482.642 2.166.531.7 1.447 1.195 2.935 1.195 1.519 0 2.451-.523 2.99-1.253.528-.714.652-1.589.652-2.257v-4.55h-1.802v4.433c0 .49-.045 1.02-.29 1.422-.119.195-.285.36-.52.478-.238.12-.562.198-1.006.198-.432 0-.749-.077-.983-.195a1.256 1.256 0 0 1-.516-.474c-.245-.397-.296-.918-.296-1.397v-4.465Zm18.239 0h-1.806v4.699c0 .644.122 1.482.641 2.166.532.7 1.447 1.195 2.935 1.195 1.519 0 2.451-.523 2.991-1.253.527-.714.651-1.589.651-2.257v-4.55h-1.802v4.433c0 .49-.045 1.02-.29 1.422-.118.195-.284.36-.52.478-.238.12-.561.198-1.006.198-.432 0-.749-.077-.982-.195a1.252 1.252 0 0 1-.517-.474c-.245-.397-.295-.918-.295-1.397v-4.465ZM36.58 58.92h-6.073v7.88h6.073v-1.56h-4.27v-1.65h4.076v-1.538h-4.077V60.48h4.27v-1.56Zm58.843 0h-7.488v1.559h2.841v6.32h1.806v-6.32h2.841V58.92Zm18.388 0h-6.074v7.88h6.074v-1.56h-4.271v-1.65h4.077v-1.538h-4.077V60.48h4.271v-1.56Zm31.216 0h-7.489v1.559h2.841v6.32h1.806v-6.32h2.842V58.92Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M160.256 58.92h-3.677v7.88h1.806v-2.912h.898l2.319 2.915h2.202l-2.492-3.071c1.232-.311 2.053-1.204 2.053-2.374a2.19 2.19 0 0 0-.861-1.77c-.552-.43-1.328-.666-2.248-.666Zm-1.871 3.451v-1.915h1.92c.426 0 .73.111.925.274a.85.85 0 0 1 .302.679.864.864 0 0 1-.301.682c-.193.165-.497.28-.926.28h-1.92Z" fill="currentColor"/><path d="M171.551 58.92h-5.987v7.88h5.987v-1.56h-4.185v-1.65h3.992v-1.538h-3.992V60.48h4.185v-1.56Zm-89.569.004h-5.963v7.878h1.806v-3.103h3.977V62.15h-3.977v-1.67h4.157v-1.557Zm44.696 0h-5.963v7.878h1.806v-3.103h3.977V62.15h-3.977v-1.67h4.157v-1.557Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--menu" viewBox="0 0 20 20"><title>menu</title><path d="M0 5h20M0 10h20M0 15h20" stroke="currentColor" stroke-width="1.5"/></symbol><symbol fill="none" id="icon--minus" viewBox="0 0 20 20"><title>minus</title><path d="M2 10h16" stroke="currentColor" stroke-width="2"/></symbol><symbol id="icon--mobile-rotate" viewBox="0 0 100 125"><title>mobile-rotate</title><path fill="#fff" d="M49.92 87.7a39.46 39.46 0 0 1-26.87-10.5l1.35-1.47a37.68 37.68 0 0 0 53.18-2.11L79.05 75a39.55 39.55 0 0 1-29.13 12.7zM22.29 22.56l-1.47-1.36a39.67 39.67 0 0 1 56-2.22l-1.36 1.47a37.67 37.67 0 0 0-53.17 2.11z"/><path fill="#fff" d="m78.54 81.06-1.97-.34.97-5.61-5.7.95-.32-1.98 8.47-1.41zM19.92 23.7l1.2-8.46 1.98.29-.8 5.66 5.63-1.11.39 1.97zM57.86 75H40.15a5.72 5.72 0 0 1-5.88-5.59v-42a5.72 5.72 0 0 1 5.88-5.59h17.71a5.72 5.72 0 0 1 5.87 5.59v42A5.68 5.68 0 0 1 57.86 75zm3.94-6.74V28.07a4.36 4.36 0 0 0-4.43-4.21H40.63a4.36 4.36 0 0 0-4.42 4.21v40.2a4.36 4.36 0 0 0 4.42 4.21h16.82a4.24 4.24 0 0 0 4.35-4.21z"/><path fill="#fff" d="M57.86 75.51H40.15a6.24 6.24 0 0 1-6.38-6.09v-42a6.24 6.24 0 0 1 6.38-6.09h17.71a6.24 6.24 0 0 1 6.37 6.09v42a5.79 5.79 0 0 1-1.68 4.23 6.58 6.58 0 0 1-4.69 1.86zM40.15 22.29a5.25 5.25 0 0 0-5.38 5.09v42a5.26 5.26 0 0 0 5.38 5.09h17.71a5.59 5.59 0 0 0 4-1.64 4.82 4.82 0 0 0 1.39-3.52v-42a5.24 5.24 0 0 0-5.37-5.09zM57.45 73H40.63a4.88 4.88 0 0 1-4.92-4.71V28.07a4.88 4.88 0 0 1 4.92-4.71h16.74a4.89 4.89 0 0 1 4.93 4.71v40.2A4.73 4.73 0 0 1 57.45 73zM40.63 24.36a3.87 3.87 0 0 0-3.92 3.71v40.2A3.87 3.87 0 0 0 40.63 72h16.82a3.74 3.74 0 0 0 3.85-3.71V28.07a3.88 3.88 0 0 0-3.93-3.71z"/><ellipse fill="#fff" cx="48.92" cy="68.19" rx="2.33" ry="2.22"/></symbol><symbol fill="none" id="icon--night" viewBox="0 0 20 20"><title>night</title><path d="m18.08 13.453.664.35a.75.75 0 0 0-.858-1.074l.195.724ZM8.92 2l.663.35a.75.75 0 0 0-.858-1.074L8.919 2Zm8.966 10.73a7.31 7.31 0 0 1-1.886.247v1.5a8.76 8.76 0 0 0 2.275-.3l-.389-1.448ZM16 12.976a7.25 7.25 0 0 1-7.25-7.25h-1.5a8.75 8.75 0 0 0 8.75 8.75v-1.5Zm-7.25-7.25c0-1.221.301-2.37.833-3.377l-1.327-.7A8.715 8.715 0 0 0 7.25 5.727h1.5Zm-5 4a7.253 7.253 0 0 1 5.364-7.003l-.39-1.448a8.753 8.753 0 0 0-6.474 8.45h1.5Zm7.25 7.25a7.25 7.25 0 0 1-7.25-7.25h-1.5a8.75 8.75 0 0 0 8.75 8.75v-1.5Zm6.417-3.873A7.25 7.25 0 0 1 11 16.977v1.5a8.749 8.749 0 0 0 7.744-4.674l-1.327-.7Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--no-audio" viewBox="0 0 20 20"><title>no-audio</title><g clip-path="url(#a)" fill="currentColor"><path d="M2 7.605v4.79h3.556L10 16.385V3.615l-4.444 3.99H2ZM14 10c0-1.413-.907-2.626-2.222-3.217v6.426C13.093 12.626 14 11.413 14 10Zm-2.222-7v1.644c2.569.687 4.444 2.826 4.444 5.356s-1.875 4.67-4.444 5.356V17C15.342 16.274 18 13.416 18 10s-2.658-6.274-6.222-7Z"/><path stroke="currentColor" d="m17.942 1.315.707.707L2.007 18.664l-.707-.707z"/></g><defs><clipPath id="a"><path d="M0 0h20v20H0z"/></clipPath></defs></symbol><symbol fill="none" id="icon--pause" viewBox="0 0 20 20"><title>pause</title><rect x="5" y="4" width="3" height="12" rx="1" fill="currentColor"/><rect x="12" y="4" width="3" height="12" rx="1" fill="currentColor"/></symbol><symbol fill="none" id="icon--play" viewBox="0 0 20 20"><title>play</title><path d="M15.5 9.134a1 1 0 0 1 0 1.732l-9 5.196a1 1 0 0 1-1.5-.866V4.804a1 1 0 0 1 1.5-.866l9 5.196Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--plus-button" viewBox="0 0 24 24"><title>plus-button</title><path d="M16.8 12H7.2M12 7.2v9.6" stroke="currentColor" stroke-width="1.2"/></symbol><symbol fill="none" id="icon--plus" viewBox="0 0 20 20"><title>plus</title><path d="M18 10H2m8-8v16" stroke="currentColor" stroke-width="2"/></symbol><symbol fill="none" id="icon--question-mark" viewBox="0 0 20 20"><title>question-mark</title><path d="M8.178 6.444c-.738.463-1.13 1.25-1.178 2.36h1.71c0-.324.095-.635.284-.935.193-.3.519-.45.976-.45.466 0 .785.123.959.368.178.242.266.51.266.806 0 .257-.079.493-.236.707a1.5 1.5 0 0 1-.344.344l-.432.333c-.426.327-.69.617-.792.87-.103.25-.166.703-.19 1.361H10.8c.004-.311.03-.54.077-.689.075-.233.227-.438.455-.613l.42-.321c.427-.327.715-.596.864-.806.257-.347.385-.773.385-1.28 0-.825-.296-1.448-.888-1.868C11.525 6.21 10.785 6 9.893 6c-.678 0-1.25.148-1.715.444Zm.823 6.564h2.08V15h-2.08v-1.992Z" fill="#000"/></symbol><symbol fill="none" id="icon--scroll" viewBox="0 0 32 52"><title>scroll</title><rect x="1" y="1" width="30" height="50" rx="15" stroke="#fff" stroke-width="2"/><circle cx="16" cy="13" r="4" fill="#fff"/></symbol><symbol fill="none" id="icon--search-shop" viewBox="0 0 20 20"><title>search-shop</title><circle cx="8.5" cy="8.5" r="6.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="m13 14 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--search" viewBox="0 0 20 20"><title>search</title><circle cx="8.5" cy="8.5" r="6.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="m13 14 5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--shop-check" viewBox="0 0 20 20"><title>shop-check</title><circle cx="10" cy="10" r="7" fill="#000"/><path d="m7 10.304 2 2 4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--shop-cross" viewBox="0 0 20 20"><title>shop-cross</title><circle cx="10" cy="10" r="7" fill="#949494"/><path d="m8 12 4-4m0 4L8 8" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol fill="none" id="icon--sort" viewBox="0 0 20 20"><title>sort</title><path d="M18.055 11.068a.66.66 0 0 0-.938 0l-1.684 1.684V5.66a.66.66 0 1 0-1.32 0v7.092l-1.684-1.684a.66.66 0 0 0-.938 0 .66.66 0 0 0 0 .937l2.813 2.813a.67.67 0 0 0 .469.192c.174 0 .33-.07.469-.191l2.813-2.814a.66.66 0 0 0 0-.937ZM11.873 5.66a.66.66 0 0 0-.66-.66H2.41a.66.66 0 1 0 0 1.32h8.804a.66.66 0 0 0 .66-.66ZM8.174 9H2.41a.66.66 0 1 0 0 1.32h5.765a.66.66 0 1 0 0-1.32Zm-1.51 4.23H2.409a.66.66 0 1 0 0 1.32h4.255a.66.66 0 1 0 0-1.32Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--tiktok" viewBox="0 0 20 20"><title>tiktok</title><path d="M8.038 15.134c1.303 0 2.36-.933 2.36-2.36V2.191h2.83c-.16 1.93 1.76 3.794 3.875 3.752v2.66c-1.81 0-3.348-.765-3.884-1.19v5.361c0 2.36-1.856 5.035-5.181 5.035s-5.141-2.675-5.141-5.035c0-3.33 3.524-5.262 5.858-4.79v2.71a2.48 2.48 0 0 0-.678-.102c-1.314-.049-2.399 1.017-2.399 2.182a2.36 2.36 0 0 0 2.36 2.36Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--trashcan" viewBox="0 0 12 14"><title>trashcan</title><g clip-path="url(#a)" stroke="#000" stroke-width=".563" stroke-linecap="round" stroke-linejoin="round"><path d="M1.406 1.969h9c.619 0 1.125.506 1.125 1.125v.562H.281v-.562c0-.619.506-1.125 1.125-1.125Zm7.313 0H3.094c0-.934.754-1.688 1.687-1.688h2.25c.934 0 1.688.754 1.688 1.688Zm1.687 2.812v7.313c0 .619-.506 1.125-1.125 1.125h-6.75a1.128 1.128 0 0 1-1.125-1.125V4.78m2.25 1.689v5.062m4.5-5.062v5.062m-2.25-5.062v5.062"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h11.813v13.5H0z"/></clipPath></defs></symbol><symbol fill="none" id="icon--twitter" viewBox="0 0 20 20"><title>twitter</title><path d="m9.76 6.771.037.597-.598-.073c-2.178-.28-4.08-1.23-5.695-2.825l-.79-.792-.203.585c-.43 1.303-.156 2.679.742 3.605.478.511.37.584-.455.28-.287-.098-.538-.17-.562-.134-.084.085.203 1.193.43 1.632.311.609.946 1.206 1.64 1.559l.586.28-.694.012c-.67 0-.694.012-.622.268.239.792 1.184 1.632 2.237 1.997l.742.256-.646.39a6.693 6.693 0 0 1-3.207.901c-.538.013-.98.061-.98.098 0 .121 1.459.804 2.308 1.072 2.549.791 5.575.45 7.848-.902 1.615-.962 3.23-2.874 3.984-4.725.407-.987.814-2.79.814-3.654 0-.56.036-.634.706-1.303.394-.39.765-.816.837-.938.12-.232.108-.232-.502-.025-1.017.366-1.16.317-.658-.231.37-.39.813-1.096.813-1.303 0-.037-.18.024-.383.134-.215.122-.694.304-1.052.414l-.647.207-.586-.402c-.323-.22-.777-.463-1.017-.536-.61-.17-1.543-.146-2.093.049-1.496.548-2.44 1.96-2.333 3.507Z" fill="currentColor"/></symbol><symbol fill="none" id="icon--user" viewBox="0 0 20 20"><title>user</title><circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M18 18v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol><symbol id="icon--world" viewBox="0 0 24 24"><title>world</title><path d="M0 0h24v24H0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95a15.65 15.65 0 0 0-1.38-3.56A8.03 8.03 0 0 1 18.92 8zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56A7.987 7.987 0 0 1 5.08 16zm2.95-8H5.08a7.987 7.987 0 0 1 4.33-3.56A15.65 15.65 0 0 0 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 0 1-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/></symbol><symbol fill="none" id="icon--youtube" viewBox="0 0 20 20"><title>youtube</title><path d="M19.582 5.415c-.23-.82-.908-1.465-1.768-1.684C16.254 3.333 10 3.333 10 3.333s-6.254 0-7.814.398c-.86.22-1.538.865-1.768 1.684C0 6.901 0 10 0 10s0 3.1.418 4.585c.23.82.908 1.465 1.768 1.684 1.56.398 7.814.398 7.814.398s6.254 0 7.814-.398c.86-.22 1.538-.865 1.768-1.684C20 13.099 20 10 20 10s0-3.1-.418-4.585Zm-11.01 7.442V7.143L14.285 10 8.57 12.857Z" fill="currentColor"/></symbol></svg>
</div>    <div class="notification relative z-997 hidden" data-behavior="notification" data-notification-md5="51b5cc4b54f9" aria-live="polite">
    <script type="text/template" data-notification-template>
        <div class="fixed bg-darkest top-0 text-inverse w-full z-997">
            <div class="container py-2 flex">
                <div class="f-ui-3 py-2.5 xxxl:py-2 flex-grow">
                    <p>
                        PLEASE BEWARE OF FRAUDULENT SITES. BOOK TICKETS FOR THE MUSEUM OF THE FUTURE
                                                <a href="/en/offer/general-offers" class="underline focus-ring focus-ring-inverse focus-ring-squared" >
                            HERE.
                                                    </a>
                                            </p>
                </div>
                <div><button
         type="button"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full hover:backdrop-blur-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-10 w-10" aria-label="Close" data-behavior="hideNotification" data-hideNotification-md5="51b5cc4b54f9"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>close-small</title>
                        <use xlink:href="#icon--close-small"></use>
        </svg>
    </span>
            </button>
</div>
            </div>
        </div>
    </script>
</div>
        <main class="mt-notifh" data-barba="wrapper" aria-live="polite" role="main">
        <div data-barba="container" data-barba-namespace="homepage">
            <header class="{$headerCSS}{$headerStyle}" data-header-css="header header-" data-header-style="inverse" data-behavior="header" role="banner">
        <a href="en.html" title="Museum of the Future" class="header-logo header-logo-inverse absolute mt-5 md:mt-6 xl:mt-7 inline-flex left-1/2 z-90" >
    <span class="-translate-x-1/2 relative">
        <svg width="152" height="69" viewBox="0 0 152 69" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M81 22.5C72.716 22.5 66 19.142 66 15C66 10.858 72.716 7.5 81 7.5C89.284 7.5 96 10.858 96 15C96 19.142 89.284 22.5 81 22.5ZM72 0C55.431 0 42 6.716 42 15C42 23.284 55.431 30 72 30C88.569 30 102 23.284 102 15C102 6.716 88.569 0 72 0Z" fill="currentColor"/>
<path d="M96.4287 46.9937L96.4703 36.3501L94.9574 36.5049L95.0435 46.9937H96.4287Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.23247 43.9271L8.03667 36.3609L6.49505 36.4932L6.80509 42.9602C6.83243 43.5605 6.8599 45.0681 6.8599 45.472C6.8599 46.2465 6.58083 46.8935 6.07548 47.3477C5.56922 47.8027 4.8137 48.0839 3.82422 48.0839C2.88704 48.0839 2.30197 47.8801 1.94881 47.5509C1.59697 47.2229 1.43079 46.7286 1.43079 46.0495C1.43079 45.4908 1.51084 44.8483 1.64443 44.1171L1.68372 43.9021L0.447295 43.6583L0.390109 43.8649C0.154413 44.7164 0 45.6292 0 46.3647C0 47.3858 0.272039 48.2135 0.891504 48.7832C1.50938 49.3515 2.43143 49.6247 3.64377 49.6247C4.99729 49.6247 6.05459 49.2675 6.81483 48.6426C7.46519 48.108 7.88187 47.3908 8.08652 46.5719C8.3526 46.7654 8.67115 46.8912 9.01231 46.9529L8.9881 46.9996H10.2009C11.252 46.9996 12.0842 46.6756 12.5368 46.0788C12.8738 46.5579 13.4687 46.8853 14.3155 46.9727L14.3052 47.0026H15.4919C16.5652 47.0026 17.5905 46.8367 18.6861 46.4314C19.5324 46.8227 20.3862 47.0026 21.2997 47.0026H22.5811C23.6322 47.0026 24.4644 46.6785 24.917 46.0818C25.254 46.5609 25.849 46.8883 26.6959 46.9757L26.6855 47.0055H67.7623C68.6033 47.0055 69.4556 46.7764 69.9709 46.0793C70.4568 46.7271 71.3008 47.032 72.3009 47.032C73.1064 47.032 73.9523 46.8382 74.4878 46.2339C74.8904 46.7782 75.5708 47.032 76.3899 47.032C77.1357 47.032 77.8655 46.7842 78.3064 46.1417C78.6811 46.6518 79.2244 46.8778 79.7719 46.961L79.7575 47.0026H80.7665C81.6475 47.0026 82.3781 46.5762 82.9696 45.6979C83.4906 46.0857 84.0855 46.4359 84.6427 46.6995C85.2669 46.9948 85.8822 47.2 86.3021 47.2C86.7942 47.2 87.1989 46.9097 87.4847 46.4757L87.4907 46.4656C87.5709 46.3285 87.6453 46.1829 87.7119 46.0326C87.8513 46.2519 88.0143 46.435 88.2028 46.5811C88.4523 46.7745 88.7373 46.896 89.0521 46.9549L89.0397 47.0026H90.1342C90.926 47.0026 91.6281 46.8427 92.1431 46.4282C92.6633 46.0096 92.9528 45.3639 92.9887 44.4758C93.0441 43.655 93.0562 42.571 93.0562 41.4706L93.0434 36.3688L91.519 36.4848L91.6744 42.4241L91.6801 42.7008C91.6909 43.224 91.7019 43.7546 91.7019 44.0873C91.7019 44.5626 91.6004 44.9019 91.4118 45.12C91.2306 45.3295 90.9358 45.4647 90.4523 45.4647H89.758C89.487 45.4647 89.2811 45.4227 89.1176 45.3496C88.9557 45.2773 88.8224 45.1689 88.7043 45.0171C88.4591 44.702 88.2913 44.2195 88.0906 43.5312C87.9355 42.9618 87.6969 42.4521 87.3263 42.0823C86.9481 41.705 86.446 41.4873 85.8036 41.4873C85.1882 41.4873 84.6377 41.6467 84.1104 42.0447C83.592 42.4361 83.1068 43.0502 82.5961 43.9401C82.2569 44.5216 81.9819 44.9055 81.7155 45.1441C81.46 45.373 81.2168 45.4647 80.9224 45.4647H80.7603C79.9945 45.4647 79.5946 45.3415 79.3731 45.1254C79.1507 44.9083 79.0489 44.5406 79.0489 43.8899V42.5627H77.716V43.9577C77.716 44.5637 77.5841 44.9319 77.3848 45.1481C77.1916 45.3578 76.8972 45.4647 76.4664 45.4647C76.037 45.4647 75.7417 45.3547 75.5505 45.1601C75.3567 44.9628 75.2321 44.6403 75.2321 44.1404V42.5627H73.8869V44.2729C73.8869 44.6404 73.7929 44.9282 73.5922 45.125C73.3927 45.3206 73.0485 45.4647 72.46 45.4647C71.9089 45.4647 71.49 45.3376 71.2123 45.1126C70.9407 44.8925 70.773 44.5535 70.773 44.0608V42.5627H69.4401V44.1551C69.4401 44.5625 69.336 44.8816 69.1185 45.099C68.9031 45.3143 68.5384 45.4676 67.9305 45.4676H27.4531C26.7466 45.4676 26.2977 45.3711 26.0242 45.1702C25.7672 44.9815 25.6163 44.6617 25.6163 44.0785V42.1591H24.2712V44.052C24.2712 44.6239 24.1097 44.9639 23.8795 45.1649C23.6455 45.3693 23.2978 45.4676 22.8442 45.4676H21.9848C21.3614 45.4676 20.897 45.4529 20.4266 45.3782C20.7244 45.1383 20.9442 44.8967 21.1301 44.6402C21.4124 44.2562 21.5548 43.9086 21.5548 43.4215C21.5548 41.9419 20.4215 40.6212 19.0671 40.6212C18.4064 40.6212 17.7317 40.9294 17.2258 41.4143C16.7175 41.9016 16.3622 42.5835 16.3622 43.3537C16.3622 43.9449 16.6999 44.6715 17.2731 45.3072C16.6925 45.4165 16.1487 45.4676 15.6448 45.4676H15.0729C14.3664 45.4676 13.9175 45.3711 13.644 45.1702C13.387 44.9815 13.2361 44.6617 13.2361 44.0785V42.1591H11.8909V44.052C11.8909 44.6239 11.7294 44.9639 11.4993 45.1649C11.2653 45.3693 10.9176 45.4676 10.4639 45.4676H9.7819C9.20103 45.4676 8.84039 45.3398 8.61508 45.1153C8.38605 44.8871 8.2517 44.5139 8.23247 43.9271ZM18.8996 44.8268C18.1728 44.351 17.7672 43.8595 17.5358 43.2032C17.7292 42.7603 17.9542 42.4851 18.1828 42.319C18.4208 42.1461 18.6788 42.0795 18.9478 42.0795C19.1441 42.0795 19.4424 42.2008 19.7264 42.5056C19.9914 42.7899 20.2292 43.2207 20.3347 43.8056C20.0366 44.1796 19.6684 44.4663 18.8996 44.8268ZM84.7195 43.2055C84.4415 43.4335 84.1265 43.8255 83.7181 44.4934C84.7343 45.1727 85.6002 45.6162 86.3893 45.771C86.6556 45.4292 86.8085 44.98 86.8085 44.6C86.8085 43.4506 86.1723 42.9074 85.5589 42.9074C85.2554 42.9074 85.0057 42.9709 84.7195 43.2055Z" fill="currentColor"/>
<path d="M112.224 38.9465L110.967 37.9198L109.997 39.0644L111.212 40.0106L112.224 38.9465Z" fill="currentColor"/>
<path d="M21.0039 39.247L19.7738 38.2518L19.0415 39.1023L18.07 38.3163L17.1125 39.4326L18.3022 40.351L19.0648 39.5571L20.0054 40.2866L21.0039 39.247Z" fill="currentColor"/>
<path d="M26.8118 40.4284L25.5813 39.4329L24.8493 40.2864L23.8781 39.4973L22.9204 40.614L24.1097 41.5322L24.8726 40.7412L25.8135 41.4677L26.8118 40.4284Z" fill="currentColor"/>
<path d="M143.718 40.4284L142.487 39.4329L141.755 40.2864L140.784 39.4973L139.826 40.614L141.016 41.5322L141.778 40.7412L142.719 41.4677L143.718 40.4284Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M111.038 40.6182C110.377 40.6182 109.706 40.9267 109.204 41.4121C108.699 41.8997 108.349 42.5814 108.349 43.3508C108.349 43.931 108.674 44.6565 109.255 45.3008C108.191 45.4968 107.192 45.5678 106.105 45.5678C104.837 45.5678 104.078 45.4015 103.635 45.0842C103.212 44.7819 103.03 44.3047 103.03 43.5335C103.03 43.1237 103.101 42.7126 103.172 42.3055C103.197 42.1603 103.222 42.0155 103.244 41.8716L103.276 41.6611L102.04 41.4212L101.979 41.6191C101.77 42.2884 101.574 43.2686 101.574 43.943C101.574 44.8972 101.823 45.7058 102.509 46.2675C103.186 46.8219 104.244 47.0968 105.766 47.0968C107.309 47.0968 109.025 46.8539 110.516 46.3683C111.415 46.8145 112.341 46.9908 113.414 46.9908H129.923C132.547 46.9908 133.932 46.1318 135.455 45.1392C135.782 45.706 136.193 46.1436 136.69 46.451C137.194 46.7628 137.775 46.933 138.428 46.9773V46.9908H139.496C140.547 46.9908 141.379 46.6667 141.832 46.07C142.209 46.6059 142.909 46.952 143.923 46.9847L143.928 46.9849L144.634 46.9937L144.64 46.9937C145.494 46.9845 146.237 46.5457 146.801 45.6791C147.32 46.0713 147.913 46.4291 148.468 46.6998C148.786 46.8547 149.095 46.9827 149.375 47.0726C149.65 47.1613 149.912 47.2176 150.13 47.2176C150.613 47.2176 150.975 46.9352 151.268 46.4962C151.712 45.8598 152 45.005 152 44.3112C152 43.5595 151.796 42.8641 151.388 42.3507C150.974 41.831 150.359 41.5109 149.58 41.5109C148.964 41.5109 148.423 41.6706 147.905 42.0661C147.396 42.4542 146.918 43.062 146.4 43.9386L146.399 43.9416C146.067 44.5237 145.798 44.9072 145.537 45.1454C145.287 45.3733 145.048 45.4647 144.753 45.4647H144.359C143.652 45.4647 143.204 45.3681 142.93 45.1673C142.673 44.9786 142.522 44.6587 142.522 44.0755V42.1561H141.177V44.049C141.177 44.6209 141.016 44.961 140.785 45.162C140.551 45.3664 140.204 45.4647 139.75 45.4647H139.218C138.433 45.4647 137.882 45.3651 137.453 45.1716C137.093 45.0088 136.804 44.7727 136.529 44.4449C136.689 44.3448 136.853 44.2467 137.023 44.1448L137.024 44.1444L137.186 44.0477C137.451 44.0808 137.72 44.1035 138.004 44.1035H138.225L138.324 42.7395L138.077 42.7337C136.988 42.7081 135.993 42.3796 134.978 42.0427L134.963 42.0379C133.964 41.7065 132.939 41.3666 131.841 41.3666C131.317 41.3666 130.852 41.4218 130.338 41.5149L130.137 41.5512L130.196 42.9101L130.452 42.879C130.559 42.866 130.658 42.8527 130.753 42.8399C131.058 42.7986 131.321 42.763 131.691 42.763C132.459 42.763 133.148 42.9259 133.841 43.1428C134.083 43.2186 134.331 43.3028 134.584 43.3887C134.872 43.4869 135.168 43.5874 135.47 43.6804C135.249 43.8028 135.039 43.922 134.836 44.037L134.835 44.0379C133.387 44.8602 132.323 45.4647 130.205 45.4647H113.968C113.321 45.4647 112.843 45.4575 112.389 45.3783C112.691 45.1401 112.914 44.896 113.101 44.6375C113.383 44.2534 113.526 43.9057 113.526 43.4185C113.526 41.9389 112.392 40.6182 111.038 40.6182ZM110.854 44.827C110.158 44.3649 109.749 43.8738 109.505 43.2141C109.705 42.7649 109.931 42.4869 110.158 42.3196C110.394 42.1458 110.647 42.0795 110.916 42.0795C111.113 42.0795 111.415 42.2017 111.701 42.505C111.968 42.7881 112.205 43.2159 112.304 43.7948C112.006 44.18 111.639 44.465 110.854 44.827ZM150.22 45.771C149.429 45.6161 148.553 45.1714 147.533 44.4826C147.942 43.8153 148.26 43.4262 148.54 43.2012C148.829 42.9692 149.083 42.9074 149.39 42.9074C150.003 42.9074 150.64 43.4506 150.64 44.6C150.64 44.98 150.487 45.4292 150.22 45.771Z" fill="currentColor"/>
<path d="M13.4629 48.7681L12.2065 47.7456L11.2394 48.8866L12.4553 49.8371L13.4629 48.7681Z" fill="currentColor"/>
<path d="M21.2516 59.9408L22.5903 60.297C22.8444 60.3657 23.0895 60.4398 23.2723 60.5621C23.4405 60.6746 23.5494 60.8225 23.5494 61.0642C23.5494 61.3273 23.4264 61.5356 23.203 61.6859C22.9725 61.841 22.6271 61.9377 22.1958 61.9377C21.3341 61.9377 20.728 61.5341 20.3886 60.9724L20.2425 60.7307L19.0588 61.7462L19.1791 61.9095C19.8163 62.7746 20.8327 63.2988 22.156 63.2988C22.9937 63.2988 23.7284 63.0753 24.2585 62.6636C24.7926 62.2488 25.1056 61.6524 25.1056 60.9434C25.1056 60.202 24.7535 59.7229 24.3026 59.4125C23.8659 59.112 23.338 58.9708 22.9811 58.8761L21.7495 58.5581L21.7483 58.5578C21.479 58.4852 21.3004 58.3998 21.1891 58.2944C21.0869 58.1976 21.0226 58.0662 21.0226 57.8528C21.0226 57.5987 21.1284 57.4352 21.2947 57.3262C21.4729 57.2095 21.7401 57.1442 22.0673 57.1442C22.7087 57.1442 23.2097 57.4251 23.6041 57.964L23.7668 58.1862L24.8644 57.1288L24.7322 56.9722C24.0735 56.1916 23.154 55.7979 22.1254 55.7979C21.3988 55.7979 20.8057 55.9651 20.3016 56.3496C19.7975 56.7341 19.5739 57.3572 19.5739 57.9118C19.5739 58.7615 19.9884 59.4767 21.2516 59.9408Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M61.3397 55.8008C60.1946 55.8008 59.218 56.1883 58.5277 56.86C57.8379 57.5312 57.4482 58.4723 57.4482 59.5557C57.4482 60.6407 57.8387 61.5818 58.5289 62.2526C59.2197 62.924 60.1962 63.3106 61.3397 63.3106C62.4849 63.3106 63.4615 62.9232 64.1518 62.2514C64.8416 61.5802 65.2313 60.6391 65.2313 59.5557C65.2313 58.4722 64.8408 57.5311 64.1506 56.8599C63.46 56.1883 62.4834 55.8008 61.3397 55.8008ZM59.1145 59.5557C59.1145 58.8343 59.3424 58.243 59.7256 57.8351C60.1065 57.4296 60.6561 57.1884 61.3397 57.1884C62.0283 57.1884 62.5777 57.4298 62.9572 57.8349C63.339 58.2425 63.565 58.8338 63.565 59.5557C63.565 60.2793 63.339 60.8712 62.9572 61.2788C62.5778 61.6837 62.0282 61.9244 61.3397 61.923C60.6561 61.923 60.1065 61.6819 59.7256 61.2763C59.3424 60.8684 59.1145 60.2771 59.1145 59.5557Z" fill="currentColor"/>
<path d="M2.66132 55.9747H0.533872V63.125H2.11758V58.5799L4.10539 63.125H5.5012L7.49776 58.5282V63.125H9.08146V55.9747H6.97409L4.8419 61.1082L2.66132 55.9747Z" fill="currentColor"/>
<path d="M12.7559 55.9747H11.163V60.2392C11.163 60.8233 11.271 61.5845 11.7299 62.2048C12.1996 62.8396 13.0088 63.29 14.3236 63.29C15.6658 63.29 16.4897 62.8153 16.9664 62.1523C17.4322 61.5045 17.5422 60.7107 17.5422 60.1037V55.9747H15.9463V59.9976C15.9463 60.443 15.9065 60.9228 15.6904 61.288C15.5854 61.4654 15.4389 61.6153 15.2304 61.7227C15.0204 61.8308 14.7346 61.9024 14.3419 61.9024C13.9597 61.9024 13.68 61.8318 13.4734 61.7249C13.268 61.6188 13.1221 61.4704 13.0168 61.2949C12.8004 60.9343 12.7559 60.4611 12.7559 60.0271V55.9747Z" fill="currentColor"/>
<path d="M35.8129 55.9747H34.22V60.2392C34.22 60.8233 34.3279 61.5845 34.7869 62.2048C35.2566 62.8396 36.0658 63.29 37.3806 63.29C38.7228 63.29 39.5466 62.8153 40.0234 62.1523C40.4892 61.5045 40.5992 60.7107 40.5992 60.1037V55.9747H39.0033V59.9976C39.0033 60.443 38.9635 60.9228 38.7474 61.288C38.6424 61.4654 38.4959 61.6153 38.2874 61.7227C38.0774 61.8308 37.7916 61.9024 37.3989 61.9024C37.0167 61.9024 36.737 61.8318 36.5304 61.7249C36.325 61.6188 36.1791 61.4704 36.0738 61.2949C35.8574 60.9343 35.8129 60.4611 35.8129 60.0271V55.9747Z" fill="currentColor"/>
<path d="M44.9965 55.9747H42.869V63.125H44.4528V58.5799L46.4406 63.125H47.8364L49.8329 58.5282V63.125H51.4166V55.9747H49.3093L47.1771 61.1082L44.9965 55.9747Z" fill="currentColor"/>
<path d="M87.5451 55.9747H85.9491V63.125H87.5451V60.1935H91.2462V63.125H92.8421V55.9747H91.2462V58.7794H87.5451V55.9747Z" fill="currentColor"/>
<path d="M115.205 55.9747H113.609V60.2392C113.609 60.8233 113.717 61.5845 114.176 62.2048C114.645 62.8396 115.455 63.29 116.769 63.29C118.112 63.29 118.936 62.8153 119.412 62.1523C119.878 61.5045 119.988 60.7107 119.988 60.1037V55.9747H118.395V59.9976C118.395 60.443 118.356 60.9228 118.139 61.288C118.034 61.4654 117.888 61.6153 117.679 61.7227C117.469 61.8308 117.184 61.9024 116.791 61.9024C116.409 61.9024 116.129 61.8318 115.922 61.7249C115.717 61.6188 115.571 61.4704 115.466 61.2949C115.249 60.9343 115.205 60.4611 115.205 60.0271V55.9747Z" fill="currentColor"/>
<path d="M131.322 55.9747H129.727V60.2392C129.727 60.8233 129.834 61.5845 130.293 62.2048C130.763 62.8396 131.572 63.29 132.887 63.29C134.229 63.29 135.053 62.8153 135.53 62.1523C135.996 61.5045 136.106 60.7107 136.106 60.1037V55.9747H134.513V59.9976C134.513 60.443 134.473 60.9228 134.257 61.288C134.152 61.4654 134.005 61.6153 133.797 61.7227C133.587 61.8308 133.301 61.9024 132.908 61.9024C132.526 61.9024 132.247 61.8318 132.04 61.7249C131.835 61.6188 131.689 61.4704 131.583 61.2949C131.367 60.9343 131.322 60.4611 131.322 60.0271V55.9747Z" fill="currentColor"/>
<path d="M32.3263 55.9776H26.9595V63.1279H32.3263V61.7138H28.5523V60.2171H32.1551V58.8207H28.5523V57.3917H32.3263V55.9776Z" fill="currentColor"/>
<path d="M84.3277 55.9776H77.7099V57.3917H80.2208V63.1279H81.8167V57.3917H84.3277V55.9776Z" fill="currentColor"/>
<path d="M100.577 55.9776H95.2098V63.1279H100.577V61.7138H96.8027V60.2171H100.405V58.8207H96.8027V57.3917H100.577V55.9776Z" fill="currentColor"/>
<path d="M128.163 55.9776H121.545V57.3917H124.056V63.1279H125.652V57.3917H128.163V55.9776Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M141.622 55.9776H138.372V63.1279H139.968V60.4852H140.762L142.811 63.1309H144.757L142.555 60.3434C143.644 60.0611 144.369 59.2507 144.369 58.1887C144.369 57.5376 144.099 56.977 143.608 56.5828C143.121 56.1914 142.435 55.9776 141.622 55.9776ZM139.968 59.1094V57.3711H141.665C142.041 57.3711 142.31 57.4722 142.482 57.6196C142.652 57.7652 142.749 57.9741 142.749 58.2358C142.749 58.4939 142.654 58.7059 142.484 58.8548C142.312 59.0048 142.044 59.1094 141.665 59.1094H139.968Z" fill="currentColor"/>
<path d="M151.604 55.9776L146.312 55.9776V63.1279L151.604 63.128V61.7138L147.905 61.7138V60.2171L151.432 60.2171V58.8207L147.905 58.8207V57.3917L151.604 57.3917V55.9776Z" fill="currentColor"/>
<path d="M72.449 55.9806H67.18V63.1309H68.7759V60.3143H72.29V58.9091H68.7759V57.3947H72.449V55.9806Z" fill="currentColor"/>
<path d="M111.948 55.9806H106.679V63.1309H108.275V60.3143H111.789V58.9091H108.275V57.3947H111.948V55.9806Z" fill="currentColor"/>
</svg>
        <span class="focus-ring-el focus-ring-squared"></span>
    </span>
</a>
    
        <div class="mb-4 pt-5 md:pt-6 xl:pt-7 flex flex-row items-start fixed z-90 bottom-safe-bottom lg:bottom-auto left-outergutter lg:left-6 xl:left-7 rtl:left-auto rtl:right-outergutter lg:rtl:left-auto lg:rtl:right-6 xl:rtl:left-auto xl:rtl:right-7">
        <button
         type="button"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-inverse text-default shadow-xs border-default border-xs focus-ring-darkest h-10 w-10  header-btn" aria-label="Menu" data-behavior="toggleModal" data-togglemodal-id="modal-menu-opener" id="modal-menu-opener"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>menu</title>
                        <use xlink:href="#icon--menu"></use>
        </svg>
    </span>
            </button>
                    <a
         href="en/offer/general-offers.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default shadow-xs border-default border-xs focus-ring-darkest f-ui-3 py-2.5 px-5 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  inline-flex mx-2" data-behavior="bookTicketsButton"
            >
                <span class="button-label">
            Book tickets
        </span>
                    </a>
            </div>
    </header>
<div role="dialog" data-modal-dialog="modal-menu-opener" tabindex="-1" aria-modal="true" aria-hidden="true" aria-labelledby="modal-menu-opener" class="modal modal-opacity fixed bg-inverse z-80 top-safe-top bottom-safe-bottom left-0 right-0 w-full">
    <div class="flex flex-col w-full h-full overflow-y-scroll lg:overflow-y-hidden" data-modal-scroll>
        <div class="pt-6 xl:pt-7 fixed z-90 bottom-safe-bottom lg:bottom-auto mb-4 left-outergutter lg:left-6 xl:left-7 rtl:left-auto rtl:right-outergutter lg:rtl:left-auto lg:rtl:right-6 xl:rtl:left-auto xl:rtl:right-7">
            <button
         type="button"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-inverse text-default shadow-xs border-default border-xs focus-ring-darkest h-10 w-10" aria-label="Close" data-behavior="closeModal"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>close</title>
                        <use xlink:href="#icon--close"></use>
        </svg>
    </span>
            </button>
        </div>
        <div class="hidden lg:block pt-6 xl:pt-7 fixed z-90 top-safe-top left-1/2">
            <a href="en.html" title="Museum of the Future" class="inline-flex -translate-x-1/2 focus-ring focus-ring-squared">
                <svg width="172" height="40" viewBox="0 0 172 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M109.117 14.85L109.164 2.68585L107.452 2.86273L107.549 14.85H109.117Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.31569 11.3453L9.09412 2.69821L7.34967 2.8494L7.7005 10.2403C7.73144 10.9263 7.76252 12.6493 7.76252 13.1109C7.76252 13.996 7.44672 14.7355 6.87489 15.2545C6.30201 15.7745 5.44708 16.0959 4.3274 16.0959C3.26691 16.0959 2.60487 15.863 2.20524 15.4867C1.80709 15.1119 1.61905 14.5469 1.61905 13.7709C1.61905 13.1323 1.70964 12.3981 1.8608 11.5624L1.90526 11.3167L0.50615 11.0381L0.441439 11.2742C0.174731 12.2473 0 13.2906 0 14.1311C0 15.298 0.307833 16.244 1.00881 16.8951C1.70798 17.5446 2.75136 17.8568 4.12322 17.8568C5.65483 17.8568 6.85124 17.4486 7.71151 16.7344C8.44745 16.1234 8.91895 15.3038 9.15054 14.3679C9.45163 14.5891 9.81209 14.7329 10.1981 14.8034L10.1707 14.8567H11.5431C12.7325 14.8567 13.6742 14.4864 14.1864 13.8044C14.5677 14.3519 15.2409 14.7261 16.1991 14.826L16.1874 14.8601H17.5303C18.7449 14.8601 19.905 14.6705 21.1448 14.2073C22.1024 14.6546 23.0686 14.8601 24.1023 14.8601H25.5523C26.7417 14.8601 27.6834 14.4897 28.1956 13.8078C28.5769 14.3553 29.2502 14.7295 30.2085 14.8294L30.1968 14.8635H76.6784C77.6301 14.8635 78.5945 14.6016 79.1776 13.805C79.7274 14.5453 80.6825 14.8938 81.8142 14.8938C82.7256 14.8938 83.6829 14.6723 84.2888 13.9816C84.7444 14.6037 85.5144 14.8938 86.4413 14.8938C87.2851 14.8938 88.111 14.6105 88.6099 13.8762C89.0339 14.4592 89.6486 14.7175 90.2682 14.8126L90.2519 14.8601H91.3936C92.3906 14.8601 93.2173 14.3729 93.8867 13.3691C94.4762 13.8123 95.1493 14.2125 95.7799 14.5137C96.4862 14.8512 97.1825 15.0857 97.6576 15.0857C98.2144 15.0857 98.6725 14.754 98.9959 14.258L99.0026 14.2464C99.0934 14.0898 99.1775 13.9233 99.253 13.7516C99.4107 14.0022 99.5952 14.2114 99.8085 14.3784C100.091 14.5994 100.413 14.7383 100.769 14.8056L100.755 14.8601H101.994C102.89 14.8601 103.684 14.6774 104.267 14.2037C104.856 13.7252 105.183 12.9873 105.224 11.9724C105.287 11.0343 105.3 9.7954 105.3 8.53783L105.286 2.70724L103.561 2.83975L103.737 9.62761L103.743 9.94384C103.756 10.5417 103.768 11.1481 103.768 11.5284C103.768 12.0715 103.653 12.4593 103.44 12.7086C103.235 12.948 102.901 13.1025 102.354 13.1025H101.568C101.262 13.1025 101.029 13.0545 100.844 12.971C100.66 12.8884 100.51 12.7644 100.376 12.591C100.098 12.2309 99.9085 11.6794 99.6814 10.8928C99.506 10.2421 99.236 9.65955 98.8166 9.23694C98.3887 8.80575 97.8205 8.55699 97.0935 8.55699C96.3972 8.55699 95.7742 8.73909 95.1776 9.194C94.591 9.64129 94.0419 10.3431 93.464 11.3602C93.0802 12.0248 92.7689 12.4634 92.4676 12.7361C92.1784 12.9977 91.9033 13.1025 91.5701 13.1025H91.3867C90.5201 13.1025 90.0676 12.9618 89.817 12.7148C89.5652 12.4667 89.4501 12.0464 89.4501 11.3028V9.78598H87.9418V11.3803C87.9418 12.0728 87.7925 12.4936 87.567 12.7408C87.3484 12.9804 87.0153 13.1025 86.5278 13.1025C86.0418 13.1025 85.7077 12.9768 85.4914 12.7544C85.272 12.5289 85.1311 12.1604 85.1311 11.589V9.78598H83.6089V11.7405C83.6089 12.1605 83.5025 12.4894 83.2754 12.7143C83.0496 12.9378 82.6601 13.1025 81.9942 13.1025C81.3706 13.1025 80.8966 12.9573 80.5824 12.7002C80.275 12.4486 80.0852 12.0611 80.0852 11.4981V9.78598H78.5769V11.6058C78.5769 12.0714 78.4592 12.4361 78.213 12.6846C77.9693 12.9306 77.5566 13.1059 76.8687 13.1059H31.0654C30.2659 13.1059 29.7579 12.9956 29.4485 12.766C29.1577 12.5503 28.9869 12.1848 28.9869 11.5183V9.32469H27.4647V11.488C27.4647 12.1416 27.282 12.5303 27.0216 12.76C26.7568 12.9935 26.3633 13.1059 25.85 13.1059H24.8775C24.1721 13.1059 23.6466 13.0891 23.1144 13.0036C23.4513 12.7295 23.7 12.4534 23.9104 12.1603C24.2298 11.7214 24.391 11.3242 24.391 10.7674C24.391 9.07646 23.1085 7.56708 21.5759 7.56708C20.8283 7.56708 20.0648 7.91931 19.4923 8.47356C18.9172 9.03043 18.5152 9.80975 18.5152 10.69C18.5152 11.3656 18.8972 12.196 19.5459 12.9226C18.8888 13.0475 18.2735 13.1059 17.7033 13.1059H17.0561C16.2567 13.1059 15.7487 12.9956 15.4392 12.766C15.1485 12.5503 14.9776 12.1848 14.9776 11.5183V9.32469H13.4555V11.488C13.4555 12.1416 13.2728 12.5303 13.0124 12.76C12.7476 12.9935 12.3541 13.1059 11.8407 13.1059H11.069C10.4117 13.1059 10.0036 12.9598 9.74865 12.7032C9.48947 12.4424 9.33745 12.016 9.31569 11.3453ZM21.3864 12.3735C20.564 11.8298 20.105 11.268 19.8431 10.5179C20.062 10.0117 20.3166 9.69728 20.5752 9.50749C20.8446 9.30982 21.1366 9.23372 21.4409 9.23372C21.663 9.23372 22.0006 9.37241 22.322 9.72073C22.6218 10.0457 22.8909 10.538 23.0103 11.2064C22.673 11.6339 22.2563 11.9615 21.3864 12.3735ZM95.8668 10.5206C95.5523 10.7811 95.1957 11.2291 94.7336 11.9924C95.8835 12.7688 96.8633 13.2757 97.7563 13.4526C98.0577 13.0619 98.2307 12.5486 98.2307 12.1143C98.2307 10.8007 97.5108 10.1799 96.8167 10.1799C96.4733 10.1799 96.1906 10.2525 95.8668 10.5206Z" fill="currentColor"/>
<path d="M126.99 5.65321L125.568 4.47981L124.47 5.78789L125.846 6.86929L126.99 5.65321Z" fill="currentColor"/>
<path d="M23.7676 5.99658L22.3756 4.85919L21.5469 5.83123L20.4476 4.93295L19.3642 6.20866L20.7104 7.25836L21.5734 6.35098L22.6376 7.18469L23.7676 5.99658Z" fill="currentColor"/>
<path d="M30.3396 7.34678L28.9473 6.20906L28.1189 7.18447L27.02 6.28271L25.9362 7.55885L27.282 8.60825L28.1453 7.70424L29.21 8.53449L30.3396 7.34678Z" fill="currentColor"/>
<path d="M162.628 7.34678L161.235 6.20906L160.407 7.18446L159.308 6.28271L158.224 7.55885L159.57 8.60825L160.434 7.70425L161.498 8.53449L162.628 7.34678Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M125.648 7.56371C124.9 7.56371 124.141 7.91624 123.573 8.47094C123.002 9.02822 122.605 9.80738 122.605 10.6866C122.605 11.3497 122.973 12.1789 123.631 12.9152C122.426 13.1393 121.296 13.2204 120.066 13.2204C118.631 13.2204 117.772 13.0303 117.271 12.6677C116.793 12.3221 116.586 11.7768 116.586 10.8954C116.586 10.4271 116.667 9.95734 116.747 9.492C116.776 9.32611 116.804 9.16063 116.829 8.99612L116.865 8.75555L115.467 8.48137L115.397 8.70758C115.161 9.47248 114.939 10.5928 114.939 11.3634C114.939 12.454 115.22 13.378 115.997 14.02C116.763 14.6536 117.96 14.9678 119.682 14.9678C121.428 14.9678 123.37 14.6902 125.058 14.1352C126.075 14.6452 127.122 14.8466 128.337 14.8466H147.019C149.988 14.8466 151.554 13.8649 153.277 12.7306C153.649 13.3784 154.113 13.8784 154.675 14.2297C155.246 14.586 155.904 14.7806 156.642 14.8313V14.8466H157.851C159.04 14.8466 159.982 14.4763 160.494 13.7943C160.921 14.4068 161.712 14.8023 162.86 14.8397L162.866 14.8399L163.665 14.85L163.672 14.85C164.639 14.8394 165.478 14.338 166.117 13.3475C166.704 13.7958 167.375 14.2047 168.003 14.514C168.363 14.6911 168.713 14.8374 169.029 14.9401C169.341 15.0415 169.637 15.1059 169.884 15.1059C170.43 15.1059 170.84 14.7831 171.171 14.2814C171.674 13.5541 172 12.5772 172 11.7843C172 10.9252 171.77 10.1304 171.307 9.54368C170.839 8.94974 170.143 8.58393 169.261 8.58393C168.564 8.58393 167.953 8.76645 167.366 9.21837C166.79 9.66194 166.249 10.3565 165.664 11.3585L165.662 11.3618C165.286 12.0271 164.982 12.4654 164.687 12.7376C164.404 12.9981 164.133 13.1025 163.8 13.1025H163.354C162.554 13.1025 162.046 12.9922 161.737 12.7627C161.446 12.547 161.275 12.1814 161.275 11.5149V9.32132H159.753V11.4846C159.753 12.1382 159.57 12.5269 159.31 12.7566C159.045 12.9901 158.652 13.1025 158.138 13.1025H157.536C156.647 13.1025 156.024 12.9887 155.539 12.7675C155.132 12.5816 154.804 12.3117 154.494 11.9371C154.674 11.8227 154.86 11.7105 155.053 11.5941L155.054 11.5936L155.236 11.4831C155.537 11.521 155.841 11.5469 156.162 11.5469H156.412L156.525 9.98797L156.245 9.98134C155.013 9.95219 153.887 9.57668 152.738 9.19172L152.721 9.18617C151.591 8.80746 150.431 8.41895 149.189 8.41895C148.596 8.41895 148.07 8.48206 147.488 8.58846L147.261 8.62999L147.327 10.183L147.617 10.1475C147.738 10.1326 147.85 10.1174 147.957 10.1027C148.302 10.0556 148.6 10.0149 149.019 10.0149C149.888 10.0149 150.667 10.201 151.452 10.449C151.726 10.5356 152.006 10.6318 152.292 10.73C152.619 10.8422 152.953 10.9571 153.295 11.0633C153.044 11.2032 152.807 11.3395 152.578 11.4709L152.576 11.4719C150.938 12.4117 149.734 13.1025 147.337 13.1025H128.964C128.231 13.1025 127.691 13.0943 127.176 13.0039C127.519 12.7315 127.771 12.4526 127.983 12.1571C128.302 11.7182 128.463 11.3209 128.463 10.7641C128.463 9.07309 127.181 7.56371 125.648 7.56371ZM125.44 12.3737C124.652 11.8456 124.19 11.2843 123.913 10.5304C124.14 10.0171 124.395 9.69933 124.652 9.50812C124.919 9.30946 125.206 9.23372 125.51 9.23372C125.733 9.23372 126.075 9.37335 126.398 9.72006C126.7 10.0436 126.969 10.5325 127.081 11.194C126.744 11.6344 126.328 11.96 125.44 12.3737ZM169.986 13.4526C169.091 13.2755 168.099 12.7673 166.946 11.9801C167.408 11.2175 167.767 10.7729 168.085 10.5156C168.411 10.2506 168.699 10.1799 169.047 10.1799C169.741 10.1799 170.461 10.8007 170.461 12.1143C170.461 12.5487 170.288 13.0619 169.986 13.4526Z" fill="currentColor"/>
<path d="M15.2343 16.8779L13.8126 15.7093L12.7183 17.0133L14.0942 18.0995L15.2343 16.8779Z" fill="currentColor"/>
<path d="M24.0479 29.6466L25.5627 30.0538C25.8503 30.1323 26.1276 30.2169 26.3344 30.3567C26.5247 30.4853 26.648 30.6543 26.648 30.9305C26.648 31.2312 26.5088 31.4693 26.256 31.6411C25.9952 31.8183 25.6043 31.9289 25.1163 31.9289C24.1413 31.9289 23.4554 31.4676 23.0713 30.8257L22.906 30.5494L21.5665 31.71L21.7026 31.8966C22.4237 32.8853 23.5739 33.4844 25.0713 33.4844C26.0192 33.4844 26.8505 33.229 27.4504 32.7585C28.0547 32.2844 28.4089 31.6028 28.4089 30.7925C28.4089 29.9451 28.0106 29.3976 27.5003 29.0429C27.0061 28.6994 26.4087 28.538 26.005 28.4298L24.6113 28.0665L24.6099 28.0661C24.3052 27.9831 24.1031 27.8855 23.9771 27.7651C23.8614 27.6545 23.7888 27.5043 23.7888 27.2604C23.7888 26.97 23.9084 26.7831 24.0967 26.6586C24.2983 26.5252 24.6006 26.4506 24.9709 26.4506C25.6967 26.4506 26.2636 26.7715 26.7099 27.3874L26.894 27.6414L28.1361 26.433L27.9865 26.254C27.241 25.3619 26.2006 24.9119 25.0367 24.9119C24.2144 24.9119 23.5433 25.1029 22.9728 25.5424C22.4024 25.9819 22.1494 26.6939 22.1494 27.3278C22.1494 28.2989 22.6184 29.1162 24.0479 29.6466Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M69.4108 24.9153C68.115 24.9153 67.0099 25.358 66.2287 26.1257C65.4481 26.8929 65.0072 27.9684 65.0072 29.2066C65.0072 30.4465 65.4491 31.5221 66.2301 32.2888C67.0117 33.056 68.1168 33.4979 69.4108 33.4979C70.7066 33.4979 71.8117 33.0551 72.5928 32.2874C73.3734 31.5203 73.8143 30.4447 73.8143 29.2066C73.8143 27.9682 73.3725 26.8927 72.5915 26.1257C71.81 25.3581 70.7049 24.9153 69.4108 24.9153ZM66.8928 29.2066C66.8928 28.3821 67.1506 27.7063 67.5842 27.2401C68.0152 26.7767 68.6371 26.5011 69.4108 26.5011C70.1899 26.5011 70.8116 26.7769 71.241 27.2399C71.6731 27.7058 71.9288 28.3815 71.9288 29.2066C71.9288 30.0335 71.673 30.71 71.241 31.1758C70.8117 31.6386 70.1898 31.9136 69.4108 31.912C68.6371 31.912 68.0152 31.6364 67.5842 31.173C67.1506 30.7068 66.8928 30.0311 66.8928 29.2066Z" fill="currentColor"/>
<path d="M3.01149 25.1139H0.604118V33.2857H2.39621V28.0913L4.64557 33.2857H6.22504L8.48431 28.0322V33.2857H10.2764V25.1139H7.89173L5.479 30.9809L3.01149 25.1139Z" fill="currentColor"/>
<path d="M14.4343 25.1139H12.6318V29.9877C12.6318 30.6553 12.754 31.5251 13.2734 32.2341C13.8048 32.9596 14.7205 33.4743 16.2083 33.4743C17.7271 33.4743 18.6593 32.9317 19.1988 32.1741C19.7259 31.4338 19.8504 30.5266 19.8504 29.8328V25.1139H18.0445V29.7116C18.0445 30.2206 17.9995 30.7689 17.755 31.1863C17.6362 31.389 17.4703 31.5604 17.2344 31.6831C16.9968 31.8067 16.6734 31.8885 16.229 31.8885C15.7966 31.8885 15.48 31.8077 15.2462 31.6857C15.0138 31.5644 14.8487 31.3948 14.7295 31.1942C14.4847 30.7821 14.4343 30.2413 14.4343 29.7453V25.1139Z" fill="currentColor"/>
<path d="M40.5251 25.1139H38.7226V29.9877C38.7226 30.6553 38.8448 31.5251 39.3642 32.2341C39.8956 32.9596 40.8113 33.4743 42.299 33.4743C43.8179 33.4743 44.7501 32.9317 45.2896 32.1741C45.8167 31.4338 45.9412 30.5266 45.9412 29.8328V25.1139H44.1353V29.7116C44.1353 30.2206 44.0903 30.7689 43.8458 31.1863C43.727 31.389 43.5611 31.5604 43.3252 31.6831C43.0876 31.8067 42.7642 31.8885 42.3198 31.8885C41.8874 31.8885 41.5708 31.8077 41.337 31.6857C41.1046 31.5644 40.9395 31.3948 40.8203 31.1942C40.5755 30.7821 40.5251 30.2413 40.5251 29.7453V25.1139Z" fill="currentColor"/>
<path d="M50.9171 25.1139H48.5097V33.2857H50.3018V28.0913L52.5512 33.2857H54.1306L56.3899 28.0322V33.2857H58.182V25.1139H55.7973L53.3846 30.9809L50.9171 25.1139Z" fill="currentColor"/>
<path d="M99.0641 25.1139H97.2582V33.2857H99.0641V29.9355H103.252V33.2857H105.058V25.1139H103.252V28.3194H99.0641V25.1139Z" fill="currentColor"/>
<path d="M130.363 25.1139H128.557V29.9877C128.557 30.6553 128.68 31.5251 129.199 32.2341C129.73 32.9596 130.646 33.4743 132.134 33.4743C133.653 33.4743 134.585 32.9317 135.124 32.1741C135.652 31.4338 135.776 30.5266 135.776 29.8328V25.1139H133.974V29.7116C133.974 30.2206 133.929 30.7689 133.684 31.1863C133.565 31.389 133.399 31.5604 133.164 31.6831C132.926 31.8067 132.602 31.8885 132.158 31.8885C131.726 31.8885 131.409 31.8077 131.175 31.6857C130.943 31.5644 130.778 31.3948 130.659 31.1942C130.414 30.7821 130.363 30.2413 130.363 29.7453V25.1139Z" fill="currentColor"/>
<path d="M148.602 25.1139H146.796V29.9877C146.796 30.6553 146.918 31.5251 147.437 32.2341C147.969 32.9596 148.884 33.4743 150.372 33.4743C151.891 33.4743 152.823 32.9317 153.363 32.1741C153.89 31.4338 154.014 30.5266 154.014 29.8328V25.1139H152.212V29.7116C152.212 30.2206 152.167 30.7689 151.922 31.1863C151.804 31.389 151.638 31.5604 151.402 31.6831C151.164 31.8067 150.841 31.8885 150.396 31.8885C149.964 31.8885 149.647 31.8077 149.414 31.6857C149.181 31.5644 149.016 31.3948 148.897 31.1942C148.652 30.7821 148.602 30.2413 148.602 29.7453V25.1139Z" fill="currentColor"/>
<path d="M36.5798 25.1173H30.5067V33.2891H36.5798V31.673H32.3092V29.9624H36.386V28.3665H32.3092V26.7334H36.5798V25.1173Z" fill="currentColor"/>
<path d="M95.4234 25.1173H87.9349V26.7334H90.7762V33.2891H92.5821V26.7334H95.4234V25.1173Z" fill="currentColor"/>
<path d="M113.811 25.1173H107.737V33.2891H113.811V31.673H109.54V29.9624H113.617V28.3665H109.54V26.7334H113.811V25.1173Z" fill="currentColor"/>
<path d="M145.027 25.1173H137.538V26.7334H140.379V33.2891H142.185V26.7334H145.027V25.1173Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M160.256 25.1173H156.579V33.2891H158.385V30.2688H159.283L161.602 33.2925H163.804L161.312 30.1068C162.544 29.7841 163.365 28.858 163.365 27.6442C163.365 26.9001 163.059 26.2595 162.504 25.8089C161.952 25.3616 161.176 25.1173 160.256 25.1173ZM158.385 28.6965V26.7099H160.305C160.731 26.7099 161.035 26.8254 161.23 26.9939C161.422 27.1602 161.532 27.399 161.532 27.6981C161.532 27.9931 161.424 28.2354 161.231 28.4055C161.038 28.577 160.734 28.6965 160.305 28.6965H158.385Z" fill="currentColor"/>
<path d="M171.551 25.1173L165.564 25.1173V33.2891L171.551 33.2891V31.673L167.366 31.673V29.9624L171.358 29.9624V28.3665L167.366 28.3665V26.7334L171.551 26.7334V25.1173Z" fill="currentColor"/>
<path d="M81.9817 25.1207H76.0194V33.2925H77.8254V30.0736H81.8018V28.4675H77.8254V26.7368H81.9817V25.1207Z" fill="currentColor"/>
<path d="M126.678 25.1207H120.715V33.2925H122.521V30.0736H126.498V28.4675H122.521V26.7368H126.678V25.1207Z" fill="currentColor"/>
</svg>
            </a>
        </div>
        <nav class="pt-3 lg:pt-22 xl:pt-24 px-outergutter lg:px-6 xl:px-8 flex flex-col lg:flex-1" role="navigation">
            <div class="flex flex-row-reverse lg:flex-row justify-between pb-3 lg:pb-0 lg:fixed lg:right-6 xl:right-7 lg:z-40 lg:top-6 xl:top-7 lg:rtl:right-auto lg:rtl:left-6 xl:rtl:left-7">
                <span >
    <span class="inline-flex rounded-full px-1 py-1 bg-default border border-light" >
                    <span
            class="f-ui-3 h-8 leading-8 w-11 text-center uppercase focus-ring focus-ring-fit focus-ring bg-inverse text-default shadow-xs border-default border-xs focus-ring-darkest rounded-full"
                    >
            EN
        </span>
                    <a
            class="f-ui-3 h-8 leading-8 w-11 text-center uppercase focus-ring focus-ring-fit focus-ring langswitch text-light"
             href="ar.html" data-barba-prevent         >
            ع
        </a>
        </span>
</span>
                                    <a
         href="en/auth/login.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover f-ui-3 py-2.5 px-5 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  inline-flex mx-2" data-behavior="signInButton" data-signinbutton-url="https://museumofthefuture.ae/en/account/profile" data-signinbutton-label="My Profile"
            >
                <span class="button-label">
            Sign in
        </span>
                    </a>
                            </div>
                        <div class="flex-1 w-full menu menu-6">
                                                        <a href="en/shop.html" class="group block focus-ring focus-ring-rounded">
        <div class="overflow-hidden relative z-1 flex flex-col items-center justify-center w-full h-full bg-darker rounded sm:rounded-lg px-4 lg:px-10 py-20 md:py-25 lg:py-10">
                                                                                            <img class="menu-square absolute z-1 object-cover h-full w-full"
        src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAuAAEAAgMAAAAAAAAAAAAAAAAFBAYCAwkBAQADAAAAAAAAAAAAAAAAAAIBAwX/2gAMAwEAAhADEAAAAOnYgIOjRZ8KJqcKBNjFiRZsJj//xAAdEAACAgIDAQAAAAAAAAAAAAAAAQIDBCERFDFR/9oACAEBAAE/ALMiPHpdkR2SyInZiWZj49Lsx72SzXz6d5/SyTaLpPZOTHJk1ouSLENH/8QAFxEBAQEBAAAAAAAAAAAAAAAAAQAQEf/aAAgBAgEBPwAMLt//xAAVEQEBAAAAAAAAAAAAAAAAAAABEP/aAAgBAwEBPwBjP//Z"
        alt=""
            >
                                        <img class="menu-square absolute z-1 object-cover h-full w-full transition-all duration-500 opacity-0 scale-110 group-hover:opacity-100 group-hover:scale-100" src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAuAAEAAgMAAAAAAAAAAAAAAAAFBAYCAwkBAQADAAAAAAAAAAAAAAAAAAIBAwX/2gAMAwEAAhADEAAAAOnYgIOjRZ8KJqcKBNjFiRZsJj//xAAdEAACAgIDAQAAAAAAAAAAAAAAAQIDBCERFDFR/9oACAEBAAE/ALMiPHpdkR2SyInZiWZj49Lsx72SzXz6d5/SyTaLpPZOTHJk1ouSLENH/8QAFxEBAQEBAAAAAAAAAAAAAAAAAQAQEf/aAAgBAgEBPwAMLt//xAAVEQEBAAAAAAAAAAAAAAAAAAABEP/aAAgBAwEBPwBjP//Z" srcset="https://motf-p-16570672ab7e.imgix.net/5406f278-9004-44e7-83c9-808c9425b766/RETAIL_CALLIGRAPHY00194.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3892%2C3892&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/5406f278-9004-44e7-83c9-808c9425b766/RETAIL_CALLIGRAPHY00194.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3892%2C3892&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/5406f278-9004-44e7-83c9-808c9425b766/RETAIL_CALLIGRAPHY00194.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3892%2C3892&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/5406f278-9004-44e7-83c9-808c9425b766/RETAIL_CALLIGRAPHY00194.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3892%2C3892&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/5406f278-9004-44e7-83c9-808c9425b766/RETAIL_CALLIGRAPHY00194.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3892%2C3892&amp;w=1500 1500w" sizes="100vw, (min-width: 1024px) and (max-width:1279px) 50vw" alt="" loading="lazy"  >
                                                    <h3 class="relative f-heading-4 text-center text-inverse z-10">Shop</h3>
            <span class="relative f-body-2 opacity-80 text-center text-inverse z-10 group-hover:opacity-100">Explore future design trends and be inspired by our exciting museum themed merchandise</span>        </div>
    </a>
                                                        <a href="en/event-and-groups.html" class="group block focus-ring focus-ring-rounded">
        <div class="overflow-hidden relative z-1 flex flex-col items-center justify-center w-full h-full bg-darker rounded sm:rounded-lg px-4 lg:px-10 py-20 md:py-25 lg:py-10">
                                                                                            <img class="menu-square absolute z-1 object-cover h-full w-full"
        src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAuAAADAQEBAAAAAAAAAAAAAAACAwQFAAkBAQEBAQAAAAAAAAAAAAAAAAMCAQT/2gAMAwEAAhADEAAAAPQxkzu8DB3RuVRnVqVpoM6//8QAGRABAQADAQAAAAAAAAAAAAAAAQACEBFh/9oACAEBAAE/AB3yGGLhGViw3fYbFjX/xAAWEQEBAQAAAAAAAAAAAAAAAAABABD/2gAIAQIBAT8AcZv/xAAWEQEBAQAAAAAAAAAAAAAAAAAAEQH/2gAIAQMBAT8AzVVX/9k="
        alt=""
            >
                                        <img class="menu-square absolute z-1 object-cover h-full w-full transition-all duration-500 opacity-0 scale-110 group-hover:opacity-100 group-hover:scale-100" src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAuAAADAQEBAAAAAAAAAAAAAAACAwQFAAkBAQEBAQAAAAAAAAAAAAAAAAMCAQT/2gAMAwEAAhADEAAAAPQxkzu8DB3RuVRnVqVpoM6//8QAGRABAQADAQAAAAAAAAAAAAAAAQACEBFh/9oACAEBAAE/AB3yGGLhGViw3fYbFjX/xAAWEQEBAQAAAAAAAAAAAAAAAAABABD/2gAIAQIBAT8AcZv/xAAWEQEBAQAAAAAAAAAAAAAAAAAAEQH/2gAIAQMBAT8AzVVX/9k=" srcset="https://motf-p-16570672ab7e.imgix.net/9cf525cd-8d30-4794-b3e6-2cbe044e5471/B26F5E7A-4FCF-4F07-8EB9-696F0CCA380E.jpeg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=126%2C0%2C4040%2C4045&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/9cf525cd-8d30-4794-b3e6-2cbe044e5471/B26F5E7A-4FCF-4F07-8EB9-696F0CCA380E.jpeg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=126%2C0%2C4040%2C4045&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/9cf525cd-8d30-4794-b3e6-2cbe044e5471/B26F5E7A-4FCF-4F07-8EB9-696F0CCA380E.jpeg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=126%2C0%2C4040%2C4045&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/9cf525cd-8d30-4794-b3e6-2cbe044e5471/B26F5E7A-4FCF-4F07-8EB9-696F0CCA380E.jpeg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=126%2C0%2C4040%2C4045&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/9cf525cd-8d30-4794-b3e6-2cbe044e5471/B26F5E7A-4FCF-4F07-8EB9-696F0CCA380E.jpeg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=126%2C0%2C4040%2C4045&amp;w=1500 1500w" sizes="100vw, (min-width: 1024px) and (max-width:1279px) 50vw" alt="" loading="lazy"  >
                                                    <h3 class="relative f-heading-4 text-center text-inverse z-10">Event &amp; Groups</h3>
            <span class="relative f-body-2 opacity-80 text-center text-inverse z-10 group-hover:opacity-100">Events &amp; Groups</span>        </div>
    </a>
                                                        <a href="en/experience.html" class="group block focus-ring focus-ring-rounded">
        <div class="overflow-hidden relative z-1 flex flex-col items-center justify-center w-full h-full bg-darker rounded sm:rounded-lg px-4 lg:px-10 py-20 md:py-25 lg:py-10">
                                                                                            <img class="menu-square absolute z-1 object-cover h-full w-full"
        src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAEBAAMAAAAAAAAAAAAAAAAGBQQHCQEBAQEBAAAAAAAAAAAAAAAABgUHCP/aAAwDAQACEAMQAAAA5nqDKjBOxVNOXTK3dQpjqRTGRUZucYS//8QAGhAAAgIDAAAAAAAAAAAAAAAAAAEDMQQhQf/aAAgBAQABPwCKzG4Q0KiJbMZUQ8EyJbMdURUJ6IrIOEVCo//EABkRAAIDAQAAAAAAAAAAAAAAAAAxAQMEIf/aAAgBAgEBPwDSixmhFkdP/8QAGhEAAgMBAQAAAAAAAAAAAAAAAAECAyEEEf/aAAgBAwEBPwCl+shHDmWorjh//9k="
        alt=""
            >
                                        <img class="menu-square absolute z-1 object-cover h-full w-full transition-all duration-500 opacity-0 scale-110 group-hover:opacity-100 group-hover:scale-100" src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAEBAAMAAAAAAAAAAAAAAAAGBQQHCQEBAQEBAAAAAAAAAAAAAAAABgUHCP/aAAwDAQACEAMQAAAA5nqDKjBOxVNOXTK3dQpjqRTGRUZucYS//8QAGhAAAgIDAAAAAAAAAAAAAAAAAAEDMQQhQf/aAAgBAQABPwCKzG4Q0KiJbMZUQ8EyJbMdURUJ6IrIOEVCo//EABkRAAIDAQAAAAAAAAAAAAAAAAAxAQMEIf/aAAgBAgEBPwDSixmhFkdP/8QAGhEAAgMBAQAAAAAAAAAAAAAAAAECAyEEEf/aAAgBAwEBPwCl+shHDmWorjh//9k=" srcset="https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200404.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1523%2C0%2C6093%2C6093&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200404.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1523%2C0%2C6093%2C6093&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200404.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1523%2C0%2C6093%2C6093&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200404.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1523%2C0%2C6093%2C6093&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200404.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1523%2C0%2C6093%2C6093&amp;w=1500 1500w" sizes="100vw, (min-width: 1024px) and (max-width:1279px) 50vw" alt="" loading="lazy"  >
                                                    <h3 class="relative f-heading-4 text-center text-inverse z-10">Museum Experience</h3>
            <span class="relative f-body-2 opacity-80 text-center text-inverse z-10 group-hover:opacity-100">An expansive environment that will engage all the senses</span>        </div>
    </a>
                                                        <a href="en/plan-your-visit.html" class="group block focus-ring focus-ring-rounded">
        <div class="overflow-hidden relative z-1 flex flex-col items-center justify-center w-full h-full bg-darker rounded sm:rounded-lg px-4 lg:px-10 py-20 md:py-25 lg:py-10">
                                                                                            <img class="menu-square absolute z-1 object-cover h-full w-full"
        src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAuAAACAwEAAAAAAAAAAAAAAAADBwQFBgkBAAMBAAAAAAAAAAAAAAAAAAMEBgX/2gAMAwEAAhADEAAAAOfA26a9xUsN6EARsWWquUWchL301yf/AP/EACAQAAIBAwUBAQAAAAAAAAAAAAABAgMFUQQRFEJSFTH/2gAIAQEAAT8A4k8D0c8D0U8HAngVqfkVnb6isu/U+G/JG3Lf8KdrT6kLTHArTHyQpx3KNKJTpRFRjg//xAAYEQADAQEAAAAAAAAAAAAAAAAAAQIDIf/aAAgBAgEBPwB6IdE22SuH/8QAGBEAAgMAAAAAAAAAAAAAAAAAAAECAxH/2gAIAQMBAT8AUcFbhdFJFk3p/9k="
        alt=""
            >
                                        <img class="menu-square absolute z-1 object-cover h-full w-full transition-all duration-500 opacity-0 scale-110 group-hover:opacity-100 group-hover:scale-100" src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAuAAACAwEAAAAAAAAAAAAAAAADBwQFBgkBAAMBAAAAAAAAAAAAAAAAAAMEBgX/2gAMAwEAAhADEAAAAOfA26a9xUsN6EARsWWquUWchL301yf/AP/EACAQAAIBAwUBAQAAAAAAAAAAAAABAgMFUQQRFEJSFTH/2gAIAQEAAT8A4k8D0c8D0U8HAngVqfkVnb6isu/U+G/JG3Lf8KdrT6kLTHArTHyQpx3KNKJTpRFRjg//xAAYEQADAQEAAAAAAAAAAAAAAAAAAQIDIf/aAAgBAgEBPwB6IdE22SuH/8QAGBEAAgMAAAAAAAAAAAAAAAAAAAECAxH/2gAIAQMBAT8AUcFbhdFJFk3p/9k=" srcset="https://motf-p-16570672ab7e.imgix.net/c9789689-ba5e-48fe-9d2b-893ddd12da11/MOTF-LS_5__7R10306_0008.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=2179%2C0%2C4932%2C4932&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/c9789689-ba5e-48fe-9d2b-893ddd12da11/MOTF-LS_5__7R10306_0008.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=2179%2C0%2C4932%2C4932&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/c9789689-ba5e-48fe-9d2b-893ddd12da11/MOTF-LS_5__7R10306_0008.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=2179%2C0%2C4932%2C4932&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/c9789689-ba5e-48fe-9d2b-893ddd12da11/MOTF-LS_5__7R10306_0008.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=2179%2C0%2C4932%2C4932&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/c9789689-ba5e-48fe-9d2b-893ddd12da11/MOTF-LS_5__7R10306_0008.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=2179%2C0%2C4932%2C4932&amp;w=1500 1500w" sizes="100vw, (min-width: 1024px) and (max-width:1279px) 50vw" alt="" loading="lazy"  >
                                                    <h3 class="relative f-heading-4 text-center text-inverse z-10">Plan Your Visit</h3>
            <span class="relative f-body-2 opacity-80 text-center text-inverse z-10 group-hover:opacity-100">Everything you need to prepare for the future</span>        </div>
    </a>
                                                        <a href="en/exhibits/tomorrow-today.html" class="group block focus-ring focus-ring-rounded">
        <div class="overflow-hidden relative z-1 flex flex-col items-center justify-center w-full h-full bg-darker rounded sm:rounded-lg px-4 lg:px-10 py-20 md:py-25 lg:py-10">
                                                                                            <img class="menu-square absolute z-1 object-cover h-full w-full"
        src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAADAQEBAAAAAAAAAAAAAAADBAUCBgkBAQEBAAAAAAAAAAAAAAAAAAMEBf/aAAwDAQACEAMQAAAA8sn6VKXfh56vSm5VPVhrUJZIx//EACAQAAIBAwUBAQAAAAAAAAAAAAABAgMEERMUITFREmH/2gAIAQEAAT8AjBkabwaTwaTIW/PRTtvwVo/DaPwhb89FO3XhG2RtiEVkpRRGKPhH/8QAGBEAAwEBAAAAAAAAAAAAAAAAAAECERL/2gAIAQIBAT8AlmoVHR//xAAYEQACAwAAAAAAAAAAAAAAAAAAAQIQEv/aAAgBAwEBPwCSpoyf/9k="
        alt=""
            >
                                        <img class="menu-square absolute z-1 object-cover h-full w-full transition-all duration-500 opacity-0 scale-110 group-hover:opacity-100 group-hover:scale-100" src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAADAQEBAAAAAAAAAAAAAAADBAUCBgkBAQEBAAAAAAAAAAAAAAAAAAMEBf/aAAwDAQACEAMQAAAA8sn6VKXfh56vSm5VPVhrUJZIx//EACAQAAIBAwUBAQAAAAAAAAAAAAABAgMEERMUITFREmH/2gAIAQEAAT8AjBkabwaTwaTIW/PRTtvwVo/DaPwhb89FO3XhG2RtiEVkpRRGKPhH/8QAGBEAAwEBAAAAAAAAAAAAAAAAAAECERL/2gAIAQIBAT8AlmoVHR//xAAYEQACAwAAAAAAAAAAAAAAAAAAAQIQEv/aAAgBAwEBPwCSpoyf/9k=" srcset="https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4__7R10475_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=663%2C15%2C5231%2C5231&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4__7R10475_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=663%2C15%2C5231%2C5231&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4__7R10475_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=663%2C15%2C5231%2C5231&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4__7R10475_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=663%2C15%2C5231%2C5231&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4__7R10475_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=663%2C15%2C5231%2C5231&amp;w=1500 1500w" sizes="100vw, (min-width: 1024px) and (max-width:1279px) 50vw" alt="" loading="lazy"  >
                                                    <h3 class="relative f-heading-4 text-center text-inverse z-10">Tomorrow Today</h3>
            <span class="relative f-body-2 opacity-80 text-center text-inverse z-10 group-hover:opacity-100">Explore near-future technologies from the world’s leading innovators</span>        </div>
    </a>
                                                        <a href="en/exhibits/children-s-world.html" class="group block focus-ring focus-ring-rounded">
        <div class="overflow-hidden relative z-1 flex flex-col items-center justify-center w-full h-full bg-darker rounded sm:rounded-lg px-4 lg:px-10 py-20 md:py-25 lg:py-10">
                                                                                            <img class="menu-square absolute z-1 object-cover h-full w-full"
        src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAEBAQEBAAAAAAAAAAAAAAAFBgIDBAEBAQEBAAAAAAAAAAAAAAAABgcDBP/aAAwDAQACEAMQAAAA3N6BnlUBllZpYbtSwPJz59xeZqQ9/8QAGxAAAQUBAQAAAAAAAAAAAAAAAAECAwQRITH/2gAIAQEAAT8AkemFpyYpbcnR7uj7SZ6WLCKi9LU3o+To67z0lt6npPY3ejpuiyuJJHErlHOXT//EABoRAAMAAwEAAAAAAAAAAAAAAAABAwIEERL/2gAIAQIBAT8AhFtkYvya8l0niuH/xAAXEQADAQAAAAAAAAAAAAAAAAAAAQMR/9oACAEDAQE/AK2WFrLStnhWr0//2Q=="
        alt=""
            >
                                        <img class="menu-square absolute z-1 object-cover h-full w-full transition-all duration-500 opacity-0 scale-110 group-hover:opacity-100 group-hover:scale-100" src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAEBAQEBAAAAAAAAAAAAAAAFBgIDBAEBAQEBAAAAAAAAAAAAAAAABgcDBP/aAAwDAQACEAMQAAAA3N6BnlUBllZpYbtSwPJz59xeZqQ9/8QAGxAAAQUBAQAAAAAAAAAAAAAAAAECAwQRITH/2gAIAQEAAT8AkemFpyYpbcnR7uj7SZ6WLCKi9LU3o+To67z0lt6npPY3ejpuiyuJJHErlHOXT//EABoRAAMAAwEAAAAAAAAAAAAAAAABAwIEERL/2gAIAQIBAT8AhFtkYvya8l0niuH/xAAXEQADAQAAAAAAAAAAAAAAAAAAAQMR/9oACAEDAQE/AK2WFrLStnhWr0//2Q==" srcset="https://motf-p-16570672ab7e.imgix.net/8dd298e2-0be8-4785-a618-022fc7ce5c2f/DONOTUSE_7R20877.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=679%2C0%2C1365%2C1365&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/8dd298e2-0be8-4785-a618-022fc7ce5c2f/DONOTUSE_7R20877.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=679%2C0%2C1365%2C1365&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/8dd298e2-0be8-4785-a618-022fc7ce5c2f/DONOTUSE_7R20877.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=679%2C0%2C1365%2C1365&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/8dd298e2-0be8-4785-a618-022fc7ce5c2f/DONOTUSE_7R20877.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=679%2C0%2C1365%2C1365&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/8dd298e2-0be8-4785-a618-022fc7ce5c2f/DONOTUSE_7R20877.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=679%2C0%2C1365%2C1365&amp;w=1500 1500w" sizes="100vw, (min-width: 1024px) and (max-width:1279px) 50vw" alt="" loading="lazy"  >
                                                    <h3 class="relative f-heading-4 text-center text-inverse z-10">Children&#039;s World</h3>
            <span class="relative f-body-2 opacity-80 text-center text-inverse z-10 group-hover:opacity-100">A fantasy world for children, focused on future skills</span>        </div>
    </a>
                            </div>
                        <div class="sm:mb-25 md:mb-25 lg:mb-0 py-9 flex">
                                <ul class="sm:cols-6 md:cols-6 lg:w-auto ml-0 rtl:ml-gutter lg:flex lg:ml-0 lg:flex-1">
                                                                    <li class="sm:mb-3 md:mb-3 lg:mb-0 lg:pr-7 lg:rtl:pr-0 lg:rtl:pl-7">
                            <a href="en/about-us.html" class="f-ui-2 focus-ring focus-ring-squared">
                                About Us
                            </a>
                        </li>
                                                                                            <li class="sm:mb-3 md:mb-3 lg:mb-0 lg:pr-7 lg:rtl:pr-0 lg:rtl:pl-7">
                            <a href="en/the-building.html" class="f-ui-2 focus-ring focus-ring-squared">
                                The Building
                            </a>
                        </li>
                                                            </ul>
                                                <ul class="sm:cols-6 md:cols-6 lg:w-auto ml-gutter rtl:ml-0 lg:flex lg:ml-0">
                                                                    <li class="sm:mb-3 md:mb-3 lg:mb-0 lg:pl-7 lg:rtl:pl-0 lg:rtl:pr-7">
                            <a href="en/get-help.html" class="f-ui-2 text-light focus-ring focus-ring-squared">
                                Get Help
                            </a>
                        </li>
                                                                                            <li class="sm:mb-3 md:mb-3 lg:mb-0 lg:pl-7 lg:rtl:pl-0 lg:rtl:pr-7">
                            <a href="en/press.html" class="f-ui-2 text-light focus-ring focus-ring-squared">
                                Press
                            </a>
                        </li>
                                                            </ul>
                            </div>
        </nav>
    </div>
</div>
    <div
    class="w-full relative overflow-hidden h-safescreen"
    data-behavior="videoHero"
    role="article"
>
    
    <div class="absolute w-full h-full z-[-20] bg-darkest"></div>
    
        
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-0" aria-hidden="true">
        <button type="button" data-videohero-videofilter class="block absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 left w-full h-full bg-darkest pointer-events-none opacity-100 cursor-pointer m-0 p-0 border-none appearance-none">Play/Pause button
        </button>
        <div
            data-vimeo-id="837859726"
            data-vimeo-defer
            id="vimeo-videohome-837859726"
            class="w-full h-full"
        ></div>
    </div>
        <div class="opacity-0 hidden" data-videohero-uicontainer>
        <span data-videohero-errormessage class="hidden absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full pointer-events-none f-ui-3 pt-3.5 pb-4 px-7 bg-dark backdrop-blur-default hover:bg-darker text-inverse focus-ring focus-ring-inverse">
            Play video
        </span>
        <button data-videohero-pausecontrol class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 inline-flex justify-center items-center rounded-full w-10 h-10 pointer-events-none opacity-0 bg-softinverse backdrop-blur-default hover:bg-softinversehover focus:bg-softinversehover text-inverse focus-ring focus-ring-inverse" aria-label="video controls">
            <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                        <use xlink:href="#icon--pause"></use>
        </svg>
    </span>
            <span class="inline-flex h-5 w-5 hidden">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                        <use xlink:href="#icon--play"></use>
        </svg>
    </span>
        </button>
        <div data-videohero-uibottombar class="absolute mt-3 mb-4 lg:mb-7 right-0 bottom-safe-bottom lg:left-0 w-full flex justify-end lg:justify-between items-center px-3 lg:px-7">
            <div class="flex items-center">
                <button data-videohero-soundcontrolui class="mr-2 rtl:mr-0 rtl:ml-2 inline-flex justify-center items-center rounded-full w-10 h-10 bg-softinverse backdrop-blur-default hover:bg-softinversehover focus:bg-softinversehover text-inverse focus-ring focus-ring-inverse">
                    <span class="inline-flex h-5 w-5 hidden">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Sound off</title>
                        <use xlink:href="#icon--audio"></use>
        </svg>
    </span>
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Sound on</title>
                        <use xlink:href="#icon--no-audio"></use>
        </svg>
    </span>
                </button>
                <button data-videohero-expandui class="inline-flex mr-2 rtl:mr-0 rtl:ml-2 lg:hidden justify-center items-center rounded-full w-10 h-10 bg-softinverse backdrop-blur-default hover:bg-softinversehover focus:bg-softinversehover text-inverse focus-ring focus-ring-inverse">
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Fullscreen</title>
                        <use xlink:href="#icon--expand"></use>
        </svg>
    </span>
                </button>
                <a
         href="en/experience.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-softinverse backdrop-blur-default hover:bg-softinversehover focus:bg-softinversehover text-inverse focus-ring focus-ring-inverse f-ui-3 py-2.5 px-5 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  sm:fixed sm:left-1/2 sm:-translate-x-1/2 sm:bottom-below-player" data-videohero-skipbtn="data-videohero-skipbtn"
            >
                <span class="button-label">
            Skip video
        </span>
                    </a>
            </div>
            
        </div>
    </div>
        
    <div data-videohero-textcontent class="h-full w-full flex justify-center flex-col items-center z-10 absolute">
                <div class="container" >
            <h1 class="text-inverse w-full md:cols-10 xl:cols-8 text-center mx-auto landscape:mt-8">
                
                <span class="f-display-2 uppercase landscape:text-smtitle">
            WHERE THE FUTURE LIVES
            </span>
            </h1>
        </div>
        
                <button
         type="button"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default focus-ring-inverse f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-15 landscape:mt-4" data-videohero-openpreview="data-videohero-openpreview"
            >
                <span class="button-label">
            Preview the Experience
        </span>
                    </button>
        
                <button data-videohero-soundcontrol class="invisible sm:hidden mt-3.5 relative focus-ring-rounded focus-ring-outside focus-ring focus-ring-inverse" type="button">
            <span class="text-inverse flex items-center justify-between" data-videohero-soundtext data-text-on="Sound on" data-text-off="Sound off">
                <span class="inline-flex h-5 w-5 hidden">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Sound on</title>
                        <use xlink:href="#icon--audio"></use>
        </svg>
    </span>
                <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>__(&#039;Sound off&#039;)</title>
                        <use xlink:href="#icon--no-audio"></use>
        </svg>
    </span>
                <span class="pl-2 rtl:pl-0 rtl:pr-2 f-ui-3 whitespace-nowrap" data-text>Sound off</span>
            </span>
        </button>
            </div>
    </div>

    <div class="container mt-outer-6">
            <p class="f-heading-5 cols-10 lg:cols-6 text-center mx-auto " style="color: #000">
        The Museum of the Future welcomes people of all ages to see, touch, and shape our shared future. Go on a journey through possible futures and bring hope and knowledge back to the present.
    </p>
    </div>
    <div class="container mt-outer-6">
            <h2  data-behavior=textFadeIn data-textfadein-triggeronview=1 class="f-heading-3 cols-10 lg:cols-6 text-center mx-auto" style="color: #000">Expand your experience</h2>
        </div>
    <div class="px-outergutter w-full overflow-hidden mt-outer-3" data-behavior="masonry" data-masonry-swiper="0" role="article">
    <div data-masonry-container class="masonry masonry-column mb-6 lg:mb-0">
        <ul data-masonry-list role="list">
            
                        <li class="w-full lg:cols-6" role="listitem">
                <div  class="block focus-ring focus-ring-rounded lg:mt-gutter">
    <div class="relative rounded sm:rounded-lg overflow-hidden">
                                <div class="block ratiobox ratiobox-1x1"  >
                                <img  src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAtAAADAQEBAAAAAAAAAAAAAAACBAUBBgkBAQEBAAAAAAAAAAAAAAAAAAQDAv/aAAwDAQACEAMQAAAA9ykVpq81S50p2ZlUZyTq7pxZ/8QAHBAAAgIDAQEAAAAAAAAAAAAAAAECEQMTIVFh/9oACAEBAAE/AJTROaNi9NqJ5eGTMbvpvJS4ZJOxt2KyRNdK6Uj/xAAXEQEBAQEAAAAAAAAAAAAAAAABABAS/9oACAECAQE/AOZMb//EABYRAQEBAAAAAAAAAAAAAAAAAAABAv/aAAgBAwEBPwCJGWH/2Q==" srcset="https://motf-p-16570672ab7e.imgix.net/63426443-5d3d-4771-a264-a26298f8ae6c/MuseumoftheFuture-Shop-LIFESTYLESHOTGROUP7.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3045%2C3045&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/63426443-5d3d-4771-a264-a26298f8ae6c/MuseumoftheFuture-Shop-LIFESTYLESHOTGROUP7.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3045%2C3045&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/63426443-5d3d-4771-a264-a26298f8ae6c/MuseumoftheFuture-Shop-LIFESTYLESHOTGROUP7.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3045%2C3045&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/63426443-5d3d-4771-a264-a26298f8ae6c/MuseumoftheFuture-Shop-LIFESTYLESHOTGROUP7.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3045%2C3045&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/63426443-5d3d-4771-a264-a26298f8ae6c/MuseumoftheFuture-Shop-LIFESTYLESHOTGROUP7.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=0%2C0%2C3045%2C3045&amp;w=1500 1500w" sizes="100vw, (min-width: 650px) and (max-width:1023px) 50vw" alt="" loading="lazy"  >
                </div>
                                        <span class="absolute block w-full h-full bottom-0 left-0 right-0 top-0 opacity-40 pointer-events-none bg-easing-t-dark"></span>
        <div class="absolute p-5 lg:p-10 w-full left-0 right-0 top-3 bottom-7 flex flex-col lg:block text-center">
            <h3 class=" text-inverse f-heading-3 text-center">Shop now</h3>
                            <p class="block f-body-1 text-inverse pt-2 text-center">Explore future design trends and be inspired by our exciting museum themed merchandise.</p>
                                                            <a
         href="en/shop.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default focus-ring-inverse f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mx-auto mt-auto lg:mt-7"
            >
                <span class="button-label">
            Explore Shop
        </span>
                    </a>
                                    </div>

            </div>
</div>
            </li>
            
                        <li class="w-full lg:cols-6" role="listitem">
                <div  class="block focus-ring focus-ring-rounded lg:mt-50">
    <div class="relative rounded sm:rounded-lg overflow-hidden">
                                <div class="block ratiobox ratiobox-1x1"  >
                                <img  src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAsAAADAQEAAAAAAAAAAAAAAAAFBgcECAEBAQEAAAAAAAAAAAAAAAAABAUD/9oADAMBAAIQAxAAAABgY50avQrOzSA8JnNRFT1MLQCaHvNt/8QAHhAAAQQDAAMAAAAAAAAAAAAAAQACBBEDITEFUWH/2gAIAQEAAT8AZkFqLlFhRMzdJmdtdTZO+qPLojajTqrab5DXUJH1YpRB6sUw+0JxrqDimPNrG8oPK//EABcRAAMBAAAAAAAAAAAAAAAAAAABAjH/2gAIAQIBAT8AoelYNH//xAAXEQEBAQEAAAAAAAAAAAAAAAAAAQIx/9oACAEDAQE/AMs8RK//2Q==" srcset="https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4x__7R10490_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=475%2C0%2C5237%2C5237&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4x__7R10490_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=475%2C0%2C5237%2C5237&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4x__7R10490_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=475%2C0%2C5237%2C5237&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4x__7R10490_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=475%2C0%2C5237%2C5237&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/dfd24408-995d-4350-9b49-362c8b2a3d30/MOTF-LS_4x__7R10490_0001.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=475%2C0%2C5237%2C5237&amp;w=1500 1500w" sizes="100vw, (min-width: 650px) and (max-width:1023px) 50vw" alt="" loading="lazy"  >
                </div>
                                        <span class="absolute block w-full h-full bottom-0 left-0 right-0 top-0 opacity-40 pointer-events-none bg-easing-t-dark"></span>
        <div class="absolute p-5 lg:p-10 w-full left-0 right-0 top-3 bottom-7 flex flex-col lg:block text-center">
            <h3 class=" text-inverse f-heading-3 text-center">Tomorrow Today</h3>
                            <p class="block f-body-1 text-inverse pt-2 text-center">Explore near-future technologies from the world’s leading innovators.</p>
                                                            <a
         href="en/exhibits/tomorrow-today.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default focus-ring-inverse f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mx-auto mt-auto lg:mt-7"
            >
                <span class="button-label">
            Explore more
        </span>
                    </a>
                                    </div>

            </div>
</div>
            </li>
            
                        <li class="w-full lg:cols-6" role="listitem">
                <div  class="block focus-ring focus-ring-rounded lg:mt-gutter">
    <div class="relative rounded sm:rounded-lg overflow-hidden">
                                <div class="block ratiobox ratiobox-1x1"  >
                                <img  src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAwAAACAgMAAAAAAAAAAAAAAAAEBgIFAQMIAQADAQEAAAAAAAAAAAAAAAABAwQFBv/aAAwDAQACEAMQAAAA57nSw7rIYM0OxVCcNRBgtRKaSqn/xAAfEAACAgEEAwAAAAAAAAAAAAAAAQIEYQMSIVETFDH/2gAIAQEAAT8AUkKSN5uHr5PYXYrGTzrslayO3z9I28itZJTZLUfJGbFNn//EABgRAQEAAwAAAAAAAAAAAAAAAAACAQMS/9oACAECAQE/AKp02MP/xAAYEQADAQEAAAAAAAAAAAAAAAAAAQIDEf/aAAgBAwEBPwCZ6KDNDR//2Q==" srcset="https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200371_v2.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1472%2C0%2C5917%2C5917&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200371_v2.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1472%2C0%2C5917%2C5917&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200371_v2.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1472%2C0%2C5917%2C5917&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200371_v2.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1472%2C0%2C5917%2C5917&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/18207a0f-06dc-4868-8618-4ad76f6465c3/Level5200371_v2.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1472%2C0%2C5917%2C5917&amp;w=1500 1500w" sizes="100vw, (min-width: 650px) and (max-width:1023px) 50vw" alt="" loading="lazy"  >
                </div>
                                        <span class="absolute block w-full h-full bottom-0 left-0 right-0 top-0 opacity-40 pointer-events-none bg-easing-t-dark"></span>
        <div class="absolute p-5 lg:p-10 w-full left-0 right-0 top-3 bottom-7 flex flex-col lg:block text-center">
            <h3 class=" text-inverse f-heading-3 text-center">Journey to the future</h3>
                            <p class="block f-body-1 text-inverse pt-2 text-center">An expansive environment that will engage all the senses</p>
                                                            <a
         href="en/experience.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default focus-ring-inverse f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mx-auto mt-auto lg:mt-7"
            >
                <span class="button-label">
            Preview the exhibition
        </span>
                    </a>
                                    </div>

            </div>
</div>
            </li>
            
                        <li class="w-full lg:cols-6" role="listitem">
                <div  class="block focus-ring focus-ring-rounded lg:mt-gutter">
    <div class="relative rounded sm:rounded-lg overflow-hidden">
                                <div class="block ratiobox ratiobox-1x1"  >
                                <img  src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAwAAEAAgMAAAAAAAAAAAAAAAAFAgQDBgcBAAIDAQAAAAAAAAAAAAAAAAMEAQIFB//aAAwDAQACEAMQAAAA5InmY7e0Cftx7JbLYbmaaRyNCb//xAAaEAACAwEBAAAAAAAAAAAAAAAAAwECESEx/9oACAEBAAE/AKUnSi5wuucLLnRaui08LpLJjRcdFxGF4jC1ei/RfhfwtPT/xAAXEQADAQAAAAAAAAAAAAAAAAAAAQIS/9oACAECAQE/AEybNM0z/8QAFxEAAwEAAAAAAAAAAAAAAAAAAAECEv/aAAgBAwEBPwCZMkpDR//Z" srcset="https://motf-p-16570672ab7e.imgix.net/9f52c15e-0a2d-4d9f-b4d6-233d11feebe0/Level1200861.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1452%2C0%2C5891%2C5887&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/9f52c15e-0a2d-4d9f-b4d6-233d11feebe0/Level1200861.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1452%2C0%2C5891%2C5887&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/9f52c15e-0a2d-4d9f-b4d6-233d11feebe0/Level1200861.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1452%2C0%2C5891%2C5887&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/9f52c15e-0a2d-4d9f-b4d6-233d11feebe0/Level1200861.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1452%2C0%2C5891%2C5887&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/9f52c15e-0a2d-4d9f-b4d6-233d11feebe0/Level1200861.jpg?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=1452%2C0%2C5891%2C5887&amp;w=1500 1500w" sizes="100vw, (min-width: 650px) and (max-width:1023px) 50vw" alt="" loading="lazy"  >
                </div>
                                        <span class="absolute block w-full h-full bottom-0 left-0 right-0 top-0 opacity-40 pointer-events-none bg-easing-t-dark"></span>
        <div class="absolute p-5 lg:p-10 w-full left-0 right-0 top-3 bottom-7 flex flex-col lg:block text-center">
            <h3 class=" text-inverse f-heading-3 text-center">Children&#039;s World</h3>
                            <p class="block f-body-1 text-inverse pt-2 text-center">A fantasy world for children, focused on future skills.</p>
                                                            <a
         href="en/exhibits/children-s-world.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default focus-ring-inverse f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mx-auto mt-auto lg:mt-7"
            >
                <span class="button-label">
            Learn more
        </span>
                    </a>
                                    </div>

            </div>
</div>
            </li>
            
                        <li class="w-full lg:cols-6" role="listitem">
                <div  class="block focus-ring focus-ring-rounded lg:mt-gutter">
    <div class="relative rounded sm:rounded-lg overflow-hidden">
                                <picture class="block ratiobox ratiobox-1x1 lg:ratiobox-2x3">
                                                                                                                    <source media="(max-width: 1023px)" sizes="100vw" srcset="https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=319%2C0%2C1021%2C1020&amp;w=400 400w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=319%2C0%2C1021%2C1020&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=319%2C0%2C1021%2C1020&amp;w=800 800w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=319%2C0%2C1021%2C1020&amp;w=1000 1000w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=319%2C0%2C1021%2C1020&amp;w=1200 1200w" >
                                                                                            <source media="(min-width: 1024px)" sizes="50vw" srcset="https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=670%2C0%2C682%2C1020&amp;w=600 600w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=670%2C0%2C682%2C1020&amp;w=900 900w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=670%2C0%2C682%2C1020&amp;w=1200 1200w, https://motf-p-16570672ab7e.imgix.net/b29612dd-31f9-4016-975e-6eb7a6ef2e94/Ramadan-Majles-KV-.png?auto=compress%2Cformat&amp;fit=min&amp;fm=jpg&amp;q=80&amp;rect=670%2C0%2C682%2C1020&amp;w=1500 1500w" >
                                                                                        <img src="data:image/gif;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAIDAwMEAwQFBQQGBgYGBggIBwcICA0JCgkKCQ0TDA4MDA4MExEUEQ8RFBEeGBUVGB4jHRwdIyolJSo1MjVFRVwBAgMDAwQDBAUFBAYGBgYGCAgHBwgIDQkKCQoJDRMMDgwMDgwTERQRDxEUER4YFRUYHiMdHB0jKiUlKjUyNUVFXP/CABEIAB4AHgMBIgACEQEDEQH/xAAqAAEBAQEBAAAAAAAAAAAAAAAGBwUCCAEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEAMQAAAA8xVUUiLu3hKYF4FXAA7nCLn/xAAgEAABAwUBAAMAAAAAAAAAAAABAAIDBAUREjEhFTJB/9oACAEBAAE/AKVpDgrW8DVW+doA9UdS3XqZSFp4qZxYQqSv1x6mXQY+ykt+BxTxaJ1UWHq+UI/VPG3VXBoGVWuIJT5XZ6v/xAAUEQEAAAAAAAAAAAAAAAAAAAAg/9oACAECAQE/AB//xAAUEQEAAAAAAAAAAAAAAAAAAAAg/9oACAEDAQE/AB//2Q==" alt="" loading="lazy"  >
    </picture>
                                <span class="absolute block w-full h-full bottom-0 left-0 right-0 top-0 opacity-40 pointer-events-none bg-easing-t-dark"></span>
        <div class="absolute p-5 lg:p-10 w-full left-0 right-0 top-3 bottom-7 flex flex-col lg:block text-center">
            <h3 class=" text-inverse f-heading-3 text-center">Programs &amp; Activities</h3>
                            <p class="block f-body-1 text-inverse pt-2 text-center">Attend specially curated programs &amp; activities at MOTF including; Speaker Series with Future Talks and Future Experts, Workshop and Camps</p>
                                                            <a
         href="en/programs.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-inverse text-default focus-ring-inverse f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mx-auto mt-auto lg:mt-7"
            >
                <span class="button-label">
            Click for current offering
        </span>
                    </a>
                                    </div>

            </div>
</div>
            </li>
                    </ul>
            </div>
    </div>

    <div class="relative mt-outer-6 w-full bg-darker" role="article">
                <span class="absolute block w-full h-full bottom-0 left-0 right-0 top-0 opacity-40 pointer-events-none bg-easing-b-dark"></span>
        <div class="absolute bottom-15 lg:bottom-17.5 left-0 right-0 px-outergutter text-center">
            <h3 class="f-heading-3 text-inverse cols-12 lg:cols-4 mx-auto text-center">
                
            </h3>
            <h4 class="f-body-1 mt-2 lg:mt-3 text-inverse cols-12 lg:cols-4 mx-auto text-center">
                
            </h4>
                    </div>
    </div>

    <div class="container mt-25">
            <h2  data-behavior=textFadeIn data-textfadein-triggeronview=1 class="f-heading-3 cols-10 lg:cols-6 md:text-center md:mx-auto" style="color: #000">Prepare for the journey</h2>
        </div>
    <div class="container mt-outer-3" role="article">
        <div class="cols-container md:flex -mt-15">
                <div class="w-full md:cols-6 mt-15">
                                    <h3 class="f-heading-4 xl:pr-1/6 xl:rtl:pr-0 xl:rtl:pl-1/6">Plan your visit</h3>
                                    <div class="f-body-1 text-light mt-3 xl:pr-1/6 xl:rtl:pr-0 xl:rtl:pl-1/6">
                Find our location and choose the best transport links
            </div>
                                    <a
         href="en/plan-your-visit.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-darkest text-inverse focus-ring-darkest f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-5"
            >
                <span class="button-label">
            Find your way
        </span>
                    </a>
                    </div>
                <div class="w-full md:cols-6 mt-15">
                                    <h3 class="f-heading-4 xl:pr-1/6 xl:rtl:pr-0 xl:rtl:pl-1/6">Questions?</h3>
                                    <div class="f-body-1 text-light mt-3 xl:pr-1/6 xl:rtl:pr-0 xl:rtl:pl-1/6">
                All the information you need on tickets, opening hours and more
            </div>
                                    <a
         href="en/get-help.html"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-darkest text-inverse focus-ring-darkest f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-5"
            >
                <span class="button-label">
            Find the answers
        </span>
                    </a>
                    </div>
            </div>
</div>

    
    <div class="-mb-27">
        <div class="container mt-outer-6" role="article">
    <div class="w-full relative rounded sm:rounded-lg overflow-hidden text-center bdradius-safari-fix text-default pb-15 xl:pb-20 "  data-gradient-index="0" data-behavior="gradient">
                <div data-gradient-canvascontainer class="w-full h-full absolute z-[-10]">
            <canvas
                data-gradient-canvas
                class="w-full h-full z-[-1]"
                fallbackClass="gradient-card gradient-card-0 gradient-noise-opacity"
            ></canvas>
        </div>
                        
            </div>
</div>
    </div>
<footer class="container mt-30 mb-20 lg:mb-10 rounded sm:rounded-lg bg-default" >
        <div class="flex flex-col lg:flex-row justify-between w-full pt-7.5 md:pt-9 lg:pt-10">
        <p class="f-heading-3 w-full md:cols-8 lg:cols-4 px-5 md:px-0 md:pl-10 md:rtl:pl-0 md:rtl:pr-10" role="heading" aria-level="3">Subscribe to Museum of the Future updates</p>
        <div class="w-full mt-8 md:mt-9 lg:mt-0 lg:cols-6 px-5 md:px-10 lg:pl-0 lg:pr-10 lg:rtl:pr-0 lg:rtl:pl-10">
            <form
     action="https://museumofthefuture.ae/api/en/subscribe"      method="POST"     novalidate
    data-behavior="form formNewsletter" class="relative"
>
    <div class="relative" data-behavior="formField">
    <input
        type="email"
        value=""
         name="email"         placeholder=" "
        id="newsletterEmail"
                                        class="input input-cta flex-1 pt-7 pb-3.5 rounded-full"  />
    <label
        class="input-label top-8.5"
        for="newsletterEmail"
    >
        Email address
    </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <button
         type="submit"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5  md:hidden absolute right-2 rtl:right-auto rtl:rotate-180 rtl:left-2 top-1/2 -translate-y-1/2" aria-label="Subscribe"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>chevron-right</title>
                        <use xlink:href="#icon--chevron-right"></use>
        </svg>
    </span>
            </button>
    <button
         type="submit"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  sm:hidden md:block absolute right-2 rtl:right-auto rtl:left-2 top-1/2 -translate-y-1/2"
            >
                <span class="button-label">
            Subscribe
        </span>
                    </button>
    <span data-form-error="email" class="input-error"></span>
</div>
                <p data-formnewsletter-success class="opacity-0 transition-opacity pointer-events-none overflow-hidden absolute right-2 left-2 top-2 bottom-2 bg-inverse f-ui-3 rounded-full flex items-center">
                    <span class="inline-flex h-5 w-5 ml-4 mr-3 rtl:mr-4 rtl:ml-3">
        <svg  focusable="false" aria-hidden="true"                         >
                        <use xlink:href="#icon--checkbox-active"></use>
        </svg>
    </span>
                    <span data-formnewsletter-message aria-live="polite" class="mr-4 rtl:mr-0 rtl:ml-4"></span>
                </p>
                <div class="w-full absolute bottom-0 pointer-events-none z-0">
        <div id="newsletter-recaptcha" data-size="invisible" data-badge="inline" data-callback="window.A17.CAPTCHA_SUBMIT" data-sitekey="6LfITR8cAAAAAPfLAFUf56OC4A_gh3_xylj8T5JL" class="g-recaptcha"></div>
    </div>
    </form>
                            <ul class="mt-1 -mx-1 md:-mx-1.5 flex w-full overflow-hidden flex-wrap justify-start">
                    <li class="mt-1 px-1 md:px-1.5">
            <a
         href="https://www.instagram.com/museumofthefuture"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5" aria-label="Instagram" target="_blank" rel="noopener noreferrer"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>instagram</title>
                        <use xlink:href="#icon--instagram"></use>
        </svg>
    </span>
                <span class="sr-only">link opens in new tab/window</span>
            </a>
        </li>
                            <li class="mt-1 px-1 md:px-1.5">
            <a
         href="https://www.facebook.com/museumofthefuture"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5" aria-label="Facebook" target="_blank" rel="noopener noreferrer"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>facebook</title>
                        <use xlink:href="#icon--facebook"></use>
        </svg>
    </span>
                <span class="sr-only">link opens in new tab/window</span>
            </a>
        </li>
                            <li class="mt-1 px-1 md:px-1.5">
            <a
         href="https://www.tiktok.com/@museumofthefuture"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5" aria-label="Tiktok" target="_blank" rel="noopener noreferrer"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>tiktok</title>
                        <use xlink:href="#icon--tiktok"></use>
        </svg>
    </span>
                <span class="sr-only">link opens in new tab/window</span>
            </a>
        </li>
                            <li class="mt-1 px-1 md:px-1.5">
            <a
         href="https://www.linkedin.com/company/motf"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>linkedin</title>
                        <use xlink:href="#icon--linkedin"></use>
        </svg>
    </span>
                <span class="sr-only">link opens in new tab/window</span>
            </a>
        </li>
                            <li class="mt-1 px-1 md:px-1.5">
            <a
         href="https://twitter.com/MOTF"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5" aria-label="Twitter" target="_blank" rel="noopener noreferrer"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>twitter</title>
                        <use xlink:href="#icon--twitter"></use>
        </svg>
    </span>
                <span class="sr-only">link opens in new tab/window</span>
            </a>
        </li>
                            <li class="mt-1 px-1 md:px-1.5">
            <a
         href="https://www.youtube.com/c/museumofthefuture"                 class="inline-flex items-center justify-center focus-ring f-ui-3 rounded-full bg-soft backdrop-blur-default text-default focus-ring-darkest hover:bg-softhover focus:bg-softhover h-12.5 w-12.5" aria-label="YouTube" target="_blank" rel="noopener noreferrer"
    >
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>youtube</title>
                        <use xlink:href="#icon--youtube"></use>
        </svg>
    </span>
                <span class="sr-only">link opens in new tab/window</span>
            </a>
        </li>
            </ul>
                    </div>
    </div>
        <hr class="w-full h-0.25 border-default mt-10 -mb-0.25" />

        <div class="md:grid md:grid-cols-2 lg:grid-cols-4 gap-innergutter mt-5 mb-10 md:mt-10 mb:mb-10">
                <div class="mb-3 md:mb-10 px-5 md:px-0 md:pl-10 md:rtl:pl-0 md:rtl:pr-10">
            <div data-behavior="accordion" data-accordion-bp="sm" class="w-full flex flex-col" >
    <div data-accordion-item class="transition-all ease-out duration-300 w-full rounded-focus">
        <button data-accordion-item-button class="appearance-none cursor-pointer md:cursor-default w-full flex flex-nowrap items-center justify-between" aria-expanded="false" type="button" id="accordion-explore" title="Accordion toggle button">
            <span class="f-body-2 text-light flex-grow text-left rtl:text-right">
                Explore
            </span>
            <span data-accordion-button-svg class="appearance-none relative z-0 block flex-shrink-0 w-4 h-4 md:hidden" >
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 z-10" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
                </span>
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 opacity-0" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--chevron-up"></use>
        </svg>
    </span>
                </span>
                <span class="focus-ring-el focus-ring-squared focus-ring-darkest"></span>
            </span>
        </button>
        <div data-accordion-item-content class="w-full sm:hidden sm:h-0 sm:mt-2 sm:mb-7 sm:transition-all sm:ease-out sm:duration-300">
            <ul aria-labelledby="accordion-explore">
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/experience.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Museum Experience
                                            </a>
                </li>
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/exhibits/children-s-world.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Children&#039;s World
                                            </a>
                </li>
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/exhibits/tomorrow-today.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Tomorrow Today
                                            </a>
                </li>
                            </ul>
        </div>
    </div>
</div>
        </div>
                        <div class="mb-3 md:mb-10 px-5 md:px-0">
            <div data-behavior="accordion" data-accordion-bp="sm" class="w-full flex flex-col" >
    <div data-accordion-item class="transition-all ease-out duration-300 w-full rounded-focus">
        <button data-accordion-item-button class="appearance-none cursor-pointer md:cursor-default w-full flex flex-nowrap items-center justify-between" aria-expanded="false" type="button" id="accordion-visit" title="Accordion toggle button">
            <span class="f-body-2 text-light flex-grow text-left rtl:text-right">
                Visit
            </span>
            <span data-accordion-button-svg class="appearance-none relative z-0 block flex-shrink-0 w-4 h-4 md:hidden" >
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 z-10" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
                </span>
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 opacity-0" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--chevron-up"></use>
        </svg>
    </span>
                </span>
                <span class="focus-ring-el focus-ring-squared focus-ring-darkest"></span>
            </span>
        </button>
        <div data-accordion-item-content class="w-full sm:hidden sm:h-0 sm:mt-2 sm:mb-7 sm:transition-all sm:ease-out sm:duration-300">
            <ul aria-labelledby="accordion-visit">
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/plan-your-visit.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Plan Your Visit
                                            </a>
                </li>
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/shop.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Shop
                                            </a>
                </li>
                            </ul>
        </div>
    </div>
</div>
        </div>
                        <div class="mb-3 md:mb-10 px-5 md:px-0 md:pl-10 md:rtl:pl-0 md:rtl:pr-10 lg:pl-0 lg:rtl:pr-0">
            <div data-behavior="accordion" data-accordion-bp="sm" class="w-full flex flex-col" >
    <div data-accordion-item class="transition-all ease-out duration-300 w-full rounded-focus">
        <button data-accordion-item-button class="appearance-none cursor-pointer md:cursor-default w-full flex flex-nowrap items-center justify-between" aria-expanded="false" type="button" id="accordion-museum-of-the-future" title="Accordion toggle button">
            <span class="f-body-2 text-light flex-grow text-left rtl:text-right">
                Museum of the Future
            </span>
            <span data-accordion-button-svg class="appearance-none relative z-0 block flex-shrink-0 w-4 h-4 md:hidden" >
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 z-10" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
                </span>
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 opacity-0" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--chevron-up"></use>
        </svg>
    </span>
                </span>
                <span class="focus-ring-el focus-ring-squared focus-ring-darkest"></span>
            </span>
        </button>
        <div data-accordion-item-content class="w-full sm:hidden sm:h-0 sm:mt-2 sm:mb-7 sm:transition-all sm:ease-out sm:duration-300">
            <ul aria-labelledby="accordion-museum-of-the-future">
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/about-us.html"  class="f-body-2 focus-ring focus-ring-squared">
                        About Us
                                            </a>
                </li>
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/the-building.html"  class="f-body-2 focus-ring focus-ring-squared">
                        The Building
                                            </a>
                </li>
                            </ul>
        </div>
    </div>
</div>
        </div>
                        <div class="mb-3 md:mb-10 px-5 md:px-0 md:pr-10 md:rtl:pr-0 md:rtl:pl-10">
            <div data-behavior="accordion" data-accordion-bp="sm" class="w-full flex flex-col" >
    <div data-accordion-item class="transition-all ease-out duration-300 w-full rounded-focus">
        <button data-accordion-item-button class="appearance-none cursor-pointer md:cursor-default w-full flex flex-nowrap items-center justify-between" aria-expanded="false" type="button" id="accordion-information" title="Accordion toggle button">
            <span class="f-body-2 text-light flex-grow text-left rtl:text-right">
                Information
            </span>
            <span data-accordion-button-svg class="appearance-none relative z-0 block flex-shrink-0 w-4 h-4 md:hidden" >
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 z-10" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
                </span>
                <span class="text-light flex items-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-opacity ease-out duration-200 opacity-0" >
                    <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--chevron-up"></use>
        </svg>
    </span>
                </span>
                <span class="focus-ring-el focus-ring-squared focus-ring-darkest"></span>
            </span>
        </button>
        <div data-accordion-item-content class="w-full sm:hidden sm:h-0 sm:mt-2 sm:mb-7 sm:transition-all sm:ease-out sm:duration-300">
            <ul aria-labelledby="accordion-information">
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/get-help.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Get Help
                                            </a>
                </li>
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/press.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Press
                                            </a>
                </li>
                                <li class="text-left mt-1 rtl:pr-0 rtl:text-right">
                    <a href="en/event-and-groups.html"  class="f-body-2 focus-ring focus-ring-squared">
                        Event &amp; Groups
                                            </a>
                </li>
                            </ul>
        </div>
    </div>
</div>
        </div>
            </div>
    <span class="inline-flex px-5 md:px-10">
    <span class="inline-flex rounded-full px-1 py-1 bg-inverse border border-default" >
                    <span
            class="f-ui-3 h-8 leading-8 w-11 text-center uppercase focus-ring focus-ring-fit focus-ring text-default bg-default rounded-full"
                    >
            EN
        </span>
                    <a
            class="f-ui-3 h-8 leading-8 w-11 text-center uppercase focus-ring focus-ring-fit focus-ring langswitch text-light"
             href="ar.html" data-barba-prevent         >
            ع
        </a>
        </span>
</span>
    
    <div class="mt-5 sm:px-5 px-10 pb-10 flex items-baseline flex-col md:flex-row">
    <span class="f-body-2 text-light order-last md:order-first mt-1 md:mt-0 ">Copyright © 2022 Museum of the Future LLC. All rights reserved.</span>
    <div class="w-full md:w-auto md:flex-grow">
                    <a class="md:ml-7 md:rtl:ml-0 md:rtl:mr-7 whitespace-nowrap no-underline f-body-2 text-light focus-ring focus-ring-squared" href="en/terms-of-use.html">
                Terms of Use
            </a>
                            <a class="ml-7 rtl:mr-7 rtl:ml-0 whitespace-nowrap no-underline f-body-2 text-light focus-ring focus-ring-squared" href="en/privacy-policy.html">
                Privacy Policy
            </a>
            </div>
</div>
</footer>
                    </div>
    </main>
    <script type="text/template" data-modal-template="modal-contact-form-opener-1">
<section role="dialog" data-modal-dialog="modal-contact-form-opener-1" class="modal fixed flex items-center justify-around w-full h-full left-0 right-0 top-0 bottom-0 z-999" tabindex="-1" aria-modal="true" aria-hidden="true" aria-labelledby="modal-contact-form-opener-1">
    <div class="bg-inverse text-default relative w-full h-full lg:h-auto lg:rounded lg:cols-6" data-modal-content>
        <button type="button" class="focus-ring appearance-none absolute right-5 md:right-8 top-5 h-10 w-10 flex items-center justify-around rtl:left-3 rtl:right-auto z-20" data-behavior="closeModal">
            <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--close"></use>
        </svg>
    </span>
        </button>
        <div class="overflow-y-scroll my-6 w-full max-h-safescreen-12" data-modal-scroll>
            <header class="px-5 md:px-8 pt-2 pb-4">
                <h4 class="f-heading-4">Contact</h4>
            </header>
            <div class=" overflow-hidden px-5 md:px-8 pt-4 pb-2">
                <form
     action="/api/en/contact-us"      method="POST"     novalidate
    data-behavior="form" class="form relative flex flex-wrap"
>
    <div class="w-full md:cols-6 md:ml-0 md:rtl:ml-gutter">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="firstName"         placeholder=" "
        id="contact-firstname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-firstname"
    >
        First Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="firstName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="firstName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 md:mt-0 md:cols-6 md:ml-gutter md:rtl:ml-0">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="lastName"         placeholder=" "
        id="contact-lastname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-lastname"
    >
        Last Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="lastName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="lastName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="email"
        value=""
         name="email"         placeholder=" "
        id="contact-email"
                                                 required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-email"
    >
        Email
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="email" class="input-notice"></span>
        <span data-form-error="email" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="phone"
        value=""
         name="phone"         placeholder=" "
        id="contact-phone"
                                                                class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-phone"
    >
        Phone
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="phone" class="input-notice"></span>
        <span data-form-error="phone" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="requestType"         placeholder=" "
        id="contact-request-type"
                                 disabled                  required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-request-type"
    >
        Enquiry
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="requestType" class="input-notice"></span>
        <span data-form-error="requestType" class="input-error"></span>
    </div>
</div>
        </div>
        
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <textarea
        id="contact-message"
        rows="7"
         name="message"                  required                 class="input block rounded pt-7.5"
            ></textarea>
    <label class="input-label top-6.25" for="contact-message">
        Message
         *     </label>
    <span class="focus-ring-el focus-ring-rounded focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-error="message" class="input-error"></span>
    </div>
</div>
        </div>
        <p data-form-success class="form-success-overlay f-heading-4" aria-live="polite"></p>
            <div class="w-full form-submit text-center">
        <button
         type="submit"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-darkest text-inverse focus-ring-darkest f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-5 mr-auto ml-auto" data-form-submit="data-form-submit"
            >
                <span class="button-label">
            Send
        </span>
                    </button>
    </div>
            <div class="w-full absolute bottom-0 pointer-events-none z-0">
        <div id="contact-recaptcha" data-size="invisible" data-badge="inline" data-callback="window.A17.CAPTCHA_SUBMIT" data-sitekey="6LfITR8cAAAAAPfLAFUf56OC4A_gh3_xylj8T5JL" class="g-recaptcha"></div>
    </div>
    </form>
            </div>
        </div>
    </div>
</section>
<div data-modal-mask data-behavior="closeModal" class="fixed w-full h-full left-0 right-0 top-0 bottom-0 cursor-pointer bg-darkest opacity-0 z-998" aria-label="Close"></div>
</script>

<script type="text/template" data-modal-template="modal-contact-form-opener-2">
<section role="dialog" data-modal-dialog="modal-contact-form-opener-2" class="modal fixed flex items-center justify-around w-full h-full left-0 right-0 top-0 bottom-0 z-999" tabindex="-1" aria-modal="true" aria-hidden="true" aria-labelledby="modal-contact-form-opener-2">
    <div class="bg-inverse text-default relative w-full h-full lg:h-auto lg:rounded lg:cols-6" data-modal-content>
        <button type="button" class="focus-ring appearance-none absolute right-5 md:right-8 top-5 h-10 w-10 flex items-center justify-around rtl:left-3 rtl:right-auto z-20" data-behavior="closeModal">
            <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--close"></use>
        </svg>
    </span>
        </button>
        <div class="overflow-y-scroll my-6 w-full max-h-safescreen-12" data-modal-scroll>
            <header class="px-5 md:px-8 pt-2 pb-4">
                <h4 class="f-heading-4">Event</h4>
            </header>
            <div class=" overflow-hidden px-5 md:px-8 pt-4 pb-2">
                <form
     action="/api/en/contact-us-event"      method="POST"     novalidate
    data-behavior="form" class="form relative flex flex-wrap"
>
    <input type="hidden" name="category" value="Events" />
        <div class="w-full md:cols-6 md:ml-0 md:rtl:ml-gutter">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="firstName"         placeholder=" "
        id="contact-2-firstname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-firstname"
    >
        First Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="firstName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="firstName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 md:mt-0 md:cols-6 md:ml-gutter md:rtl:ml-0">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="lastName"         placeholder=" "
        id="contact-2-lastname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-lastname"
    >
        Last Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="lastName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="lastName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="email"
        value=""
         name="email"         placeholder=" "
        id="contact-2-email"
                                                 required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-email"
    >
        Email
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="email" class="input-notice"></span>
        <span data-form-error="email" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="phone"
        value=""
         name="phone"         placeholder=" "
        id="contact-2-phone"
                                                                class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-phone"
    >
        Phone
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="phone" class="input-notice"></span>
        <span data-form-error="phone" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="select relative w-full" data-behavior="formField">
    <select id="contact-2-preferred-modes"
        class="rounded-full pt-5.25 pb-1.75 w-full"
         name="preferredMode"          required             >
                                                                    <option value="Email" >Email address</option>
                                    <option value="Phone" >Phone number</option>
                                        </select>
    <label
        for="contact-2-preferred-modes"
        class="top-6.5 w-full"
    >
        Preferred mode of communication
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <span class="icon absolute flex right-7 -translate-y-1/2 h-5 w-5 pointer-events-none rtl:right-auto rtl:left-7  top-6.5 ">
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
    </span>
    <div class="input-footer">
        <span data-form-error="preferredMode" class="input-error"></span>
    </div>
</div>
        </div>

        <div class="w-full mt-3" data-behavior="showHideOrg">
            <div class="select relative w-full" data-behavior="formField">
    <select id="contact-2-enquiry-type"
        class="rounded-full pt-5.25 pb-1.75 w-full"
         name="enquiryType"          required             >
                                                                    <option value="Individual" >Individual</option>
                                    <option value="Corporate" >Corporate</option>
                                        </select>
    <label
        for="contact-2-enquiry-type"
        class="top-6.5 w-full"
    >
        Enquiry type
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <span class="icon absolute flex right-7 -translate-y-1/2 h-5 w-5 pointer-events-none rtl:right-auto rtl:left-7  top-6.5 ">
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
    </span>
    <div class="input-footer">
        <span data-form-error="enquiryType" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 hidden">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="organization"         placeholder=" "
        id="contact-2-organization"
         maxlength="50"                                                         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-organization"
    >
        Organization
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="organization" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="organization" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField formFieldNumber">
    <input
        type="number"
        value=""
         name="numberOfGuets"         placeholder=" "
        id="contact-2-number-of-guests"
                 max="1000"          min="0"                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-number-of-guests"
    >
        Number of Guests
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="numberOfGuets" class="input-notice"></span>
        <span data-form-error="numberOfGuets" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 md:cols-6 md:ml-0 md:rtl:ml-gutter">
            <div class="relative input-field w-full" data-formfielddate-updatestart="contact-2-reservation-end-date-time" data-behavior="formField formFieldDate">
    <input
        type="datetime-local"
        value=""
         name="reservationStartDateTime"         placeholder=" "
        id="contact-2-reservation-start-date-time"
                                                 required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-reservation-start-date-time"
    >
        Reservation start date time
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="reservationStartDateTime" class="input-notice"></span>
        <span data-form-error="reservationStartDateTime" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 md:cols-6 md:ml-gutter md:rtl:ml-0">
            <div class="relative input-field w-full" data-behavior="formField formFieldDate">
    <input
        type="datetime-local"
        value=""
         name="reservationEndDateTime"         placeholder=" "
        id="contact-2-reservation-end-date-time"
                                                 required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-2-reservation-end-date-time"
    >
        Reservation end date time
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="reservationEndDateTime" class="input-notice"></span>
        <span data-form-error="reservationEndDateTime" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <textarea
        id="contact-2-message"
        rows="7"
         name="message"                  required                 class="input block rounded pt-7.5"
            ></textarea>
    <label class="input-label top-6.25" for="contact-2-message">
        Message
         *     </label>
    <span class="focus-ring-el focus-ring-rounded focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-error="message" class="input-error"></span>
    </div>
</div>
        </div>
        <p data-form-success class="form-success-overlay f-heading-4" aria-live="polite"></p>
            <div class="w-full form-submit text-center">
        <button
         type="submit"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-darkest text-inverse focus-ring-darkest f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-5 mx-auto" data-form-submit="data-form-submit"
            >
                <span class="button-label">
            Send
        </span>
                    </button>
    </div>
            <div class="w-full absolute bottom-0 pointer-events-none z-0">
        <div id="event-form-recaptcha" data-size="invisible" data-badge="inline" data-callback="window.A17.CAPTCHA_SUBMIT" data-sitekey="6LfITR8cAAAAAPfLAFUf56OC4A_gh3_xylj8T5JL" class="g-recaptcha"></div>
    </div>
    </form>
            </div>
        </div>
    </div>
</section>
<div data-modal-mask data-behavior="closeModal" class="fixed w-full h-full left-0 right-0 top-0 bottom-0 cursor-pointer bg-darkest opacity-0 z-998" aria-label="Close"></div>
</script>

<script type="text/template" data-modal-template="modal-contact-form-opener-3">
<section role="dialog" data-modal-dialog="modal-contact-form-opener-3" class="modal fixed flex items-center justify-around w-full h-full left-0 right-0 top-0 bottom-0 z-999" tabindex="-1" aria-modal="true" aria-hidden="true" aria-labelledby="modal-contact-form-opener-3">
    <div class="bg-inverse text-default relative w-full h-full lg:h-auto lg:rounded lg:cols-6" data-modal-content>
        <button type="button" class="focus-ring appearance-none absolute right-5 md:right-8 top-5 h-10 w-10 flex items-center justify-around rtl:left-3 rtl:right-auto z-20" data-behavior="closeModal">
            <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--close"></use>
        </svg>
    </span>
        </button>
        <div class="overflow-y-scroll my-6 w-full max-h-safescreen-12" data-modal-scroll>
            <header class="px-5 md:px-8 pt-2 pb-4">
                <h4 class="f-heading-4">Founders Pass</h4>
            </header>
            <div class=" overflow-hidden px-5 md:px-8 pt-4 pb-2">
                <form
     action="/api/en/contact-us"      method="POST"     novalidate
    data-behavior="form" class="form relative flex flex-wrap"
>
    <input type="hidden" name="category" value="Membership" />
        <input type="hidden" name="enquiryType" value="Individual" />
        <div class="w-full md:cols-6 md:ml-0 md:rtl:ml-gutter">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="firstName"         placeholder=" "
        id="contact-firstname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-firstname"
    >
        First Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="firstName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="firstName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 md:mt-0 md:cols-6 md:ml-gutter md:rtl:ml-0">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="lastName"         placeholder=" "
        id="contact-lastname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-lastname"
    >
        Last Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="lastName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="lastName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="email"
        value=""
         name="email"         placeholder=" "
        id="contact-email"
                                                 required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-email"
    >
        Email
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="email" class="input-notice"></span>
        <span data-form-error="email" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="phone"
        value=""
         name="phone"         placeholder=" "
        id="contact-phone"
                                                                class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-phone"
    >
        Phone
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="phone" class="input-notice"></span>
        <span data-form-error="phone" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="select relative w-full" data-behavior="formField">
    <select id="contact-preferred-modes"
        class="rounded-full pt-5.25 pb-1.75 w-full"
         name="preferredMode"          required             >
                                                                    <option value="Email" >Email address</option>
                                    <option value="Phone" >Phone number</option>
                                        </select>
    <label
        for="contact-preferred-modes"
        class="top-6.5 w-full"
    >
        Preferred mode of communication
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <span class="icon absolute flex right-7 -translate-y-1/2 h-5 w-5 pointer-events-none rtl:right-auto rtl:left-7  top-6.5 ">
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
    </span>
    <div class="input-footer">
        <span data-form-error="preferredMode" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 hidden">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="organization"         placeholder=" "
        id="contact-organization"
         maxlength="50"                                                         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-organization"
    >
        Organization
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="organization" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="organization" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <textarea
        id="contact-message"
        rows="7"
         name="message"                  required                 class="input block rounded pt-7.5"
            ></textarea>
    <label class="input-label top-6.25" for="contact-message">
        Message
         *     </label>
    <span class="focus-ring-el focus-ring-rounded focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-error="message" class="input-error"></span>
    </div>
</div>
        </div>
        <p data-form-success class="form-success-overlay f-heading-4" aria-live="polite"></p>
            <div class="w-full form-submit text-center">
        <button
         type="submit"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-darkest text-inverse focus-ring-darkest f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-5 mr-auto ml-auto" data-form-submit="data-form-submit"
            >
                <span class="button-label">
            Send
        </span>
                    </button>
    </div>
            <div class="w-full absolute bottom-0 pointer-events-none z-0">
        <div id="contact-recaptcha" data-size="invisible" data-badge="inline" data-callback="window.A17.CAPTCHA_SUBMIT" data-sitekey="6LfITR8cAAAAAPfLAFUf56OC4A_gh3_xylj8T5JL" class="g-recaptcha"></div>
    </div>
    </form>
            </div>
        </div>
    </div>
</section>
<div data-modal-mask data-behavior="closeModal" class="fixed w-full h-full left-0 right-0 top-0 bottom-0 cursor-pointer bg-darkest opacity-0 z-998" aria-label="Close"></div>
</script>

<script type="text/template" data-modal-template="modal-contact-form-opener-4">
<section role="dialog" data-modal-dialog="modal-contact-form-opener-4" class="modal fixed flex items-center justify-around w-full h-full left-0 right-0 top-0 bottom-0 z-999" tabindex="-1" aria-modal="true" aria-hidden="true" aria-labelledby="modal-contact-form-opener-4">
    <div class="bg-inverse text-default relative w-full h-full lg:h-auto lg:rounded lg:cols-6" data-modal-content>
        <button type="button" class="focus-ring appearance-none absolute right-5 md:right-8 top-5 h-10 w-10 flex items-center justify-around rtl:left-3 rtl:right-auto z-20" data-behavior="closeModal">
            <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Close</title>
                        <use xlink:href="#icon--close"></use>
        </svg>
    </span>
        </button>
        <div class="overflow-y-scroll my-6 w-full max-h-safescreen-12" data-modal-scroll>
            <header class="px-5 md:px-8 pt-2 pb-4">
                <h4 class="f-heading-4">Feedback</h4>
            </header>
            <div class=" overflow-hidden px-5 md:px-8 pt-4 pb-2">
                <form
     action="/api/en/feedback"      method="POST"     novalidate
    data-behavior="form" class="form relative flex flex-wrap"
>
    <div class="w-full md:cols-6 md:ml-0 md:rtl:ml-gutter">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="firstName"         placeholder=" "
        id="contact-firstname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-firstname"
    >
        First Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="firstName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="firstName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3 md:mt-0 md:cols-6 md:ml-gutter md:rtl:ml-0">
            <div class="relative input-field s-notice w-full" data-behavior="formField">
    <input
        type="text"
        value=""
         name="lastName"         placeholder=" "
        id="contact-lastname"
         maxlength="50"                                          required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-lastname"
    >
        Last Name
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="lastName" class="input-notice">Only latin characters are allowed in this field.</span>
        <span data-form-error="lastName" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="email"
        value=""
         name="email"         placeholder=" "
        id="contact-email"
                                                 required          aria-required="true"         class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-email"
    >
        Email
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="email" class="input-notice"></span>
        <span data-form-error="email" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <input
        type="phone"
        value=""
         name="phone"         placeholder=" "
        id="contact-phone"
                                                                class="input pt-5.25 pb-1.75 rounded-full"/>
    <label
        class="input-label top-6.5"
        for="contact-phone"
    >
        Phone
            </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-notice="phone" class="input-notice"></span>
        <span data-form-error="phone" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="select relative w-full" data-behavior="formField">
    <select id="contact-request-type"
        class="rounded-full pt-5.25 pb-1.75 w-full"
         name="requestType"          required             >
                                                                    <option value="Compliment" >Compliment</option>
                                    <option value="Suggestion" >Suggestion</option>
                                    <option value="Complaint" >Complaint</option>
                                        </select>
    <label
        for="contact-request-type"
        class="top-6.5 w-full"
    >
        Request type
         *     </label>
    <span class="focus-ring-el focus-ring-darkest"></span>
    <span class="icon absolute flex right-7 -translate-y-1/2 h-5 w-5 pointer-events-none rtl:right-auto rtl:left-7  top-6.5 ">
        <span class="inline-flex h-5 w-5">
        <svg  focusable="false" aria-hidden="true"              height="20"              width="20" >
                            <title>Open</title>
                        <use xlink:href="#icon--chevron-down"></use>
        </svg>
    </span>
    </span>
    <div class="input-footer">
        <span data-form-error="requestType" class="input-error"></span>
    </div>
</div>
        </div>
        <div class="w-full mt-3">
            <div class="relative input-field w-full" data-behavior="formField">
    <textarea
        id="contact-message"
        rows="7"
         name="message"                  required                 class="input block rounded pt-7.5"
            ></textarea>
    <label class="input-label top-6.25" for="contact-message">
        Message
         *     </label>
    <span class="focus-ring-el focus-ring-rounded focus-ring-darkest"></span>
    <div class="input-footer">
        <span data-form-error="message" class="input-error"></span>
    </div>
</div>
        </div>
        <p data-form-success class="form-success-overlay f-heading-4" aria-live="polite"></p>
            <div class="w-full form-submit text-center">
        <button
         type="submit"                         class="inline-flex focus-ring rounded-full whitespace-nowrap bg-darkest text-inverse focus-ring-darkest f-ui-3 pt-3.5 pb-4 px-7 disabled:cursor-default disabled:text-light disabled:bg-default disabled:hover:bg-default disabled:focus:bg-default  mt-5 mr-auto ml-auto" data-form-submit="data-form-submit"
            >
                <span class="button-label">
            Send
        </span>
                    </button>
    </div>
            <div class="w-full absolute bottom-0 pointer-events-none z-0">
        <div id="contact-recaptcha" data-size="invisible" data-badge="inline" data-callback="window.A17.CAPTCHA_SUBMIT" data-sitekey="6LfITR8cAAAAAPfLAFUf56OC4A_gh3_xylj8T5JL" class="g-recaptcha"></div>
    </div>
    </form>
            </div>
        </div>
    </div>
</section>
<div data-modal-mask data-behavior="closeModal" class="fixed w-full h-full left-0 right-0 top-0 bottom-0 cursor-pointer bg-darkest opacity-0 z-998" aria-label="Close"></div>
</script>
        <script>window.A17 = window.A17 || {};</script>
<script>
// Leave APP_URL empty if you want to fetch using absolute path
window.A17.APP_URL = '';
window.A17.LOGGEDIN = false;
window.A17.BARBAJS = window.A17.BARBAJS || {};
window.A17.BARBAJS.active = true;
// Exclude routes that are landing to VueJS Apps to simplify the lifecycles, loading of additionnal scripts
window.A17.BARBAJS.ignore = [
    '/en/book',
    'https://museumofthefuture.ae/en/auth/login',
    '/en/auth/login',
    'https://museumofthefuture.ae/en/auth/logout',
    '/en/auth/logout',
    'https://museumofthefuture.ae/en/account/profile',
    '/en/account/profile',
    'https://museumofthefuture.ae/en/offers',
    '/en/offers',
];
</script>
<script src="assets/js/app.0537f9.js" type="module"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=explicit&amp;onload=captchaCallback&amp;hl=en" async defer></script>
<script>
    window.A17.CAPTCHA_LOADED = false
    window.A17.CAPTCHA_RENDERED = {}
    var captchaCallback = function() {
        window.A17.CAPTCHA_LOADED = true
        document.dispatchEvent(new CustomEvent('captcha:loaded'))
    }
    window.A17.CAPTCHA_SUBMIT = function(token) {
        const f = document.querySelector('form.s-captcha')
        if(f) f.dispatchEvent(new CustomEvent('captcha:submitted'))
    }
</script>
                        <script>
                if (window.localStorage.getItem('programs') !== null) {
                    window.localStorage.removeItem('programs');
                }
            </script>
                    <script>
    window.A17.feature = {
        preview: false,
        full_experience: true,
        shop: true,
        ticketing: true,
        memberships: false,
        facebook_login: false,
        google_pay: false,
        apple_pay: false,
        amex: false,
        non_latin_characters: true, /// I'm adding this one
        marketing_optin: true,
        block_pending: true,
        checkoutCom: true,
        ni: false,
        soketinotification: false,
        fw_chatbot: false
    }
</script>
    
    <script type="text/javascript">
{}
</script>
    </body>

</html>
