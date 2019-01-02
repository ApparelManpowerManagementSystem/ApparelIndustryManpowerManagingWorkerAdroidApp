<?php
    
    $query="SELECT location.locCity, COUNT(*) AS locCount FROM supplier_job,location WHERE location.locID=supplier_job.locationID AND jobStatus='offline' GROUP BY supplier_job.locationID";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
             echo "<li><a href='#' class='justify-content-between d-flex'>
                    <p>".$row['locCity']."</p>
                    <span>".$row['locCount']."</span></a>
                    </li>";
        }   
        
    }
                
?>
