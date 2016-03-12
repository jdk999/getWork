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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SITENAME Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.useso.com/css?family=Philosopher:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,100italic,300italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
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
								 	<li><a href="index.php" class="active">主页</a></li>
									<li><a href="upload.php">上传作业</a></li>
							 		<li><a href="list.php">未交名单</a></li>
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
					<div class="header-info-down">
							<div class="header-info-coe">
								<a href="#"><img src="images/logo-1.png" class="img-responsive" alt=""/></a>
								<h2>by@jdk&amp;cty</h2>
								<h1>交作业4.0</h1>
								<p>（主页功能建设中）</p>
								<a class="laorrent" href="#">快来一起爽一爽</a>
							</div>
					</div>
	</div>	
</div>			
<!--/header-->
<div class="content">
	<div class="container">
	  <div class="sevices">
	<div class="service-info">
		<div class="col-md-8 sed">
			<div class="sed-intro">
				<h4><?php printf("公告");?></h4>
					<p><?php printf("服务器很小！大家平时写实验报告的时候，多写字少截图！(文件尽量小一些)");?></p>
						<a class="sed-info-top" href="#">谢谢配合</a>
			</div>
			
			<div class="sed-info">
				<h4><?php printf("公告");?></h4>
					<p><?php printf("如果总是上传失败，就换个时间段试试，服务器24H开启");?></p>
						<a class="sed-info-bottom" href="#">上传作业</a>
			</div>
			
		</div>
	  </div>
</div>
<div class="footer">
	<div class="copy-rights">
		<p>Copyright &copy; 2015.Fenghao All rights reserved.<a target="_blank" href="http://www.8k8e.cn/">交作业 v4.0 </a></p>
	</div>
															<div class="clearfix"> </div>
</div>
	</div>
</div>			
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>