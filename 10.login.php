<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
#設定一個變數login=FALSE，迴圈n. 搜尋使用者，從 HTML 查詢帳號和密碼，有就把 $login 改成 TRUE
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
#如果true執行 session_start() 並把帳號存進 $_SESSION["id"] 中。
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }
#如果false執行帳號/密碼 錯誤並跳回網頁
  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
