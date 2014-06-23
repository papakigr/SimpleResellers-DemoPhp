<!-- Warning this page Charset must be UTF-8-->
<!-- Demo Php version 6.0 using apikey-->
<?php
	ini_set("max_execution_time", 120);
	 error_reporting(0);

	require("config.php");
	require("usablewebLib.php");
	require_once('papaki.php');
	
	$search = new PapakiDomainNameSearch($_REQUEST["domainName"]);	 
	$search->apikey = $Papaki_apikey;
	$search->requestURL = $papaki_Post_url;
	$search->exec_request_for(_TYPE_DS);

	//if(!($search->$responseXML ))
	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Papaki.gr Domain Search Reply - Demostraction</title>
<style>
TH {
	FONT-SIZE: 13px; FONT-FAMILY: verdana, arial, helvetica, sans-serif
}
</style>
</head>
<body>

<table width="250px"  border="0" cellspacing="0" cellpadding="0">



			
	<?php
	if (count($search->arrayAvDomains) != 0)
	{
		?>
			<tr>
   				 <th bgcolor="#CCCCCC">Available Domain Names</th>
 		 	</tr>
		<?php		
	}
	
	for($i=0;$i < count($search->arrayAvDomains);$i++)
	{ 	 ?>
  			<tr>
   				 <td style="padding-left:16px"><li><?PHP echo $search->arrayAvDomains[$i]; ?></li></td>
  			</tr>
 		 <?php  
  	}
  
 
	if( count($search->arrayNotAvDomains) !=0) 
  	{    ?>
  			<tr>
    			<th bgcolor="#CCCCCC">Not Available Domain Names</th>
  			</tr>
		<?php
	}
	
  	for ($i=0;$i < count($search->arrayNotAvDomains);$i++)
	{ 
	?>
  			<tr>
    			<td style="padding-left:16px"><li><?PHP echo $search->arrayNotAvDomains[$i];?></li></td>
  			</tr>
  		<?php  
	}
	?>
</table>
</body>
</html>
