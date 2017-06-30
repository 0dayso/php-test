<?php
	//验证错误
	Error_reporting(E_ALL);
	INI_Set('display_errors','on');

	$file = fopen("db.txt","r") or exit("无法打开文件");
	//连接数据库
	$con = mysqli_connect('localhost','root','haitao');
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error($con));
	}
	// 选择数据库
	mysqli_select_db($con,"lyb");
	// 设置编码，防止中文乱码
	mysqli_set_charset($con, "utf8");
/*	while(!feof($file))
	{
		$line = fgets($file);
		$time =  strstr($line,"时间:");
		$length =  strlen("时间:");
		$gettime =  substr($time,$length);
		echo  substr($time,$length);

		if($gettime != null)
		{		
			$sql = "insert into mynet(time) values(\"$gettime\");";
			if (mysqli_query($con,$sql))
			{
				echo "新记录插入成功";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}
 
	}
    fclose($file);
	$file = fopen("db.txt","r") or exit("无法打开文件");
	while(!feof($file))
	{
		$line = fgets($file);
		$name = strstr($line,"网站名称:");
		$length = strlen("网站名称:");
		$getname =  substr($name, $length);
		echo  substr($name, $length);

		if($getname != null)
		{		
			$sql = "insert into mynet(time) values(\"$getname\");";
			if (mysqli_query($con,$sql))
			{
				echo "新记录插入成功";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}
	}

    fclose($file);
	$file = fopen("db.txt","r") or exit("无法打开文件");
 */
	while(!feof($file))
	{
		$line = fgets($file);
		$adress = strstr($line,"网站地址:");
		$length = strlen("网站地址:");
		$getadress = substr($adress,$length);
		echo substr($adress,$length);
/*		if($getadress != null)
		{		
			$sql = "insert into mynet(time) values(\"$getadress\");";
			if (mysqli_query($con,$sql))
			{
				echo "新记录插入成功";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}
*/
	}
	
    fclose($file);
?>
