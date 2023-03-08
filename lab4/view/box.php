<button id="btn_add">+ADD</button>
<div id="div_res"></div>
<divid id="div_action"></divid>

<script>
    $("#div_action").load("/model/user_data.php")
    $("#btn_add").click(function (){
        $("#div_action").load("/view/user_data.php")

    });


</script>