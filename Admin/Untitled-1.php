<?php 
			//	$query = mysqli_query($conn, "SELECT COUNT(*) as total from client_inquiries WHERE inquiries_status = '2'");
			//		while($result=mysqli_fetch_array($query)){
	      	//		echo $result['total']; 
			//	}			
			//	?>
						  </span>			  
			</a>
			<?php

			if (isset($_GET['id'])) {
			$users_id=$_GET['id'];
			$query = "UPDATE `client_inquiries` SET inquiries_status = '1'  WHERE inquiries_id = '$users_id'";
			mysqli_query($conn, $query);
			}
			?>
			
				<div class="dropdown-content2">
					<h4 id="textnotif">Notification</h4><br><hr>
					<?php   
			   require_once("../db/notification/notifdisplay.php");
              while($row = mysqli_fetch_assoc($query)){
				  
            ?>
					<h4>Inquiry:</h4><p><?php echo $row['inquiries_message']; ?></p><a href="?id=<?php echo $row['inquiries_id'];?>"><button class="btn-remove" name="btnremove" style="cursor: pointer;">Clear</button></a><hr color="wheat">
					<?php
			  }
			  ?>
					<a href="see-all-notification.php" id="colnotif">See all notification..</a>
				</div>