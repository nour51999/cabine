<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
 
  include('cnx.php');
  include('../sess.php');

 
  
  
  $reponse=$bdd->query('SELECT tel-d FROM patientd WHERE tel-d= \''.$_POST['tel'].'\' ');
  
  if(!($donnee=$reponse->fetch()))
  {
	$datetime = date("Y-m-d");
	$id_ut = $_SESSION['user_id'];
	 
	$reponseClient=$bdd->prepare('INSERT INTO patientd VALUES(:id_p,:nom-pd ,:pre-d ,:date-nd ,:sexe-d ,:tel-d ,:adrd ,:datte)');
	
	$reponseClient->execute(array(
		                            'id_p' =>"",
		                            'nom-pd' =>$_POST['sn'],
									'pre-d' => $_POST['da'],
									 
									'date-nd' => $_POST['na'],
									'sexe' => $_POST['sx'],
									'tel-d' => $_POST['tel'],
									'adrd' => $_POST['ad'],
									'datte' => $datetime
									));	
	
									 	
 
	$reponseClient->closeCursor();
	$reponse->closeCursor();





	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>Inscription éffectué avec succèe</strong> </center>
	</div>
	<?php		
 
	
  }
  else  { ?>
  <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	  <div class="alert alert-danger">
	  <center><strong>client avec cette nom ""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }?>
