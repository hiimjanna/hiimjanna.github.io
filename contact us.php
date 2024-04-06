<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="zh-tw"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="zh-tw"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="zh-tw"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="zh-tw">
<!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
<title>迪雅文創-兩岸文化創意第二人</title>
<!-- 關鍵字內容開始-->
<?php include("keywords.php"); ?> 
<!-- 關鍵字內容結束--> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="css/style.css">

<!-- JS
  ================================================== -->
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> <!-- jQuery -->
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
<script src="js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
<script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> <!-- tabs, toggles, accordion -->
<script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
  
<!-- Responsive Menu -->
<script src="js/jquery.meanmenu.js"></script> 
<script>
    jQuery(document).ready(function () {
    jQuery('header nav').meanmenu();
    });
    </script>
	
<!-- Ajax Contact Form JS -->
<script type="text/javascript" src="js/jquery.ajax-contact-form.js"></script>	
	
<!-- Tooltip -->
<script src="js/tooltip.js"></script>
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<script type="text/javascript" language="JavaScript" src="js/langConvert.js"></script> 
<script> convertWholePageAtEnd(); </script> 
</head>
<body>
<!-- 語系按鈕開始 -->
<?php include("language.php"); ?>
<!-- 語系按紐結束-->
	<!-- Primary Page Layout
	================================================== -->
<!-- header 開始-->    
<?php include("option.php"); ?>
<!-- header 結束-->
<!-- REVOLUTION SLIDER
	============================================= -->
<div class="container">
  <div class="sixteen columns page-title">
  <div class="eight columns alpha">
  <h3> <span> 聯絡我們 </span> </h3>
  </div>
  </div><!-- page-title -->
</div><!-- container -->

<div class="container">
	<!-- begin google map --> 
			<div class="sixteen columns google-map">
				<div>
                <iframe src="http://www.dr2ooo.com/tools/maps/maps.php?zoom=16&width=750&height=450&ll=25.033155,-238.437651&ctrl=true&cp=true&" width="100%" height="450"></iframe>
			</div>
    <!-- end google map -->
	
            <div class="clearfix"></div>
	        <!-- begin main -->
            <div class="twelve columns">
            <!-- begin contact form -->
            <h4 class="headline">迪雅國際股份有限公司</h4>
            <p class="left-font">地址:110台北市信義區永吉路354號2樓之1</p>
            <p class="left-font">電話:(02)2763-8411</p>
            <!-- mark fax 
            <p class="left-font">傳真:(02)2758-2110</p>
            -->
            <p class="left-font">e-mail:dr@sldeer.com</p>
            <p></p>
		<!--
		#########################################
			- Ajax Contact Form / Start -
		#########################################
		-->
		<div class="ajax-contact-form">
			<div class="form">
			
				<div class="form-holder">
				  <div class="notification canhide"></div>	
										
					<form id="frm_contact" name="frm_contact" action="contact.php" method="post">
						
						<div class="field">
							<label for="name">姓名或公司名稱 <span class="required">*</span></label>
							<div class="inputs">
								<input class="aweform" type="text" id="name" name="name" />
							</div>  
						</div>
						
						<div class="field">
							<label for="email">E-mail  <span class="required">*</span></label>
							<div class="inputs">
								<input class="aweform" type="text" id="email" name="email" />
							</div>  
						</div>
						
						<div class="field">
							<label for="phone">連絡電話 <span class="required">*</span></label>
							<div class="inputs">
								<input class="aweform small" type="text" id="phone" name="phone" />
							</div>  
						</div>
						
						<div class="field">
							<label for="subject">詢問主題</label>
							<div class="inputs">
								<select class="aweform" id="subject" name="subject">
									<option value="產品合作">產品合作</option>
									<option value="設計事項">設計事項</option>
									<option value="其他">其他</option>
								</select>
							</div>  
						</div>
						
						<div class="field">
							<label for="message">詢問內容<span class="required">*</span></label>
							<div class="inputs">
								<textarea class="aweform" id="message" name="message" rows="30" cols="5"></textarea>
							</div>  
						</div>
						
						<div class="field">
							<label for="verify">請輸入圖中的驗證碼(大小寫須一致) <span class="required">*</span></label>
							<div class="inputs">
								<div class="captcha">
									<img src="tools/captcha/captcha.php" class="captcha-img" alt="Verification" width="200" height="70" />
									<img src="images/refresh.png" class="change-captcha" alt="Change Text" title="Change Text" width="16" height="16" />
									<br /><input class="aweform captcha autocomplete-off" type="text" id="verify" name="verify" />
								</div>								
							</div>  
						</div>
						
						<div class="form-submit">
							<button type="submit" id="submit" name="submit">送出訊息</button>   
						</div>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
		<!--

		#########################################
			- Ajax Contact Form / End -
		#########################################
		-->
	
  

         <!-- container -->
          <div class="footer-bottom clearfix">
            <p>&nbsp; 
            <p>            
            <p><a href="https://twitter.com/sldeer" target="_blank" style="text-decoration:none" data-rel="tooltip" title="Twitter"><i class="fa fa-twitter fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp; </a><a href="https://www.facebook.com/%E8%BF%AA%E9%9B%85%E7%94%9F%E6%B4%BB-134071889966443/" target="_blank" style="text-decoration:none"   data-rel="tooltip" title="Facebook"><i class="fa fa-facebook fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; </a>            
            <a href="http://www.weibo.com/u/5135919598?sudaref=www.sldeer.com" target="_blank" style="text-decoration:none"  data-rel="tooltip" title="Weibo"><i class="fa fa-weibo fa-2x"></i>
              <p>            
            </a></div><!-- ... web design by yashin teng ... --> 
       
       
      <div class="footer-bottom clearfix">
        <p>      
        <p>      
        <p><a href="http://www.sldeer.com/">&copy; Copyright 2015 &copy;  DR design . All rights reserved.</a></p>
      </div>
   
  <!-- footer -->
  <script type="text/javascript">

$(window).load(function() {
	$("#flexiselDemo2").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    
});
  </script>
  <script>
		(function($){
			$(window).load(function(){
				
				$("#myModal .modal-body").mCustomScrollbar({
					setHeight:340,
					theme:"minimal-dark"
				});
				
				$("#accordion .panel-body").mCustomScrollbar({
					setHeight:300,
					theme:"dark-3"
				});
				
				$("#myTab .tab-pane").mCustomScrollbar({
					setHeight:200,
					theme:"inset-2-dark"
				});
				
			});
		})(jQuery);
	</script>

 <script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='1b320f37fdaef2fe320b6428d3dcca37' data-cfasync='false' async='async'></script>


</body>
</html>