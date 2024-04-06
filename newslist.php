 <?php
	    require_once 'sldeer_admin/all_file/config/dbconfig.php';
	    $stmt = $db->prepare("SELECT * FROM `newall`  ORDER BY n_id DESC ");
		$stmt->execute();
     	while($row = $stmt->fetch()){
	?>

    <p><a class='iframe' href="news-contect.php?n_id=<?php echo $row['n_id']; ?>"><?php echo $row['n_data']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['n_title']; ?></a></p> 
              
      <?php  }    ?>













