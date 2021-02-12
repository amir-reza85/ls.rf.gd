
<?php 
$link = $_GET['link']; 
$body = $_COOKIE['body']; 
echo $link;
echo $body;
$myfile = fopen($link, "w") or die("Unable to open file!");
$txt = '<script> window.location.replace("';
fwrite($myfile, $txt);
fclose($myfile);
$fp = fopen($link, 'a'); 
fwrite($fp, $body);  
fwrite($fp, '") </script>');  
fclose($fp);  
$a = 'Location: /?';
$a .= $link;
header($a)
?> 
