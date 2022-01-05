<?php include 'header.php'; ?>

<div class="container" id="AboutContainter">
    <div class="contantArea">
        <ul class="cmSubList div-table" id="skillList">
            <li v-for="ina in list" :key="ina.num" class="tc w_16">
                {{ina.type}}                          
            </li>  
        </ul>
    </div>
</div>
<?php include 'footer.php'; ?>
