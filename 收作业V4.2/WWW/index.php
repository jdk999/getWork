<!DOCTYPE html>
<html>
<head>
<title>交作业 V4.2</title>
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
				<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""/></a>
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
								<h1>交作业4.2</h1>
								<p>（内核3.4）</p>
								<a class="laorrent" href="upload.php">快来一起爽一爽</a>
							</div>
					</div>
	</div>	
</div>			
<!--/header-->


		<?php
			$title=array();
			$notice=array();
			$buttonText=array();
			$aURL=array();
			$lines=file("notice.txt");
    		$notice_num=0;//公告数目
			foreach($lines as $line_num => $line){//对每一行进行操作
				$line=iconv("gb2312","utf-8",$line);
    			$line=str_replace(PHP_EOL,'',$line);
				if(strlen($line)==0){
    				continue;//跳过空行
    			}
    			if($line[0]=='#'||$line[0]=='#'){
    				continue;
    			}//跳过注释

    			$Isfirst=false;
    			$i=0;
    			$temp="";
    			$kind=0;//类型
    			while($i<strlen($line)){
    				$ch=$line[$i++];

    				if($ch=='\\'&&!$Isfirst){
    					$Isfirst=true;
    					continue;//开启开关
    				}

    				if($Isfirst){
    					switch ($ch) {
    						case '\\':
    							$temp.="\\";
    							break;
    						case 'n':
    							$temp.="<br/>";
    							break;
    						case 'f':
    							switch($kind){
    								case 0:
    									$title[$notice_num]=$temp;
    									break;
    								case 1:
    									$notice[$notice_num]=$temp;
    									break;
    								case 2:
    									$buttonText[$notice_num]=$temp;
    									break;
    								case 3:
    									$aURL[$notice_num]=$temp;
    									break;
    								default:
    									echo "<scropt>alert('配置文件错误'')</script>";
    									break;
    							}
    							$kind++;
    							$temp="";
    							break;
    						default:

    							break;
    					}
    					$Isfirst=false;//关闭开关
    					continue;
    				}

    				$temp.=$ch;
    			}
    			$notice_num++;//公告数增加
			}
			//文件处理完成
			?>

<div class="content">
	<div class="container">
	  <div class="sevices">
	<div class="service-info">
		<div class="sed">
			<?php
			for($k=0;$k<$notice_num;$k++){
				if($k==0){
				?>
					<div class="sed-intro">
						<h4><?php echo $title[$k];?></h4>
							<p><?php echo $notice[$k];?></p>
								<a class="sed-info-top" href="<?php echo $aURL[$k];?>"><?php echo $buttonText[$k];?></a>
					</div>
				<?php
				}
				else{
				?>
					<div class="sed-info">
						<h4><?php echo $title[$k];?></h4>
							<p><?php echo $notice[$k];?></p>
								<a class="sed-info-top" href="<?php echo $aURL[$k];?>"><?php echo $buttonText[$k];?></a>
					</div>
				<?php 
				}
				if($k==$notice_num-1){
					?>
					<div class="sed-info"></div>
					<?php
				}
			}
			?>			
		</div>
	  </div>
</div>
<div class="footer">
	<div class="copy-rights">
		<p>Copyright &copy; 2016.jdk&cty All rights reserved.<a target="_blank" href="http://www.8k8e.cn/">交作业 v4.2 </a></p>
	</div>
															<div class="clearfix"> </div>
</div>
	</div>
</div>			
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>