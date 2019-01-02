<?php
    $value=$_GET['keyword'];
    $query="SELECT * FROM supplier_job,location WHERE supplier_job.locationID=location.locID AND supplier_job.jobStatus='offline' AND (supplier_job.jobType='$value' OR location.locCity='$value')";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
             echo "<li><a class='justify-content-between d-flex'>
                    <p>".$row['jobType']."</p>
                    <span>".$row['typeCount']."</span></a>
                    </li>";
        }   
        
    }
                
?>
