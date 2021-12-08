<?php include 'header.php'; ?>

<div class="container" id="mainContainer">
    <div class="contantArea">
        <ul class="cmList pull-over" id="myList">
            <li v-for="post in list | reverse" :key="post.id" class="fl">
             <b class="listNum">{{ post.el }}</b>
             <h1 class="titleTxt_h1">{{ post.title }}</h1>
             <p class="sub_txt">{{ post.info }}</p>
             <img :src="post.thum" :alt="post.title"/>
             <a href="#" class="btn btn-m viewBtn">View</a>
            </li>  
        </ul>
    </div>
</div>
<script src="js/index.js"></script>
<?php include 'footer.php'; ?>





