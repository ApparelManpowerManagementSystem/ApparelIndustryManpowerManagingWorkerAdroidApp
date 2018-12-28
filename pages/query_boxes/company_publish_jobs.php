<?php
    //Continue session to access $_SESSION vaiables
    session_start();
    //Check if the addComJob submit data
    if(isset($_POST['addComJob'])){ 
        //Require database connection
        require_once('../../db_config/config.php');
        //Assign data to the variables
        $jobTitle= $_POST['jobTitle'];
        $jobType = $_POST['jobType'];
        $jobAmount = $_POST['jobAmount'];
        $jobPeriod = $_POST['jobPeriod'];
        $jobPrice = $_POST['jobPrice'];
        $jobDate = $_POST['jobDate'];
        $jobStatus = 'offline';
        $comID = $_SESSION['userID'];
        $supID = 'S2147483647';

        //Insert company job sql query
        $query = "INSERT INTO company_job (jobTitle,jobType,jobAmount,jobPeriod,jobPrice,jobDate,jobStatus,comID,supID) VALUES ('$jobTitle','$jobType','$jobAmount','$jobPeriod','$jobPrice','$jobDate','$jobStatus','$comID','$supID')";
        //Check whether the sql query executed successfully
        if(mysqli_query($conn,$query)){
            //If true alert message and redirect to company.php file
            echo "<script>window.location.replace('../company.php');alert('Company Job Published Success!!!');</script>";
        }
        else{
            //If false redirect to same page and display error message
            echo "<script>window.location.replace('../company.php');alert('Login Success!!!');</script>";
        }
    
}

?>