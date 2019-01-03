<?php
    
    $query="SELECT COUNT(invoiceID) AS invoiceCount FROM invoice";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        echo $row['invoiceCount'];
    }

    
        
?>