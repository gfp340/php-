<?php
#先讀取session的狀態，而後會將id憑證刪除並顯示登出，而後跳回網頁
    session_start();
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";

?>
