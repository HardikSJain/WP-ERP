
<div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Yearly Transactions Report</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                  <div class="main-box bg-info">

                    <div class="row">
                      <div class="col-sm-12 bg-info">
                        <div class="row">
                          <div class="col-sm-3  bg-info">
                            <?php
                            global $deduction;
                            $deduction = 0;
                            $total_cash = 0;
                            $query  = "SELECT amount from cash";
                            $q = $conn->query($query);
                            while($row = $q->fetch_assoc())
                            {
                              $total_cash = $total_cash + $row["amount"];
                            }

                             ?>
                            <a class="btn btn-primary btn-lg " align="center" href="home_cash.php"><strong>Total Cash : </strong> <?php echo $total_cash; ?> Rupees.</a>

                          </div>

                          <div class="col-sm-3 bg-info">
                            <?php
                            $total_cost = 0;
                            $query  = "SELECT amount from transaction where delete_status='0'";
                            $q = $conn->query($query);
                            while($row = $q->fetch_assoc())
                            {
                              $total_cost = $total_cost + $row["amount"];

                            }
                            $query  = "SELECT pay_amount from payment where delete_status='0'";
                            $q = $conn->query($query);
                            while($row = $q->fetch_assoc())
                            {
                              $total_cost = $total_cost + $row["pay_amount"];
                            }
                            $query  = "SELECT d_amount from deductions";
                            $q = $conn->query($query);
                            while($row = $q->fetch_assoc())
                            {
                              $total_cost = $total_cost + $row["d_amount"];
                              $deduction = $deduction +$row["d_amount"];
                            }
                             ?>
                            <a class="btn btn-primary btn-lg " align="center" href="dailyTransactions.php"><strong>Total Cost : </strong><?php echo $total_cost?> Rupees.</a>

                          </div>
                          <div class="col-sm-3 bg-info">
                            <?php
                            $total_salary = 0;
                            $query  = "SELECT pay_amount from payment where delete_status='0'";
                            $q = $conn->query($query);
                            while($row = $q->fetch_assoc())
                            {
                              $total_salary = $total_salary + $row["pay_amount"];
                            }
                            $query  = "SELECT d_amount from deductions";
                            $q = $conn->query($query);
                            while($row = $q->fetch_assoc())
                            {
                              $total_salary = $total_salary + $row["d_amount"];

                            }

                             ?>
                            <a class="btn btn-primary btn-lg " align="center" href="home_payment.php"><strong>Salary Paid : </strong><?php echo $total_salary."+".$deduction; ?> Rupees.</a>

                          </div>
                          <div class="col-sm-3 bg-info">
                            <a class="btn btn-primary btn-lg w-600" align="center" href="#"><strong>Extra : </strong> <?php echo $total_cash - $total_cost; ?> Rupees.</a>

                          </div>
                        </div>
                      </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-subhead-line"><strong>Main Pages</strong>

         </h1>

    </div>
</div>

<div class="row">

<div class="col-md-4">
          <div class="main-box mb-pink">
              <a href="home_employee.php">
                  <i class="fa fa-users fa-5x"></i>
                  <h5>Employee</h5>
              </a>
          </div>
    </div>





    <div class="col-md-4">
        <div class="main-box mb-red">
              <a href="home_salaryRegular.php">
                  <i class="fa fa-money fa-5x"></i>
                  <h5>Salary</h5>
              </a>
          </div>
    </div>


    <div class="col-md-4">
        <div class="main-box bg-primary">
            <a href="home_store.php">
                <i class="fa fa-box fa-5x"></i>
                <h5>Store</h5>
            </a>
        </div>
    </div>


</div>



<script>
$(document).on('click', '.panel-heading span.clickable', function (e) {
  var $this = $(this);
  if (!$this.hasClass('panel-collapsed')) {
      $this.parents('.panel').find('.panel-body').slideUp();
      $this.addClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
  } else {
      $this.parents('.panel').find('.panel-body').slideDown();
      $this.removeClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
  }
});
$(document).on('click', '.panel div.clickable', function (e) {
  var $this = $(this);
  if (!$this.hasClass('panel-collapsed')) {
      $this.parents('.panel').find('.panel-body').slideUp();
      $this.addClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
  } else {
      $this.parents('.panel').find('.panel-body').slideDown();
      $this.removeClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
  }
});
$(document).ready(function () {
  $('.panel-heading span.clickable').click();
  $('.panel div.clickable').click();
});
</script>
