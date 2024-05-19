<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   if(isset($_POST['mod']))
   {
  
  $reponse=$bdd->query('SELECT * FROM lt WHERE id_l = \''.$_POST['mod'].'\' ');
 
  $donnee=$reponse->fetch();
  
	?>
    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Modifier une lettre de laison</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/modcflt.php" >
                          
                          

                          <div class="form-group">
                            <label class="col-lg-2 control-label">nom_med</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sn" name="sn" class="form-control" value="<?php echo $donnee['nom_med']?>">
                              <input type='hidden' name='mod' value="<?php echo $donnee['id_l']?>">
                </div>
                          </div>
                          


                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">prenom_med</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="da" name="da" class="form-control" value="<?php echo $donnee['prenom_med']?>">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">date_lt</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="aa" name="aa" class="form-control" value="<?php echo $donnee['date_lt']?>">
                            </div>
                          </div>

                          
						  <div class="form-group">
                            <label class="col-lg-2 control-label">ltt</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="na" name="na" class="form-control" value="<?php echo $donnee['ltt']?>">
                            </div>
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