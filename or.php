
<?php include('sess.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/favicon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
  
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="compte.php" class="logo"><b><span>cabinet médical</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <!-- settings end -->
          <!-- inbox dropdown start-->
          
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="dec.php">Déconnecté</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="compte.php"><img src="<?php echo $_SESSION['img'];?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['user'];?></h5>
          
          
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Pages</span>
              </a>
            <ul class="sub">
              
              <li ><a href="compte.php">patient</a></li>
              
              <?php if ($_SESSION['user']=="medcin")echo" 
                <li><a href="."cn.php".">Diagnostique</a></li>
      
              <li><a href="."cr.php".">compte rendu</a></li>
              <li class="."active"."><a href="."or.php".">ordononance</a></li>
              <li><a href="."lt.php".">lettre de liason</a></li> ";?>
              <?php //if ($_SESSION['a']=="oui")echo"<li><a href="."commerciale.php".">Commerciale</a></li>";?>
              
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
                      <!-- /col-md-4 -->
              
              <!-- /col-md-4 -->
           
            <!-- /row -->
          
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                <?php
	
  

  if(isset($_POST['mod']))
  { ?>
                  <li>
                    <a data-toggle="tab" href="#overview">liste des ordonnance</a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#edit">Modifier une ordonnance </a>
                  </li>

                  <?php
	
  }

  else
  { ?>

<li class="active">
                    <a data-toggle="tab" href="#overview">liste des ordonnance</a>
                  </li>
                  <li >
                    <a data-toggle="tab" href="#edit">Ajouter une ordonnance</a>
                  </li>

                  <?php
	
  }

   ?>



  
                  
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                <?php

                if(isset($_POST['mod']))
  { ?>
<div id="overview" class="tab-pane">
<?php
}

else
{ ?>
                  <div id="overview" class="tab-pane active">
                  <?php                  
                }

?>
                    <div class="row">
                                          
                        
                      
                          <div class="col-md-12 col-md-offset-0">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                <th><center>#</center></th>
                                <th><center>patient</center></th>
                                
                                  <th><center>med1</center></th>
                                  <th><center>med2</center></th>
                                  <th><center>med3</center></th>
                                  
                                  <th><center>med4</center></th>
								  <th><center>med5</center></th>
                                  <th><center>med6</center></th>
                                   
                                  <th><center>Action</center></th>
                                  
                                </tr>
                              </thead>
                              
                              <tbody>
                                <?php include('trtm/echoor.php');?>

                                


                              </tbody>
                            </table>


                            








                            
                        
                        <!-- /row -->
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                
                  <!-- /tab-pane -->

                  <?php  if(isset($_POST['mod']))
  { ?>
<div id="edit" class="tab-pane active">
<?php include('trtm/modor.php');?>

<?php
}

else
{ ?>
                  <div id="edit" class="tab-pane">
                  



                  
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Nouvelle ordonnance</h4>
                        <form role="form" class="form-horizontal"method="post" action="trtm/insctor.php" >
                          
                        <div class="form-group">
                            <label class="col-lg-2 control-label">patient</label>
                            <div class="col-lg-6">


                            <select class="form-control" name="ns">


<?php include('trtm/listpas.php');?>
</select>


                              </div>
                          </div>




                          <div class="form-group">
                            <label class="col-lg-2 control-label">med1</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="sn" name="sn" class="form-control">
                            </div>
                          </div>
                          


                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">med2</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="da" name="da" class="form-control">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">med3</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="aa" name="aa" class="form-control">
                            </div>
                          </div>

                          
						  <div class="form-group">
                            <label class="col-lg-2 control-label">med4</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="na" name="na" class="form-control">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">med5</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="ml" name="ml" class="form-control">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="col-lg-2 control-label">med6</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="tel" name="tel" class="form-control">
                            </div>
                          </div>
						  
 
                  

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Ajouter</button>
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
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    </footer>
    <!--footer end-->
  </section>
   <!-- js placed at the end of the document so the pages load faster -->
   <script src="lib/jquery/jquery.min.js"></script>
   <script src="lib/bootstrap/js/bootstrap.min.js"></script>
   <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
   <script src="lib/jquery.scrollTo.min.js"></script>
   <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
   <!--common script for all pages-->
   <script src="lib/common-scripts.js"></script>
   <!--script for this page-->
  
 

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="js/demo/datatables-demo.js"></script>






</body>

</html>


