<?php
    if(isset($_POST["updateJob"])){
        $jobID=$_POST["jobID"];
        $jobProgress=$_POST["jobProgress"];
        require_once("../../db_config/config.php");
        $queryJob="UPDATE supplier_job SET jobProgress='$jobProgress' WHERE jobID='$jobID' ";
        $resultJob=mysqli_query($conn,$queryJob);
    
        if(mysqli_query($conn,$queryJob))
            {
            echo "<script>window.location.replace('../company.php');alert('Published Job Details Update Success!!!');</script>";
            }
            else{
            echo "<script>window.location.replace('../company.php');alert('Try again!!!');</script>";
            }
    }    
?>
