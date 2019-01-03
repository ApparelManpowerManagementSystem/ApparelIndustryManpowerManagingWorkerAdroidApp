<?php
    $userID=$_SESSION['userID'];
    $queryJob="SELECT * FROM invoice,supplier_job WHERE supplier_job.comID='$userID' AND supplier_job.jobID=invoice.jobID AND supplier_job.jobStatus='done'";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            
            if($rowJob['isPaid']==1){
                 echo "<tr>
                    <td>".$rowJob['invoiceID']."</td>
                    <td>".$rowJob['jobID']."</td>
                    <td>".$rowJob['jobTitle']."</td>
                    <td>".$rowJob['price']."</td>
                    <td class='bg-success'>Paid</td>
                    <td><button class='btn btn-default'>Print</button></td>
                    
                </tr>";
            }else{
                 echo "<tr>
                    <td>".$rowJob['invoiceID']."</td>
                    <td>".$rowJob['jobID']."</td>
                    <td>".$rowJob['jobTitle']."</td>
                    <td>".$rowJob['price']."</td>
                    <td><button class='btn btn-primary'>Pay</button></td>
                    <td><button class='btn btn-default'>Print</button></td>
                    
                </tr>";
            }
            
            
           
        }
    }
?>