<？php
    error_reporting（0）;  <!--不輸出任何錯誤-->
    
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    如果（mysqli_connect_error（$ conn）） <!--傳回連結資料庫的錯誤碼。如果沒有錯誤發生則返回 0。-->
        die（“資料庫連線錯誤”）;

    mysqli_set_charset（$ conn，“ utf8”）; <!--設置字符集-->
    $ result = mysqli_query（ $ conn， “從用戶選擇*”）;
    while（$ row = mysqli_fetch_array（$ result））{
        echo  $ row [id];
        迴聲 “ ;
        echo  $ row [pwd];
        迴聲 “ <br>”；
    }
？>
