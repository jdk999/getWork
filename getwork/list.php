<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!--bootstarp-css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--/bootstarp-css -->
<!--css-->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--/css-->
<!--fonts-->
<link href='http://fonts.useso.com/css?family=Philosopher:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,100italic,300italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="SITENAME Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
<!--/js-->
</head>
<body>
<!--header-->
<div class="header">
	<div class="container">
		<div class="header-in">
		<div class="header-info">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/></a>
			</div>
					<div class="header-right">
						<div class="menu">
							<span class="menu"> </span>
								<ul class="navigatoin">
								 	<li><a href="index.php">主页</a></li>
								 	<li><a href="upload.php">上传作业</a></li>
							  		<li><a href="list.php" class="active">未交名单</a></li>
								  	<li><a href="about.php">关于...</a></li>
								</ul>
						</div>	
													<!--script-nav -->	
			<script>
					$("span.menu").click(function(){
						$("ul.navigatoin").slideToggle("slow" , function(){
						});
					});
					</script>
					<script type="text/javascript">
							jQuery(document).ready(function($) {
								$(".scroll").click(function(event){		
									event.preventDefault();
									$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
								});
							});
							</script>
						<div class="clearfix"> </div>
					<!-- /script-nav -->	
					</div>
												<div class="clearfix"> </div>
		</div>
		</div>
		</div>
		<div class="services-a">
		<div class="container">
			<div class="services">
				<div class="services-info">
					<h4>未交名单</h4>
				</div>
			</div>
		</div>
		</div>
		<div class="price">
					<div class="container">
<div class="sevices">
	<!--<h6>MAIN SERVICES</h6>-->
	<p><?php 
		$fp = fopen("mlist.txt", "r");
	while(! feof($fp))
{
	$str=fgets($fp);
	$str1=iconv("gbk","utf-8", $str);
	//printf("?¨¢¨¨?¡êo%s<br />",$str);
	if($str[0]=='*'&&$str[1]=='='){
		$str=fgets($fp);
		$str1=iconv("gbk","utf-8", $str);
		printf("<hr style=\"height:5px;border:none;border-top:5px ridge red;\" />");
		printf("<h2>%s</h2>",$str1);
	}else if($str[0]=='*'&&$str[1]=='*'&&$str[2]=='='){
		$str=fgets($fp);
		$str1=iconv("gbk","utf-8", $str);
		printf("<br /><h4>%s</h4>",$str1);
	}else{
		printf("%s<br />",$str1);
	//echo fgets($fp)."<br />";
	}
	
}
fclose($fp); 
printf("<hr style=\"height:5px;border:none;border-top:5px ridge red;\" />");
?></p>
	<div class="clearfix"> </div>
	</div>	
	</div>
	</div>
<!--/header-->
<!--footer-->
<div class="footer">
	<div class="copy-rights">
		<p>Copyright &copy; 2015.Fenghao All rights reserved.<a target="_blank" href="http://www.8k8e.cn/">收作业 v4.0 </a></p>
	</div>
														<div class="clearfix"> </div>
</div>
</div>
<!--footer-->	
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
