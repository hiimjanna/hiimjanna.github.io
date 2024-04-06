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
<title>文創商品設計-迪雅生活-中華文化創意品牌的領導者</title>
<!-- 關鍵字內容開始-->
<?php include("keywords.php"); ?> 
<!-- 關鍵字內容結束--> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="stylesheet" href="css/colorbox.css" />
<!-- JS
  ================================================== -->
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<!-- jQuery -->
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<!-- jQuery easing -->
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<!-- Modernizr -->
<script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<!-- tabs, toggles, accordion -->
<script src="js/custom.js" type="text/javascript"></script>
<!-- jQuery initialization -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- MaxCDN Bootstrap plugins -->
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<!--COLORBOX-->
<script src="js/jquery.colorbox.js"></script>
    
   		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"100%", height:"70%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<!-- Responsive Menu -->
<script src="js/jquery.meanmenu.js"></script>
<script>
    jQuery(document).ready(function () {
    jQuery('header nav').meanmenu();
    });
    </script>
<!-- Revolution Slider -->
<script src="js/jquery.themepunch.plugins.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution-slider-options.js"></script>
<!-- Prety photo -->
<script src="js/jquery.prettyPhoto.js"></script>
<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto();
		});
	</script>
    
<!-- Tooltip -->
<script src="js/tooltip.js"></script>
<!-- Flexisel -->
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
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
    
<!-- 選項按鈕開始-->    
<?php include("option.php"); ?>
<!-- 選項按鈕結束-->
<!-- REVOLUTION SLIDER
	============================================= -->
<div class="fullwidthbanner-container top-shadow">
  <div class="fullwidthbanner">
    <ul>
    <!-- Slide 1 -->
    <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20201230.jpg" >
        <!-- End Main Image -->
      </li>  
      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20200629.jpg" >
        <!-- End Main Image -->
      </li>  
      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20200102.jpg" >
        <!-- End Main Image -->
      </li>  
     <!-- Slide 1 -->
      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20190912.jpg" >
        <!-- End Main Image -->
      </li>    
      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20190201.jpg" >
        <!-- End Main Image -->
      </li>    

      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20181224.jpg" alt="Newyear2018">
        <!-- End Main Image -->
      </li>    
      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/20181113.jpg" alt="Newyear2018">
        <!-- End Main Image -->
      </li>    

       <!-- Slide 1 -->
      <li data-transition="boxfade" data-slotamount="1" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/sldeer-2018.jpg" alt="Newyear2018">
        <!-- End Main Image -->
      </li>    

      <li data-transition="boxfade" data-slotamount="2" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/Slider-16.jpg" alt="中秋">
        <!-- End Main Image -->
      </li>
      
      <li data-transition="boxfade" data-slotamount="3" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/Slider-15.jpg" alt="中秋">
        <!-- End Main Image -->
      </li>
      <!-- Slide 1 -->
      <li data-transition="boxfade" data-slotamount="4" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/Slider-14.jpg" alt="東方文創商品">
        <!-- End Main Image -->
      </li>
      <!-- End Slide 1 -->
      <!-- Slide 2 -->
      <li data-transition="boxfade" data-slotamount="5" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/Slider-5.jpg" alt="日月潭日月行館">
        <!-- End Main Image -->
      </li>
      <!-- End Slide 2 -->
      <!-- Slide 3 -->
      <li data-transition="boxfade" data-slotamount="6" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/Slider-3.jpg"  alt="歷史博物館">
        <!-- End Main Image -->
      </li>
      <!-- End Slide 3 -->
      <!-- Slide 4 -->
      <li data-transition="boxfade" data-slotamount="7" data-masterspeed="300">
        <!-- Main Image -->
        <img src="images/slider/Slider-4.jpg" alt="中國風文創商品">
        <!-- End Main Image -->
      </li>
      <!-- End Slide 4-->
    </ul>
  </div>
</div>
<!-- END REVOLUTION SLIDER
	============================================= -->
<div class="container">

  <div class="modal-body mCustomScrollbar"  data-mcs-theme="dark">
    <!-- Tabs -->
    <div id="myTab">
    <ul class="nav nav-tabs">
        <li><a href="#最新消息" data-toggle="tab" class="btn big">最新消息</a></li>
         
      <p>
      <div class="tab-content">
	  <div class="tab-pane fade in active" id="最新消息">
            <p>　    <a class='iframe' href="cooperation.php">迪雅徵求合作通路商,詳細資訊請入內</a></p>
            <!-- 新聞列表開始 PHP程式  請勿動 -->
			<?php include("newslist.php"); ?>
            <!-- 新聞列表結束 -->
           
            
        </div>
       </div>
        <p>
          
          
</div>
                
        <!-- 與我們合作
================================================== -->
        <div class="footer-bottom clearfix"> 
        <a href="http://www.president.gov.tw/" target="_blank" ><img src="images/banner/client3.png" border="0" title="中華民國統府" alt="中華民國統府" ></a> 
        <a href="http://fun.gov.taipei/" target="_blank" ><img src="images/banner/client4.png" border="0" title="台北市政府" alt="台北市政府" ></a> 
        <a href="http://www.npm.gov.tw/" target="_blank" ><img src="images/banner/client2.png" border="0" title="國立故宮博物院" alt="國立故宮博物院" ></a> 
        <a href="http://www.nmh.gov.tw/zh/index.htm" target="_blank" ><img src="images/banner/nmn.gif" border="0" title="國立歷史博物館" alt="國立歷史博物館" ></a> 
        <a href="http://www.yoda-tw.com/#home" target="_blank" ><img src="images/banner/client1.png" border="0" title="台灣優良設計協會" alt="台灣優良設計協會" ></a> 
        <a href="http://www.ccia.org.tw/" target="_blank" ><img src="images/banner/client5.png" border="0" title="亞太文化創意產業協會" alt="亞太文化創意產業協會" ></a>
        <p><a href="http://www.songshanculturalpark.taipei/" target="_blank" ><img src="images/banner/client6.png" border="0" title="松山文創園區" alt="松山文創園區" ></a> <a href="http://www.huashan1914.com/" target="_blank" ><img src="images/banner/client7.png" border="0" title="華山1914文創園區" alt="華山1914文創園區" ></a> <a href="https://www.ntmofa.gov.tw/" target="_blank" ><img src="images/banner/client8.png" border="0" title="國立台灣美術館" alt="國立台灣美術館" ></a> <a href="http://www.kmfa.gov.tw/home01.aspx?ID=1" target="_blank" ><img src="images/banner/client9.png" border="0" title="高雄市立美術館" alt="高雄市立美術館" ></a> <a href="http://store.pchome.com.tw/sldeer/" target="_blank"><img src="images/banner/pchome.jpg" border="0" title="PCHOME網路商店" alt="PCHOME網路商店" ></a>  <a href="http://www.kingstone.com.tw/search/result.asp?c_name=%25E8%25BF%25AA%25E9%259B%2585&se_type=4" target="_blank" ><img src="images/banner/kingstone_logo.jpg" border="0" title="金石堂網路書店" alt="金石堂網路書店" ></a></p>
          <p><a href="http://npac-ntch.org/zh/" target="_blank" ><img src="images/banner/client10.jpg" border="0" title="國家兩廳院" alt="國家兩廳院" ></a> <a href="https://www.giftcenter.tw/zh-tw/product.php?keyword=0152&label=&CataP=" target="_blank" ><img src="images/banner/client11.jpg" border="0" title="迪雅生活-國家文創禮品館" alt="迪雅生活-國家文創禮品館" ></a> <a href="https://goo.gl/4IwnTc" target="_blank" ><img src="images/banner/client12.jpg" border="0" title="迪雅生活-博客來" alt="迪雅生活-博客來" ></a></p>


         <!-- container -->
          <div class="footer-bottom clearfix">
            <p>&nbsp; 
            <p>            
            <p>
            <a href="https://twitter.com/sldeer" target="_blank" style="text-decoration:none" data-rel="tooltip" title="Twitter"><i class="fa fa-twitter fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp; </a>
            <a href="https://www.facebook.com/%E8%BF%AA%E9%9B%85%E7%94%9F%E6%B4%BB-134071889966443/" target="_blank" style="text-decoration:none"   data-rel="tooltip" title="Facebook"><i class="fa fa-facebook fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; </a>            
            <a href="http://www.weibo.com/u/5135919598?sudaref=www.sldeer.com" target="_blank" style="text-decoration:none"  data-rel="tooltip" title="Weibo"><i class="fa fa-weibo fa-2x"></i>
              <p>            
            </a></div>
       
       
      <div class="footer-bottom clearfix">
        <p>      
        <p>      
        <p><a href="http://www.sldeer.com/">&copy; Copyright 2015 &copy;  DR design . All rights reserved.</a></p>
        <!-- ... web design by yashin teng ... --> 
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