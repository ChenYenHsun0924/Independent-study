<?php

# 因為你使用 method="post" 發送，接收也要使用 $_POST 來接收

if(@$_POST['reg']){ # 如果有收到 login 這個項目
    if(isset($_POST['username']) && isset($_POST['password'])){ # 如果 username、password 存在
        if($_POST['username'] == '123' && $_POST['password'] == '456'){ # 如果 username、password 正確
            $msg = '歡迎你 123'; # 指定訊息
        }else{
            $msg = '帳號或密碼錯誤'; # 指定訊息
        }
    }else{
        $msg = '無帳號密碼，請確認都有填入'; # 指定訊息
    }
}

echo '

<div class="max-width align-self-center flex flex-direction-column">
    
    <h1 class="font size-32">註冊</h1>

    <h1>'.@$msg.'</h1>
    
    <!-- method="post" 代表使用 post 方式傳送 -->
    <form class="" action="" method="post" style="display:flex;flex-direction: column">
        <input type="text" name="username" placeholder="帳號" style="margin-bottom: 5px">
        <input type="password" name="password" placeholder="密碼" style="margin-bottom: 5px">
        <input type="submit" name="reg" value="註冊">
    </form>

</div>




';