<?php 
//srand(time(0));
require('cnx.php');

//include('../cnx.php');
	
  $resultat=$bdd->query('SELECT * FROM rdv ORDER BY date_rdv DESC  ');
  $cp=1;
  
  
	while($donnee=$resultat->fetch()){
		$resultat1=$bdd->query('SELECT nom,prenom  FROM patient where id_p=\''.$donnee['id_p'].'\'');
		$donnee1=$resultat1->fetch();
	 
		$cl=$donnee['id_rdv'];
		echo "<tr>";
		echo "<td><center>".$cp." </center></td>";
		echo "<td><center><a href='pcmpt.php?prf=$cl'>".$donnee1['nom']."</a> </center></td>";
		echo "<td><center>".$donnee1['prenom']." </center></td>";
		echo "<td><center>".$donnee['date_rdv']." </center></td>";
		echo "<td><center>".$donnee['heure_rdv']." </center></td>";
	  
		//echo "<td><center>".$com." </center></td>";
		

		
		echo "<td><center>";
            //echo "<a href='modifier.php?mod=$matricule'>Modifier</a>  ";   
			echo "  <form   style='display:inline' action='' method='post' >
			<input type='hidden' name='mod' value='$cl'> 
			 <input type='image'alt='modifier' width='20' height='20' src='img/mod1.png' />
			  </form> ";
		
			  //if($_SESSION['a']=="oui"){  // echo "<a href='ajout.php?sup=$matricule'>Supprimer</a>";
			echo "  <form   style='display:inline' action='trtm/suprndv.php' method='post' >";
			 echo"      <input type='hidden' name='sup' value='$cl'>  
			  <input type='image' alt='supperimer' width='20' height='20' src='img/sup1.png' /></form>";
			  //}
			  echo "</center></td>";
		echo '</tr>';
		$cp=$cp+1;
if($donnee=$resultat->fetch()){
	$resultat1=$bdd->query('SELECT nom,prenom  FROM patient where id_p=\''.$donnee['id_p'].'\'');
		$donnee1=$resultat1->fetch();
		//$com=$donnee1['nom_com']." ".$donnee1['prenom_com'];
		$cl=$donnee['id_rdv'];
		echo '<tr >';
		echo "<td><center>".$cp." </center></td>";
		echo "<td><center><a href='pcmpt.php?prf=$cl'>".$donnee1['nom']."</a> </center></td>";
		echo "<td><center>".$donnee1['prenom']." </center></td>";
		echo "<td><center>".$donnee['date_rdv']." </center></td>";
		echo "<td><center>".$donnee['heure_rdv']." </center></td>";
 
		//echo "<td><center>".$com." </center></td>";
		

		
		echo "<td><center>";
            //echo "<a href='modifier.php?mod=$matricule'>Modifier</a>  ";   
			echo "  <form   style='display:inline' action='' method='post' >
			<input type='hidden' name='mod' value='$cl'> 
			 <input type='image'alt='modifier' width='20' height='20' src='img/mod1.png' />
			  </form> ";
		
			  //if($_SESSION['a']=="oui"){      // echo "<a href='ajout.php?sup=$matricule'>Supprimer</a>";
			echo "  <form   style='display:inline' action='trtm/suprndv.php' method='post' >";
			 echo"      <input type='hidden' name='sup' value='$cl'>  
			  <input type='image' alt='supperimer' width='20' height='20' src='img/sup1.png' /></form>";
			  //}
			  echo "</center></td>";
		echo '</tr>';
		$cp=$cp+1;

	}
}

?>