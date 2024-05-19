<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
 // $reponse=$bdd->query('SELECT date_cons FROM cons WHERE date_cons= \''.$_POST['sn'].'\' ');
  
  //if(!($donnee=$reponse->fetch()))
  //{
	
	if (empty($_SESSION['id_cons'])){
		$datet = date("Y-m-d");
		  $id_ut =$_SESSION['user_id'];
		  
		   
		  $reponseClient=$bdd->prepare('INSERT INTO cons VALUES(:id_cons ,:date_cons ,:id_util ,:id_p )');
		  
		  $reponseClient->execute(array(
										  'id_cons'=>"",
										  'date_cons' => $datet,
										  'id_util' => $id_ut,
										  'id_p' => $_POST['ns']
										  
						));
	   $resultat2=$bdd->query('SELECT id_cons FROM cons ORDER BY id_cons DESC');
						   $donnee2=$resultat2->fetch();  
						   $_SESSION['id_cons'] = $donnee2['id_cons'];    }  
	  
	  $reponseClient=$bdd->prepare('INSERT INTO diag VALUES(:id_diag ,:mald ,:sym ,:id_cons )');
		  
		  $reponseClient->execute(array(
										  'id_diag'=>"",
										  'mald' => $_POST['cmnt1'],
										  'sym' => $_POST['cmnt2'],
										  'id_cons' => $_SESSION['id_cons']
										  
						));
	  
					  
	  //}
	$reponseClient->closeCursor();
	//$reponse->closeCursor();





	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>consultation éffectué avec succèe</strong> </center>
	</div>
<?php		
//header("location:" . "../ajout.php");
	
 //}
  /*else  { ?>
  <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	  <div class="alert alert-danger">
	  <center><strong>patient avec cette consultation""<?php echo $_POST['sn'];?>"" existe déjà</strong> </center>
	</div>
	<?php }*/?>
