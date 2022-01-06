<?php include 'header.php'; ?>
<!-- worklist array -->
<?php
    
?>
<!-- //worklist array -->
<div class="container" id="mainContainer">
    <div class="contantArea">
        <ul class="cmList pull-over" id="myList">
            <li v-for="post in list" :key="post.num" class="fl">
                <div class="div-table">
                    <div>
                        <b class="listNum"></b>
                        <h1 class="titleTxt_h1"></h1>
                        <p class="sub_txt"></p>
                    </div>
                    <div class="btnArea w_40 tr">
                        <a href="#" class="btn btn-m viewBtn">View</a>
                        <a href="#" class="btn btn-m viewBtn">explain</a>
                    </div>                        
                </div>
                <div class="imgArea"><img src=""/></div>            
            </li>  
        </ul>
    </div>
</div>
<?php include 'footer.php'; ?>