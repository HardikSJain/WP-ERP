<?php
include("php/dbconnect.php");
include("php/checklogin.php");
global $siteName;
$siteName = "WP_ERP"

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WP_ERP</title>


    <?php
    include("php/mainlinks.php");
    ?>


    <!-- FOR DataTable -->
    <script>
        {
            $(document).ready(function()
            {
                $('#myTable').DataTable();
            });
        }
    </script>
    <script>
        <!--
        var ScrollMsg= "WP_ERP"
        var CharacterPosition=0;
        function StartScrolling() {
            document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
                ScrollMsg.substring(0, CharacterPosition);
            CharacterPosition++;
            if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
            window.setTimeout("StartScrolling()",150); }
        StartScrolling();
        // -->




    </script>

</head>
