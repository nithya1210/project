<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("button").click(function(){
    var div = $("div");  
    div.animate({left: '100px'}, "slow");
    div.animate({fontSize: '3em'}, "slow");
  });
});

$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(2000).slideDown(2000);
  });
});
</script>
<style> 
#panel, #flip {
  padding: 10px;
  text-align: center;
  background-color: #ccccff;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
}
</style>
</head>
<body>
 
<div id="flip">Click to slide up panel</div>
<div id="panel">Hello world!</div>

<h1>Animation</h1>
<button>Start Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:160px;width:160px;position:absolute;">hlooooo</div>



<p id="p1">jQuery is fun!!</p>

<button>Click me</button>

</body>
</html>
