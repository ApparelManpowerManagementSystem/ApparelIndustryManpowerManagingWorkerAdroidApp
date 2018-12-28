<?php
    $queryJob="SELECT * FROM company_job WHERE jobStatus='online' LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            $totalDays=$rowJob['jobPeriod'];
            $estimatedDeliveryDate=date('Y-m-d', strtotime($rowJob['jobDate']. ' + '.$totalDays. ' days'));
            
            $daysLeft = 0;
            $fromDate = $estimatedDeliveryDate;
            $curDate = date('Y-m-d');
            $daysLeft = abs(strtotime($curDate) - strtotime($fromDate));
            $days = ($daysLeft/(60 * 60 * 24));

            $average=(($totalDays-$days)/$totalDays)*100;

            echo "<div style='line-height:14px;border-radius:10px;width:100%;height:100%;border:1px solid lightgrey;border-left:6px solid green;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px'>
                <strong>
                    <font style='font-size:15px'>
                        <p>Job Number ".$rowJob['jobID']." | ".$rowJob['jobTitle']."  <lable class='btn btn-danger'>".$rowJob['jobStatus']."</lable></p><hr>
                    </font>
                </strong>
                
                <p>Started on <font style='color:green;'>".$rowJob['jobDate']."</font>
                </p>
                <p>Estimated Delivery on <font style='color:green;'>$estimatedDeliveryDate</font>
                </p>
                <p>
                    <div class='progress'>
                      <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='$average'
  aria-valuemin='0' aria-valuemax='100' style='width:$average%'>
                        $days Days Remaining
                      </div>
                      
                    </div>
                </p>

                </div>";
            
        }
    }
                
?>
