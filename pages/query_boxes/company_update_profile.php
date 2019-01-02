<?php
    session_start();
    if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
        require_once '../../db_config/config.php';
        $comID=$_POST['comID'];
        $comName= $_POST['comName'];
        $comPhone = $_POST['comPhone'];
        $comAdd = $_POST['comAddress'];
        $comEmail = $_POST['comEmail'];
        
        $_SESSION['userID']=$comID;
        $_SESSION['userName']=$comName;
        $_SESSION['userMobile']=$comPhone;
        $_SESSION['userAddress']=$comAdd;
        $_SESSION['userEmail']=$comEmail;

        $query = "UPDATE company SET comName='$comName',comPhone='$comPhone',comEmail='$comPhone',comAddress='$comAdd' WHERE comID='$comID'";
        if(mysqli_query($conn,$query))
        {
         echo "<script>window.location.replace('../company.php');</script>";
        }
        else{
         echo "<script>window.location.replace('../company.php');</script>";
        }
    }

?>