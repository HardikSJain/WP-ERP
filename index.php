
<?php
include("first.php");
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
              <div class="row">
                  <div class="col-md-12">
                      <h1 class="page-subhead-line">Welcome to <strong><?php echo ' '. $siteName ?></strong> Today is:
                      <i class="icon-calendar icon-large" ></i>
                      
                      <?php
                      date_default_timezone_set("Asia/Kolkata");
                      echo  date(" l, F d, Y") . "<br>";

                      ?>
                       </h1>

                  </div>
              </div>
                <!-- /. ROW  -->
                <?php
                include("main.php");
                ?>
                <!-- /. ROW  -->


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


   <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>



</body>
</html>
