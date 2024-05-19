<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
     
	include('cnx.php');
	
	  
	 
	 
	 
		 $reponse2 =$bdd->query('DELETE FROM diag WHERE id_diag = \''.$_POST['sup'].'\' ');
		 
	 
								 
	
		 
		 ?>
          <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
		 <div class="alert alert-warning">
		 <center>  supprimé</center>
	   </div>
	   <?php

		 $reponse2->closeCursor();
	 
	
?>