<?php

	session_start();
	require_once '../../db_config/config.php';
	$workerID=$_SESSION['userID'];
    $jobID=$_SESSION['jobID'];
    $date=date("Y-m-d"); 
    $time=date("h:i a");

    $tempquery = "INSERT INTO worker_leaves (workerID,JobID,date,time) VALUES ('$workerID','$jobID','$date','$time')";

    $userID=$_SESSION['userID'];
    $userType=$_SESSION['userType'];
    $notification=$userID." leaved from the job";
    if(mysqli_query($conn,$tempquery)){


    echo "
            <form method='post' action='insertnoti.php' id='comment_form'>
                <div class='form-group'>
                 <label>Enter Notification ID</label>
                 <input value='$userID' type='text' name='notificationID' id='notificationID' class='form-control'>
                </div>
                   <div class='form-group'>
                 <label>Enter User Type</label>
                 <input type='text' name='userType' value=2 id='userType' class='form-control'>
                </div>
                <div class='form-group'>
                 <label>Enter Notification</label>
                 <input value='".$notification."' name='notification' id='notification' class='form-control' rows='5'>
                </div>
                <div class='form-group'>
                 <input type='submit' name='notificationID' id='post' class='btn btn-info' value='".$userID."' />
                </div>
            </form>";


    echo "<script>
                document.getElementById('comment_form').submit();
           </script>";



}else{
    //echo "window.location.replace('../worker.php');alert('Try again!!!');</script>";
}

?>