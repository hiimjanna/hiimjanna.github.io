<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../../index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<script src="../ckeditor/ckeditor.js"></script>
<?php

	error_reporting( ~E_NOTICE );
	
	require_once '../config/dbconfig.php';
	
	 if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $db->prepare('SELECT n_id, n_data, n_title, n_contect FROM newall WHERE n_id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: list.php");
	} 
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$n_data = $_POST['n_data'];// news_data
		$n_title = $_POST['n_title'];// new_title
		$n_contect = $_POST['n_contect'];// new_contect
		
/*			
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = '../../../upload/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['userPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "抱歉  你上傳的資料大於5MB 請把圖片縮小後上傳  ";
				}
			}
			else
			{
				$errMSG = "抱歉, 只能 JPG, JPEG, PNG & GIF 這些檔案上傳.";		
			}	
		}
		else */
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['userPic']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $db->prepare('UPDATE newall SET n_data=:ndata, n_title=:ntitle, n_contect=:ncontect WHERE n_id=:uid');
			$stmt->bindParam(':ndata',$n_data);
			$stmt->bindParam(':ntitle',$n_title);
			$stmt->bindParam(':ncontect',$n_contect);
			$stmt->bindParam(':uid',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('更新成功 ...');
				window.location.href='list.php';
				</script>
                <?php
			}
			else{
				$errMSG = "抱歉  資料沒有更新 請聯絡管理員 !";
			}
		
		}
		
						
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>後台管理</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-1.11.3-jquery.min.js"></script>
</head>
<body>
<?php require_once '../top/top.php'; ?>



<div class="container">


	<div class="page-header">
    	<h1 class="h2">更新 <a class="btn btn-default" href="list.php"> 取消更新 </a></h1>
    </div>

<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">新聞日期</label></td>
        <td><input class="form-control" type="date" name="n_data" value="<?php echo $n_data; ?>" required /></td>
    </tr>
    <tr>
    	<td><label class="control-label">新聞標題</label></td>
        <td><input class="form-control" type="text" name="n_title" value="<?php echo $n_title; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">新聞內容</label></td>
        <td><textarea class="form-control" name="n_contect" id="n_contect" rows="10"  cols="80" ><?php echo $n_contect; ?></textarea>
        </td>
    </tr>
    <script src="../../../ckfinder/ckfinder.js"></script>
	<script>
	CKFinder.setupCKEditor();
       CKEDITOR.replace( 'n_contect', {});
    </script>
    
    
    <tr>
        <td colspan="2"></button><input name="id" type="hidden" value="<?php echo $n_id; ?>" />
        <button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span>更新
        </button>
        
        <a class="btn btn-default" href="list.php"> <span class="glyphicon glyphicon-backward"></span>取消 </a>
        
        </td>
    </tr>
    
    </table>
    
</form>




</div>
</body>
</html>