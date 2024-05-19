<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	
   include('cnx.php');

   if(isset($_POST['mod']))
   {
  
  $reponse=$bdd->query('SELECT * FROM orr WHERE id_o= \''.$_POST['mod'].'\' ');
 
  $donnee=$reponse->fetch();
  
	?>
    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
    <h4 class="mb">Modifier Ordonnance</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/modcfor.php" >
                          
                          

                          <div class="form-group">
                            <label class="col-lg-2 control-label">med1</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="na" name="na" class="form-control" value="<?php echo $donnee['med1']?>">
                              <input type='hidden' name='mod' value="<?php echo $donnee['id_o']?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">med2</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ml" name="ml" class="form-control" value="<?php echo $donnee['med2']?>">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">med3</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="tel" name="tel" class="form-control" value="<?php echo $donnee['med3']?>">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">med4</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="fax" name="fax" class="form-control" value="<?php echo $donnee['med4']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">med5</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ra" name="ra" class="form-control" value="<?php echo $donnee['med5']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">med6</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="au" name="au" class="form-control" value="<?php echo $donnee['med6']?>">
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