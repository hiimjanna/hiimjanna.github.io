<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>迪雅國際後台管理系統</title>
<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css"/>
<link href="../../../css/bootstrap.min.css" rel="stylesheet">
<script  src="../../../js/jquery.dataTables.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script  src="../../../js/bootstrap.min.js" type="text/javascript"></script> 
<style type="text/css">
        @import "../../../css/jquery.dataTables.css";
     </style>


</head>

<body>

<nav class="navbar navbar-default" role="navigation"> 
    <div class="container-fluid"> 
        <div class="navbar-header"> 
            <a class="navbar-brand" href="#">迪雅國際後台管裡系統</a> 
        </div> 
        <div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="搜尋">
            </div>
            <button type="submit" class="btn btn-default">送出</button>
        </form>
          <!--向左对齐-->
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    內容修改
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="../oldtake5/list.php">新聞管理</a></li>
                             
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    系統管理
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="../user/list.php">帳號管理</a></li>
                    
                    
               
                </ul>
            </li>
        </ul>
        
    
        <ul class="nav navbar-nav navbar-right"> 
         
          <li><span class="glyphicon glyphicon-log-in"><a href="<?php echo $logoutAction ?>">登出</a></span></li> 
        </ul> </div>
    </div> 
</nav>

</body>
</html>