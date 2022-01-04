
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>꺄항</title>
        
        <!--style-->
        <link rel="stylesheet" href="css/font.css" type="text/css"/>
        <link rel="stylesheet" href="css/common.css" type="text/css"/>
        <link rel="stylesheet" href="css/index.css" type="text/css"/>

        <!--script-->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
    <?php
        $query_string=getenv("QUERY_STRING");  //GET값 가져오기
        $pagename = explode("&" , $query_string);  //'&'를 기준으로 배열생성
        $array_cnt = count($pagename); //배열 카운트
        if($pagename == 'about'){
            $play_type = 'about';
        }else{
            $play_type = 'work';
        }	
    ?>
    <section class="mainContainer">
        <div class="header">
            <div class="topArea">
                <!-- <div class="logoArea"><a href="">home</a></div> -->
                <ul class="cmMainMenu pull-over">
                    <li><a href="" class="<?php if($play_type == 'about'){echo 'selected';}?>">about</a></li>
                    <li><a href="" class="<?php if($play_type == 'work'){echo 'selected';}?>">work</a></li>
                </ul>
            </div>
        </div>
            