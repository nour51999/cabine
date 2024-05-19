<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
  //srand(time(0));
  include('cnx.php');
  include('../sess.php');

  //session_start();
  
  
 // $reponse=$bdd->query('SELECT nom FROM cr WHERE nom= \''.$_POST['da'].'\' ');
  
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
						   $resultat5=$bdd->query('SELECT * FROM patient where id_p= \''.$_POST['ns'].'\'');
						   $donnee5=$resultat5->fetch();
	  
	  $reponseClient1=$bdd->prepare('INSERT INTO cr VALUES(:id_c,:nom ,:prenom ,:age ,:foie ,:vb ,:pancreas ,:rgd ,:rate,:autres,:conclusion ,:id_cons)');
		  
	  $reponseClient1->execute(array(
		'id_c' =>"",
		'nom' =>$donnee5['nom'],
	  'prenom' => $donnee5['prenom'],
	  'age' => $donnee5['dans'],
	  'foie' => $_POST['na'],
	  'vb' => $_POST['ml'],
	  'pancreas' => $_POST['tel'],
	  'rgd' => $_POST['fax'],
	  'rate' => $_POST['ra'],
	  'autres' => $_POST['au'],
	  'conclusion' => $_POST['co'],
	  'id_cons' => $_SESSION['id_cons']
	  ));
		  
					  
	  
	  
	$reponseClient1->closeCursor();
	//$reponse->closeCursor();





	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>comte rendu éffectué avec succèe</strong> </center>
	</div>
	<?php		
//header("location:" . "../ajout.php");
	
 
 