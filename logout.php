<?php

ob_start();
session_start();
unset($_SESSION['erp_name']);
unset($_SESSION['loginchecksession']);
unset($_SESSION['erp_username']);
echo '<script type="text/javascript">window.location="login.php"; </script>';


?>