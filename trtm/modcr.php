<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   if(isset($_POST['mod']))
   {
  
  $reponse=$bdd->query('SELECT * FROM cr WHERE id_c= \''.$_POST['mod'].'\' ');
 
  $donnee=$reponse->fetch();
  
	?>
    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Modifier Diagnostique</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/modcfcr.php" >
                          
                          

                          <div class="form-group">
                            <label class="col-lg-2 control-label">foie</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="na" name="na" class="form-control" value="<?php echo $donnee['foie']?>">
                              <input type='hidden' name='mod' value="<?php echo $donnee['id_c']?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">vesicule biliaire</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ml" name="ml" class="form-control" value="<?php echo $donnee['vb']?>">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">pancreas</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="tel" name="tel" class="form-control" value="<?php echo $donnee['pancreas']?>">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">reinsgd</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="fax" name="fax" class="form-control" value="<?php echo $donnee['rgd']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">rate</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ra" name="ra" class="form-control" value="<?php echo $donnee['rate']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">autres</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="au" name="au" class="form-control" value="<?php echo $donnee['autres']?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">conclusion</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="co" name="co" class="form-control" value="<?php echo $donnee['conclusion']?>">
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