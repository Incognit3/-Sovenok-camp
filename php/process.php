<?php 
        $db = mysql_connect('localhost', 'root', '') or die ('error');
        mysql_select_db('mytest') or die('error');
          if(isset($_POST['submit'])){
            if(empty($_POST['name'])){}
            if(empty($_POST['email'])){}
            if(empty($_POST['mess'])){}
            if(empty($_POST['phone'])){}

              else{
              
               mysql_query("INSERT INTO `test` (`name`, `email`, `mess`, `phone`) VALUES ('".htmlspecialchars($_POST['name'])."', '".htmlspecialchars($_POST['email'])."', '".htmlspecialchars($_POST['mess'])."', '".htmlspecialchars($_POST['phone'])."');");
                mysql_query('location :' .$_SERVER['PHP_SELF']);
              }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
          }
          mysql_close($db);
         ?>