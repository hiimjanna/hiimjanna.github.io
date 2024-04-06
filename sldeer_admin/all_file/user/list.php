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
<?php
 
   if (!isset($_SESSION)) {
       session_start();
    }
 
	require_once '../config/dbconfig.php';
	
   
	if(isset($_GET['delete_id']))
	{
		// 先刪除圖片  
		$stmt_select = $db->prepare('SELECT userPic FROM users WHERE userID =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("../../../upload/".$imgRow['userPic']);
		
		// 再刪除資料庫資料跟圖片
		$stmt_delete = $db->prepare('DELETE FROM user_log WHERE u_id =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		?>
		 <script>
      
	           alert('刪除成功');
	           history.go(-1)
    
          </script>
	<?php } ?>
	   
			

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />

<link href="stylesheet" type="text/css" href="../../css/jquery.dataTables.css">
<script  src="../../../js/jquery.js" type="text/javascript"></script>
<script  src="../../../js/jquery.dataTables.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 

<style type="text/css">
        @import "../../../css/jquery.dataTables.css";
     </style>
<script type="text/javascript" charset="utf-8">
 $(document).ready(function(){
	   $('#datatables').dataTable();
	 
	 })
	 </script>
</head>

<body>
<?php require_once '../top/top.php'; ?>


<div class="container">
<div class="page-header">
    	<h1 class="h2"><a class="btn btn-primary" href="addnew.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; 新增 </a></h1> 
  </div>
    
<br />
	

<div class="row">
 <table id="datatables" class="display" >
    <thead>
      <tr>
        <th>帳號</th>
        <th>密碼</th>
        <!--<th>圖片</th>
        <th>狀態</th> -->
        <th width= "160">動作</th> 
      </tr>
     </thead>
    <tbody>
     <?php
	    $stmt = $db->prepare("SELECT u_id , u_user, u_pass FROM user_log ORDER BY u_id DESC ");
		$stmt->execute();
     	while($row = $stmt->fetch()){
	?>

<tr>
  <td><?php echo $row['u_user']; ?></td>
  <td><?php echo $row['u_pass']; ?></td>
  
  <!--<td><img src=../../../upload/<?php echo $row['userPic']; ?> height="100" width="180"  /></td> 
  <?php if($row['status']=='yes')
     { ?>
	<!--<td><button class="btn btn-success" aria-label="Left Align" class="btn btn-success"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>上架中</button></td>
	  
	 <?php }else {  ?>
	   <td><button class="btn btn-danger" aria-label="Left Align" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>下架中</button></td>
		
	<?php  }  ?>
 
 -->
 
 
  <!-- 修改表單開始-->
  <td>
  
    
    <!-- 修改表單結束-->
    
    <a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['u_id']; ?>" title="click for edit" onClick="return confirm('你確定要編輯嗎 ?')"><span class="glyphicon glyphicon-pencil"></span>編輯</a> 
				<a class="btn btn-danger" href="list.php?delete_id=<?php echo $row['u_id']; ?>" title="click for delete" onClick="return confirm('你確定要刪除嗎?')"><span class="glyphicon glyphicon-remove-circle"></span> 刪除</a>
             <!--   <?php if($row['status']=='no'){ ?>
                <a class="btn btn-success" href="up.php?up_id=<?php echo $row['u_id']; ?>" title="click for delete" onClick="return confirm('你確定要上架?')"><span class="glyphicon glyphicon-remove-circle"></span> 上架</a>
			<?php	}else{  ?>
                <a class="btn btn-danger" href="down.php?down_id=<?php echo $row['u_id']; ?>" title="click for delete" onClick="return confirm('你確定要下架?')"><span class="glyphicon glyphicon-remove-circle"></span> 下架</a>
                <?php } ?>
    </td> -->
</tr>
<?php
   	}

?>
  </tbody>
 </table>
</div>	



<div class="alert alert-info">
    <strong></strong> 
</div>

</div>


<!-- Latest compiled and minified JavaScript -->

</body>
</html>