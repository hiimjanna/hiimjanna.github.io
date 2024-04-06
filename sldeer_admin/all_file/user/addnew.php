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

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once '../config/dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// 名稱
		$userjob = $_POST['user_job'];// 內容 
		
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($username)){
			$errMSG = "請輸入名稱.";
		}
		else if(empty($userjob)){
			$errMSG = "請輸入密碼.";
		}
		//else if(empty($imgFile)){
		//	$errMSG = "請上傳你的圖片.";
		//}
		//else
		//{
		//	$upload_dir = '../../../upload/'; // upload directory
	
	//		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
	//		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
	//		$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
	//		if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
	//			if($imgSize < 5000000)				{
	//				move_uploaded_file($tmp_dir,$upload_dir.$userpic);
	//			}
	//			else{
	//				$errMSG = "很抱歉，您的檔案太大  請把檔案縮至5MB以內.";
	//			}
	//		}
	//		else{
	//			$errMSG = "抱歉, 只能 JPG, JPEG, PNG & GIF 這些檔案上傳.";		
	//		}
	//	}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $db->prepare('INSERT INTO user_log (u_user,u_pass) VALUES(:uname, :ujob)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			
			
			if($stmt->execute())
			{
				$successMSG = "記錄已新增  請稍候 ...";
				header("refresh:2;list.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "新增錯誤  請聯絡管理員....";
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

</head>
<body>
<?php require_once '../top/top.php'; ?>


<div class="container">


	<div class="page-header">
    	<h1 class="h2">新增 <a class="btn btn-default" href="list.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; 返回 </a></h1>
    </div>
    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">名稱</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="請輸入名稱" value="<?php echo $username1; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">密碼</label></td>
        <td><input class="form-control" type="password" name="user_job" placeholder="請輸入密碼" value="<?php echo $userjob; ?>" /></td>
    </tr>
   <!--
    <tr>
    	<td><label class="control-label">圖片.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">內容.</label></td>
        <td><textarea class="form-control" name="user_job" id="user_job" rows="10"  cols="80" placeholder="請輸入內容" ></textarea>
       
        <script>
CKEDITOR.replace( 'user_job', {});
</script></td>
    </tr>
    
    -->
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; 存檔
        </button><input name="status" type="hidden" value="no" />
        </td>
    </tr>
    
    </table>
    
</form>



<div class="alert alert-info">
    <strong></strong> 
</div>

    

</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="../../js/bootstrap.min.js"></script>


</body>
</html>