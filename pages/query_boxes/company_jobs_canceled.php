<?php
	
    $queryJob="SELECT * FROM company_job WHERE jobStatus='cancle' LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            
            echo "<tr>
                    <td>".$rowJob['jobID']."</td>
                    <td>".$rowJob['jobTitle']."</td>
                    <td>".$rowJob['jobType']."</td>
                    <td>".$rowJob['jobAmount']."</td>
                    <td>".$rowJob['jobPeriod']."</td>
                    <td>".$rowJob['jobPrice']."</td>
                    <td>".$rowJob['jobDate']."</td>
                    <td>".$rowJob['jobStatus']."</td>
                    <td><button style='margin:2px' class='btn btn-danger'>Remove</button>
                </tr>";

        }
    }
    mysqli_close($conn);


?>