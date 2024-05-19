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
					   
  
  $reponseClient=$bdd->prepare('INSERT INTO orr VALUES(:id_o,:med1 ,:med2 ,:med3 ,:med4 ,:med5 ,:med6 ,:id_cons)');
	  
  $reponseClient->execute(array(
	'id_o' =>"",
	'med1' =>$_POST['sn'],
	'med2' => $_POST['da'],
	'med3' => $_POST['aa'],
	'med4' => $_POST['na'],
	'med5' => $_POST['ml'],
	'med6' => $_POST['tel'],
  'id_cons' => $_SESSION['id_cons']
  ));
	  
				  
  
  
  	
									//$disc= "un nouveau laboratoire".$_POST['sn'];
									//$ac="Ajouter";
	
									//$reponseAc=$bdd->prepare('INSERT INTO action VALUES(:id_ac ,:ac ,:dis_ac ,:date_ac ,:id_com)');
	
									/*$reponseAc->execute(array(
										                            'id_ac' =>"",
				                                                    'ac' =>$ac,
																	'dis_ac' => $disc,
																	'date_ac' => $datetime,
																	'id_com' => $id_ut
																	));	
	*/
	$reponseClient->closeCursor();
	//$reponse->closeCursor();





	?>
	<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
	<div class="alert alert-success">

	<center><strong>Inscription éffectué avec succèe</strong> </center>
	</div>
	<?php		
//header("location:" . "../ajout.php");
	
  