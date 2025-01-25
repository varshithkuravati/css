<?php

echo "hello world";

?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div style="position: fixed;bottom:0;left:40%;">

<input type="text" id="num" >

</div>
<p id="p"></p>
<a href="javascript:void(0)" onclick="c()">click here</a>




<script>


function c(){
    var num=jQuery('#num').val();
jQuery.ajax({
  

    url:'get.php',
    type: 'post',
    data: 'num='+num,
    success: function(result){
document.getElementById("p").innerHTML=result;

    } 
});


}
setInterval(()=>{c();},1000);

    </script>

