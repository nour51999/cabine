<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
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
					   
					   $datet = date("Y-m-d");
  $reponseClient=$bdd->prepare('INSERT INTO lt VALUES(:id_l,:nom_med ,:prenom_med ,:date_lt ,:ltt ,:id_cons)');
	  
  $reponseClient->execute(array(
	'id_l' =>"",
	'nom_med' =>$_POST['sn'],
	'prenom_med' =>$_POST['da'],
	'date_lt' =>$datet,
  'ltt' => $_POST['na'],
  'id_cons' => $_SESSION['id_cons']
  ));
  
	$reponseClient->closeCursor();
	//$reponse->closeCursor();





	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>Inscription éffectué avec succèe</strong> </center>
	</div>
	<?php		
//header("location:" . "../ajout.php");
	
  
