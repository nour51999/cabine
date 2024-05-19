<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   if(isset($_POST['mod']))
   {
  
  $reponse=$bdd->query('SELECT * FROM diag WHERE id_diag= \''.$_POST['mod'].'\' ');
 
  $donnee=$reponse->fetch();
  
	?>
    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Modifier Diagnostique</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/modcfcn.php" >
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Type de maladie</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="mld" name="mld" class="form-control" value="<?php echo $donnee['mald']?>">
                              <input type='hidden' name='mod' value="<?php echo $donnee['id_diag']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Symptoms</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sm" name="sm" class="form-control" value="<?php echo $donnee['sym']?>">
                            </div>

                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Modfier</button>
                              <button class="btn btn-theme04" type="button" onclick="window.location.replace('')">Annuler</button>
							 
                            </div>
                          </div>

                          
                        </form>
                        </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <?php                  
                }

?>  