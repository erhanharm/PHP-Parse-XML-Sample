<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
<title>Tusul Api-Denemesi</title>
</head>
<body>
<?
$Veri = array();
$kaynak = file_get_contents("http://api.tusul.com/haber?kategori=Teknoloji");
$temp = split("<haber>",$kaynak);
for ($i=1;$i<=count($temp);$i++){
    if(trim($temp[$i])==''){
	continue;
	}
    preg_match('/<baslik>(.*)<\/baslik>/i', $temp[$i], $title);
    preg_match('/<aciklama>(.*)<\/aciklama>/i', $temp[$i], $link);
    echo "<b>".$title[1]."</b>";
    echo "<br>" ;
    echo $link[1];
    echo "<br>" ;  echo "<br>" ;
}
?> 
</body>
</html>
