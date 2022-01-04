<?php include 'header.php'; ?>

<div class="container" id="mainContainer">
    <div class="contantArea">
        <ul class="cmList pull-over" id="myList">
            <li v-for="post in list" :key="post.num" class="fl">
                <div class="div-table">
                    <div>
                        <b class="listNum">{{ post.el }}</b>
                        <h1 class="titleTxt_h1">{{ post.title }}</h1>
                        <p class="sub_txt">{{ post.info }}</p>
                    </div>
                    <div class="btnArea w_40 tr">
                        <a href="#" class="btn btn-m viewBtn">View</a>
                        <a href="#" class="btn btn-m viewBtn">explain</a>
                    </div>                        
                </div>
                <div class="imgArea"><img :src="post.thum" :alt="post.title"/></div>            
            </li>  
        </ul>
    </div>
</div>
<script src="js/index.js"></script>
<?php include 'footer.php'; ?>
