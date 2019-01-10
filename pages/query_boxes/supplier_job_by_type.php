<?php
  

    $query="SELECT supplier_job.jobType,company.comName,count(supplier_job.jobType) as jobTypes,SUM(supplier_job.jobPrice) as price FROM supplier_job,company WHERE supplier_job.comID=company.comID GROUP BY jobType";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
           
            
            echo "<tr>
                  <td>".$row['jobType']."</td>
                  <td>".$row['comName']."</td>
                  <td>".$row['jobTypes']."</td>
                  <td>".$row['price']."</td>
                  
                </tr>";
        }
        
    }


?>