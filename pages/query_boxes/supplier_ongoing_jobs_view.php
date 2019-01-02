<?php
    $queryJob="SELECT * FROM supplier_job WHERE jobStatus='start' LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){

            $locationID=$rowJob['locationID'];
            $queryLocation="SELECT * FROM location WHERE locID='$locationID'";
            $resultLocation=mysqli_query($conn,$queryLocation);

            $rowLocation=mysqli_fetch_assoc($resultLocation);
            $locationName=$rowLocation['locName'];
            $locationAddress=$rowLocation['locStreet'].", ".$rowLocation['locVillage'].", ".$rowLocation['locCity'];
            
            $level="danger";
           if($rowJob['jobProgress']>75){
               $level="primary";
           }else if($rowJob['jobProgress']>50){
               $level="success";
           }else if($rowJob['jobProgress']>25){
               $level="warning";
           }
            
            echo "<div class='progress-group'>
                      ".$rowJob['jobTitle']." <small>by ".$rowJob['comID']."</small>
                      <span class='float-right'><b>".$rowJob['jobProgress']."</b>/100</span>
                      
                      <div class='progress progress-sm'>
                        <div class='progress-bar bg-".$level."' style='width: ".$rowJob['jobProgress']."%'></div>
                      </div>
                      <div style='text-align:right'>
                        <button style='margin:5px 2px 2px 0' class='btn btn-primary'><i class='fa fa-check' aria-hidden='true'></i> Complete</button>
                        <button style='margin:5px 0 2px 0' class='btn btn-danger'><i class='fa fa-close' aria-hidden='true'></i> Cancel</button>
                    </div>
                    </div>
                    <!-- /.progress-group -->";
          
        }
    }
                
?>
