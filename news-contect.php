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
<title>文創商品設計-迪雅生活-創意品牌的領導者</title>
<!-- 關鍵字內容開始-->
<?php include("keywords.php"); ?> 
<!-- 關鍵字內容結束--> 

    <script src='https://googledrive.com/host/0BykclfTTti-0SlU3SDg5RUVtNlk/WFU-ts-mix.js' type='text/javascript'></script>
    <a href='javascript:;' onclick='this.innerHTML=(this.innerHTML=="切換為簡體")?"切换为繁体":"切換為簡體";TS_Switch();'>切換為簡體</a>
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->
       <?php
	   
	   require_once 'sldeer_admin/all_file/config/dbconfig.php';
	
	 if(isset($_GET['n_id']) && !empty($_GET['n_id']))
	{
		$id = $_GET['n_id'];
		$stmt_edit = $db->prepare('SELECT n_id, n_data, n_title, n_contect FROM newall WHERE n_id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	
	//echo $id;
	   
	   
	//	$id = $_GET['n_id'];
    //   require_once 'sldeer_admin/all_file/config/dbconfig.php';
	//    $stmt = $db->prepare("SELECT * FROM `newall` WHERE n_id= $id ");
	//	$stmt->execute();
	//	echo $id;
		?>
        
<div class="container">
<div class="sixteen columns page-title">
  <h3> <?php echo $row['n_title']; ?> </h3>
</div>
<?php echo $row['n_contect']; ?>


	<div class="sixteen columns">

  </div>
</div>
          </div>
                </div>
   

</body>
</html>