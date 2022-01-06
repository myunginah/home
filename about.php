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
<script>
  /*work list*/
  var skill = new Vue({
    el: '#skillList',
    data: {
     list: [  
        {
            num:1,
            type:'html',
            level:'5',
            graph:'97',
        },
        {
            num:2,
            type:'css/scss',
            level:'5',
            graph:'97',
        },
        {
            num:3,
            type:'javascript/jQuery',
            level:'5',
            graph:'97',
        },
        {
            num:4,
            type:'vue.js',
            level:'5',
            graph:'97',
        },
        {
            num:5,
            type:'php',
            level:'5',
            graph:'97',
        },
        {
            num:6,
            type:'DB',
            level:'5',
            graph:'97',
        }

     ]
    }
  })
  /* //work list*/
</script>

<?php include 'footer.php'; ?>
