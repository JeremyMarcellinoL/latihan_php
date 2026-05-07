<!DOCTYPE html>
<html>
<body>

<h2>The String Function</h2>

<?php
$x = "<br/>";
echo strlen("Hello world!");
echo $x;
echo str_word_count("Hello world! <br/>");
echo $x;
$txt = "I really love PHP! <br/>";
var_dump(str_contains($txt, "love"));
echo $x;
$txt = "I really love PHP! <br/>";
var_dump(str_contains($txt, "Love"));
?> 
 
</body>
</html>
