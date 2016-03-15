<!DOCTYPE html>
<html>
<head>
	<title>作业系统后台</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<?php 
		session_start();
		if(isset($_POST['login'])){
			$fp=file("admin.txt");
			foreach ($fp as $key => $value) {
				$value=iconv("gb2312","utf-8",$value);
    			$value=str_replace(PHP_EOL,'',$value);
				if($value==$_POST['pwd']){
					$_SESSION['admin']=$_POST['pwd'];
				}
			}
		}

		if(!isset($_SESSION['admin'])){
			?>	
				<form action="" method="post">
					<input type="password" name="pwd"/>
					<input type="submit" name="login" value="登陆">
				</form>
			<?php
			exit;
		}

		if(isset($_POST['ChangeNotice'])){
			$fp=fopen("notice.txt", "w");
			$notice=iconv("utf-8","gb2312",$_POST['Notice']);
			fwrite($fp, $notice);
			fclose($fp);
			echo "<script>alert('修改成功')</script>";
		}
		if(isset($_POST['ChangeSubject'])){
			$fp=fopen("subject.txt", "w");
			$subject=iconv("utf-8","gb2312",$_POST['Subject']);
			fwrite($fp, $subject);
			fclose($fp);
			echo "<script>alert('修改成功')</script>";
		}
	?>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>公告内容</td>
			<td>科目类型</td>
		</tr>
		<tr>
			<td width="600" height="400">
				<textarea name="Notice" style="width:100%;height: 100%;resize: none;"><?php 
					$fp=file("notice.txt");
					foreach ($fp as $key => $value) {
						$value=iconv("gb2312","utf-8",$value);
    					$value=str_replace(PHP_EOL,'',$value);
						print($value."\n");
					}
				?></textarea>
			</td>
			<td width="600" height="400">
				<textarea name="Subject" style="width:100%;height: 100%;resize: none;"><?php 
					$fp=file("subject.txt");
					foreach ($fp as $key => $value) {
						$value=iconv("gb2312","utf-8",$value);
    					$value=str_replace(PHP_EOL,'',$value);
						print($value."\n");
					}	

				?></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name ="ChangeNotice" value="修改公告"/></td>
			<td><input type="submit" name ="ChangeSubject"value="修改科目"/></td>
		</tr>
	</table>
</form>
</body>
</html>