<style>
    body {
        overflow-x: hidden; 
    }
</style>
<title>AGGTEDeck Composite Cladding | Composite Decking | Taal, Batangas, Philippines</title>
<?php $mainroot = '/aggtedeckwebsite'; ?>
<link class="logoicon" rel="shortcut icon" href="../favicon.ico">
<!-- Main Directory Includes (CSS) -->
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link href="<?php echo $mainroot; ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/style.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="dist/color-default.css">
<link href="<?php echo $mainroot; ?>/css/magnific-popup.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/animate.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/owl.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/style_slider.css" rel="stylesheet">
<link href="<?php echo $mainroot; ?>/css/modal-designs.css" rel="stylesheet">

<!-- Main Directory Includes (Javascipt) -->
<script src="../js/demo/datatables-demo.js"></script>
<script src="../js/demo/chart-area-demo.js"></script>
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="<?php echo $mainroot; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $mainroot; ?>/js/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo $mainroot; ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo $mainroot; ?>/js/jquery.fancybox8cbb.js?v=2.1.5"></script>
<script src="<?php echo $mainroot; ?>/js/owl.carousel.js"></script>
<script src="<?php echo $mainroot; ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo $mainroot; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $mainroot; ?>/js/counter.js"></script>
<script src="<?php echo $mainroot; ?>/js/smoothscroll.js"></script>
<script src="<?php echo $mainroot; ?>/js/script.js"></script>
<script src="<?php echo $mainroot; ?>/js/custom1.js"></script>
<script src="<?php echo $mainroot; ?>/js/messageCounter.js"></script>

<!-- Local -->
<!-- Custom styles for this template-->
<link href="../css/sb-admin.css" rel="stylesheet">
<link href="../css/cart_style.css" rel="stylesheet">

<!-- Bootstrap core CSS-->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<?php if (isset($_SESSION['C_ID']))?>


<?php include('includes/connection.php');?>
<!--header area-->
<?php include '../header.php'; ?>
<br>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>


 <?php include 'includes/cakes.php'; ?>

          <!-- Icon Cards-->

         <!--Icon Card area-->
<?php /*include 'includes/iconcards.php'*/; ?>
          <!-- Area Chart Example-->

          <!-- DataTables Example -->

      <!--footer area-->

<?php include '../footer.php'; ?>
<script>
  document.getElementById("brandSection").style.visibility = "hidden";
  document.getElementById("brandSection").style.height = "0px";
</script>

