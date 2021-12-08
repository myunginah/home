<?php include 'header.php'; ?>

<div class="container" id="mainContainer">
    <div class="contantArea">
        <ul class="cmList pull-over" id="myList">
            <li v-for="post in list" :key="post.id" class="fl">
             <b>{{ post.el }}</b>
             <h1>{{ post.title }}</h1>
             <p>{{ post.info }}</p>
             <img :src="post.thum"/>
            </li>  
        </ul>
    </div>
</div>
<script src="js/index.js"></script>
<?php include 'footer.php'; ?>]\





