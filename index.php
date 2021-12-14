<?php include 'header.php'; ?>

<div class="container" id="mainContainer">
    <div class="contantArea">
        <ul class="cmList pull-over" id="myList">
            <li v-for="post in list" :key="post.num" class="fl">
             <b class="listNum">{{ post.el }}</b>
             <h1 class="titleTxt_h1">{{ post.title }}</h1>
             <p class="sub_txt">{{ post.info }}</p>
             <div class="imgArea"><img :src="post.thum" :alt="post.title"/></div>
             <div class="btnArea">
                 <a href="#" class="btn btn-m viewBtn">View</a>
                 <a href="#" class="btn btn-m viewBtn">Detail</a>
            </div>
            </li>  
        </ul>
    </div>
</div>
<script src="js/index.js"></script>
<?php include 'footer.php'; ?>





