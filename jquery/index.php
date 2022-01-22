<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="my_jquery_functions.js"></script>
<script>
$(document).ready(function(){
  $("p.intro").click(function(){
    $(this).hide();
  });
});
$(document).ready(function(){
  $("#first").click(function(){
    $(this).hide();
  });
});
$(document).ready(function(){
  $("button").dblclick(function(){
    $("p").hide();
  });
});
$(document).ready(function(){
  $("#p1").mouseenter(function(){
    alert("hide all ");
     $("p").hide(1000);
     $("#show").toggle();
  });
});
$(document).ready(function(){
  $("#p2").mouseleave(function(){
    alert("Bye! You now leave p1!");
  });
});
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});

</script>
</head>
<body>

<p class="intro">If you click on me, I will disappear.</p>
<p id="first">Click me away!</p>
<p>Click me too!</p>
<p id="p1">Enter this paragraph.</p>
<p id="p2">This is a paragraph.</p>
<button id="show">Click me to hide paragraphs</button>

</body>
</html>
