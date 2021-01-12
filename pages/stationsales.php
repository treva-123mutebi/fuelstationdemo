<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
if(empty($_SESSION['branch'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../UI/css/uikit.min.css" />
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../UI/css/style.css" />
        <link rel="stylesheet" href="../UI/css/notyf.min.css" />
        <script src="../UI/js/uikit.min.js" ></script>
	<script src="../UI/js/uikit-icons.min.js" ></script>
    <script src="../dist/js/jquery.min.js"></script>
    <script language="JavaScript"><!--
javascript:window.history.forward(1);
//--></script>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-<?php echo $_SESSION['skin'];?> layout-top-nav" onload="myFunction()">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Sales</li>
            </ol>
          </section>

          <!-- Main content -->
          <div class="content-background">
            <div class="uk-section-large">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
                        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                        <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    Register Page
                                </div>
                                <div class="uk-card-body">
                                    <center>
                                        <h2>Register Days Sales</h2><br />
                                    </center>
                                    <form method="POST" action="stationadd.php">
                                        <fieldset class="uk-fieldset">

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <label> Select Pump</label>
                                                <select class="form-control select2" name="pumpnumber" tabindex="1" autofocus required>
								<?php
                  $branch=$_SESSION['branch'];
                  $cid=$_REQUEST['cid'];
								  include('../dist/includes/dbcon.php');
									 $query2=mysqli_query($con,"select * from  pumps order by pumpnumber")or die(mysqli_error());
									    while($row=mysqli_fetch_array($query2)){
								?>
										<option value="<?php echo $row['pumpid'];?>"><?php echo $row['pumpnumber'];?></option>
								  <?php }?>
								</select>
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <label> Select Shift</label>
                                                <select class="form-control select2" name="shift_details" tabindex="1" autofocus required>
								<?php
                  $branch=$_SESSION['branch'];
                  $cid=$_REQUEST['cid'];
								  include('../dist/includes/dbcon.php');
									 $query2=mysqli_query($con,"select * from  shifts order by shift_details")or die(mysqli_error());
									    while($row=mysqli_fetch_array($query2)){
								?>
										<option value="<?php echo $row['shift_id'];?>"><?php echo $row['shift_details'];?></option>
								  <?php }?>
								</select>
                                                </div>
                                            </div>
                                            
                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <label> Select Station Product</label>
                                                <select class="form-control select2" name="stationprod_name" tabindex="1" autofocus required>
								<?php
                  $branch=$_SESSION['branch'];
                  $cid=$_REQUEST['cid'];
								  include('../dist/includes/dbcon.php');
									 $query2=mysqli_query($con,"select * from  stationproducts order by stationprod_name")or die(mysqli_error());
									    while($row=mysqli_fetch_array($query2)){
								?>
										<option value="<?php echo $row['prod_id'];?>"><?php echo $row['stationprod_name'];?></option>
								  <?php }?>
								</select>
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <label> Day's Open Meter Reading</label>
                                                    
                                                    <input name="openmeterreading" class="uk-input" type="number" min ="1" step="any" placeholder="Open Meter Reading" required>
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <label> Day's Close Meter Reading</label>
                                                    
                                                    <input name="closemeterreading" class="uk-input" type="number" min ="1" step="any" placeholder="Close Meter Reading" required>
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <label> Unit Price</label>
                                                    
                                                    <input name="unitprice" class="uk-input" type="number" step="any" min ="1" placeholder="Unit Price" required>
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <label> Quantity Sold (ltrs)</label>
                                                    
                                                    <input name="quantitysold" class="uk-input" type="number" min ="1" placeholder="Quantity Sold">
                                                </div>
                                            </div>




                                            <div class="uk-margin">
                                                <button  type="submit" class="uk-button uk-button-primary">
                                                    <span class="ion-forward"></span>&nbsp; Submit
                                        </button>
                                            </div>

                                            <hr />

                                            <center>
                                               
                                                
                                            </center>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../UI/js/script.js"></script>
          <!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->
	<script>
  
    
      $("#cash").click(function(){
          $("#tendered").show('slow');
          $("#change").show('slow');
      });

    $(function() {

      $(".btn_delete").click(function(){
      var element = $(this);
      var id = element.attr("id");
      var dataString = 'id=' + id;
      if(confirm("Sure you want to delete this item?"))
      {
	$.ajax({
	type: "GET",
	url: "temp_trans_del.php",
	data: dataString,
	success: function(){
		
	      }
	  });
	  
	  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
	  .animate({ opacity: "hide" }, "slow");
      }
      return false;
      });

      });
    </script>
	
	<script type="text/javascript" src="autosum.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../dist/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,x`
          "info": true,
          "autoWidth": false
        });
      });
    </script>
     <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
