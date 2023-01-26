<?php

switch (@$_GET['page']) {
    case 'login':
        $page_url = "pages/login";
        break;
    case 'register':
        $page_url = "pages/register";
        break;
    default:
    case 'home':
        $page_url = "pages/home";
        break;
}

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="main.css">
</head>

<body class="flex flex-direction-column">

<div class="width-control flex flex-direction-column" >

    <div style="background-color: white;box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%), 0 3px 1px -2px rgb(0 0 0 / 20%);" class="padding full-16">
        <div class="flex flex-direction-row justify-content-space-between">
            <div class="">
                <img src="assets/water.jpg" style="width: 25px">
            </div>
            <div class="flex flex-direction-row align-self-center">
                <a href="?page=home" class="padding right-16">首頁</a>
                <a href="?page=login" class="padding right-16">登入</a>
                <a href="?page=register">註冊</a>
            </div>
        </div>
    </div>
';


include_once $page_url.".php";

echo '
    </div>

</body>
</html>
';