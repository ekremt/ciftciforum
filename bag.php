
<?php
error_reporting(E_ERROR |  E_PARSE );  
$bag=@mysql_connect("localhost","root","");
if($bag)
{
	mysql_select_db("cfproject",$bag);
	mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("SET COLLATİON_CONNECTİON = 'utf8_turkish_ci'");
    
}
else
{
echo "Bağlantı Hatası";	
}


?>
