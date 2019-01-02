<?php
    
    $query="SELECT jobType,COUNT(*) AS typeCount FROM supplier_job WHERE jobStatus='offline' GROUP BY jobType";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
             echo "<li><a href='#' class='justify-content-between d-flex'>
                    <p>".$row['jobType']."</p>
                    <span>".$row['typeCount']."</span></a>
                    </li>";
        }   
        
    }
                
?>
