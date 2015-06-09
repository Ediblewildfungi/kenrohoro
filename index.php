<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css" />
	<title>kenrenhoro</title>

<!-- 以下内容为jq动画 -->
<script> 
// $(document).ready(function(){
  // $("button").click(function(){
    // var button=$("button");
    // var div=$("#apple");
    // button.animate({opacity:'0'},"slow");
    // button.animate({opacity:'1'},"fast");
    // div.animate({left:'250px'},"slow");
  // });
// });
$(document).ready(function(){
  $("button").click(function(){
    var button=$("button");
    button.animate({opacity:'0'},"slow");
    button.animate({opacity:'1'},"fast");
  });
});
$(document).ready(function(){
  $("button").click(function(){
    var div=$("#apple");
    div.animate({left:'80%',opacity:'1'},"fast");
    div.animate({top:'70%',opacity:'0'},"slow");
    $("#box").fadeIn(500).delay(2000).fadeOut(500);
    setTimeout(function(){window.location.reload();},1000);
  });
});


</script> 

</head>
<body>
<h1 class="h"><ruby>賢狼ホロ <rt style="padding: 7px 0px 7px 10px">けんろう　　　　　</rt> </ruby></h1>
<div class="left kuang">
<div id="apple" class="apple kuang"><img src="./img/apple.png"></div>
<div class="horo-none"><br><br><br>点击右侧“feed”即可向赫萝投食。<br>手机用户横屏投食效果更佳
<?php
/*使用文本文件记录数据的简单实现*/
$counter=1;
if(file_exists("mycounter.txt")){
$fp=fopen("mycounter.txt","r");
$counter=fgets($fp,9);
$counter++;
fclose($fp);
}
$fp=fopen("mycounter.txt","w");
fputs($fp,$counter);
fclose($fp);
echo "<h1>大家已经向赫萝投食了".$counter."次<h1>";
?>
 </div>
<div class="horoimg"><img style="width: 100%;" src="./img/horo.gif"></div>
 <span id="countspan"></span>


</div>
<div class="right kuang">
<button>feed!</button>

</div>
<!-- footer -->
<div class="footer kuang"><span class="footertext">Power by <a href="http://www.kenrohoro.moe">Kenrohoro</a> and <a href="http://kamisama.moe">Kamisama.moe</a> . </span></div>
</body>

