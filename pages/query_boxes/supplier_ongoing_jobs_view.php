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
           
            
            echo "<div style='border:1px solid lightgrey;width:100%;height:100%;border-left:6px solid grey;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px'>
                <strong>
                    <font style='font-size:15px'>
                        <p>Job ID: ".$rowJob['jobID']."".$rowJob['comID']."</p><hr>

                    </font>
                </strong>
                <p>Type: ".$rowJob['jobType']."</p>
                <p>Started On: ".$rowJob['jobStart']."</p>
                <p>Ends On: ".$rowJob['jobEnd']."</p>
                <p>
                    <div class='progress' style='width:99%'>
                      <div class='progress-bar progress-bar-stripe active' role='progressbar' aria-valuenow='".$rowJob['jobProgress']."'
                      aria-valuemin='0' aria-valuemax='100' style='width:".$rowJob['jobProgress']."%'>
                        ".$rowJob['jobProgress']."% Complete (success)
                      </div>
                    </div>
                </p>
                <p>
                    <div style='text-align:right'>
                        <button class='btn btn-primary'><i class='fa fa-check' aria-hidden='true'></i> Complete Job</button>
                        <button class='btn btn-danger'><i class='fa fa-close' aria-hidden='true'></i> Cancel Job</button>
                    </div>
                    
                </p>
                </div>";
          
        }
    }
                
?>
