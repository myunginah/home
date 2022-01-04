
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello_ina</title>
        
        <!--style-->
        <link rel="stylesheet" href="css/font.css" type="text/css"/>
        <link rel="stylesheet" href="css/common.css" type="text/css"/>
        <link rel="stylesheet" href="css/index.css" type="text/css"/>

        <!--script-->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>

    <?php
       $basename=basename($_SERVER["PHP_SELF"]);
       $pagename = explode("." , $basename);
       $nowpage = $pagename[0];//현재파일명 (확장자x) 
       $pagetype  = '';
        if($nowpage == 'about'){
            $pagetype = 'about';
        }else{
            $pagetype = 'work';
        }	
    ?>

    <section class="mainContainer">
        <div class="header">
            <div class="topArea">
                <!-- <div class="logoArea"><a href="">home</a></div> -->
                <ul class="cmMainMenu pull-over">
                    <li><a href="/home/about.php" class="<?php if($pagetype == 'about'){echo 'selected';}?>">about</a></li>
                    <li><a href="/home/index.php" class="<?php if($pagetype == 'work'){echo 'selected';}?>">work</a></li>
                </ul>
            </div>
        </div>
            