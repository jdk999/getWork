﻿<!DOCTYPE html>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!--<script language="javascript" type="text/javascript">
    function AddInput(){
    	var input=document.createElement('input');//创建一个input节点
    	//var br=document.createElement('br');//创建一个br节点
    	input.setAttribute('type','file');//设置input节点type属性为file
    	input.setAttribute('name','files[]');//设置input节点name属性为files[]，以 数组的方式传递给服务器端
    	//document.myForm.appendChild(br);//把节点添加到form1表单中
    	document.myForm.appendChild(input);
    }
    </script>-->
	<script type="text/javascript">
	var num=1;
	function add () {
		var stamp=document.getElementById('submit');
		stamp.disabled=false;
		for(t=0;t<num;t++){
			var e=document.getElementById("error"+t);
			e.innerHTML="";
		}
		var aa=document.getElementById('a');
		var input=document.createElement("input");
		input.setAttribute("type","file");
		input.setAttribute("id","file"+num);
		input.setAttribute("name","file[]");
		input.setAttribute("onchange","change(\""+num+"\")");
		 aa.appendChild(input);
		aa.innerHTML+="<lable id=\"error"+num+"\"></lable><br/>";
		num++;
	}
	function change(fnum){
		var f=document.getElementById("file"+fnum);
		var e=document.getElementById("error"+fnum);
		if(f.value==""){
			e.innerHTML="<font color=\"red\">IS NULL</font>";
		}
		else{
			e.innerHTML="";
		}
		var str="[0-9]{9}-[\\u4e00-\\u9fa5]+-(企业级软件平台与开发|移动互联网开发)-[0-9]+.(doc|docx)";
		if(!(f.value).match(str)){
			e.innerHTML="<font color=\"red\">文件名或者是类型错误!</font>";
			var stamp=document.getElementById('submit');
			stamp.disabled=true;
		}
		else{
			e.innerHTML="";
		}
		var pd=true;
		for(var i=0;i<num;i++){
			var ee=document.getElementById("error"+fnum);
			if(ee.innerHTML!=""){
				pd=false;
			}
		}
		if(pd){
			var stamp=document.getElementById('submit');
			stamp.disabled=false;
		}
	}
	</script>
</head>
<body>
<?php
if(isset($_FILES["upfile"])){
	$uploadpath="upFile/";//文件上传地址
	for($i=0;$i<count($_FILES['upfile']['name']);$i++){
		$upfile=$_FILES["upfile"];
		$name=$upfile["name"];
		$type=$upfile["type"];
		$size=$upfile["size"];
		$tmp_name=$upfile["tmp_name"];
		$str="/[0-9]{9}-.+-(企业级软件平台与开发|移动互联网开发)-[0-9]+.(doc|docx)/";
		if(!preg_match($str,$name[$i])){
			printf("Filename type error !");
			return;
		}
		/*if($size[$i]!="application/msword"&&$size[$i]!="application/vnd.openxmlformats"){
			printf("Type error(Plase upload file type is doc or docx)");
			return;
		}*/
		$name[$i]=iconv("UTF-8","gb2312//IGNORE",$name[$i]);
		move_uploaded_file($tmp_name[$i],$uploadpath.$name[$i]);
		printf("upload success!");
	}
}
?> 


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
								 			<li><a href="upload.php" class="active">上传作业</a></li>
							  				<li><a href="list.php">未交名单</a></li>
										  	<li><a href="about.php">关于...</a></li>
										</ul>
								</div>	
															<!--script-nav -->	
					<script  type="text/javascript">
						$("span.menu").click(function(){
							$("ul.navigatoin").slideToggle("slow" , function(){
							});
						});
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
		</div>
		</div>
	</div>	
			<div class="clearfix"> </div>
			<div class="abouts">
				<div class="container">
				
		<div class="aboutss">
			<h3>上传作业</h3>
		</div>
				</div>
						<div class="abouts-info">
							<div class="container">
							<div class="abouts-info-bottom">
								<div class="col-md-5"><a href="#"><img src="images/bj2.jpg" class="img-responsive" alt=""/></a></div>
									<div class="col-md-7 abouts-info-bottom-right">
										<h5>一次可上传多个文件</h5>
										<form action="" enctype="multipart/form-data" method="post"name="uploadfile">
										<div id="a"><input id="file0" type="file" name="upfile[]" onChange="change(0)" /><label id="error0"></label><br></div>
											<input id="submit" type="submit" value="上传" />
											<input type="button" value="添加"  onclick="add()" />
										</form>
														
					  				</div>
					  									<div class="clearfix"> </div>
				  </div>
			</div>
		</div>
	</div>
</div>			
<!--/header-->
<!--abouts-->	
															<div id="Portfolio" class="Portfolio">
																<div class="container">
																  <!--/abouts-->
<div class="footer">
		<div class="copy-rights">
			 <p>Copyright &copy; 2015.Fenghao All rights reserved.<a target="_blank" href="http://www.8k8e.cn/">交作业 v4.0 </a></p>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>