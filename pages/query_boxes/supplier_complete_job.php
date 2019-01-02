<?php
    
    if(isset($_GET['jobID'])){
        $jobID=$_GET['jobID'];
        
        $query1="UPDATE suppler_job SET jobStatus='done' WHERE jobID=$jobID";
        $query2="UPDATE company_job SET jobStatus='done' WHERE jobID=$jobID";
        $query3="UPDATE workerPending SET isDone=1 WHERE jobID=$jobID";
        
        mysqli_query($conn,$query1);
        mysqli_query($conn,$query2);
        mysqli_query($conn,$query3);
        
        
    }
    


?>