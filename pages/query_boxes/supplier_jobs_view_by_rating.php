<?php
    $queryJob="SELECT * FROM supplier_job WHERE jobStatus='offline' AND jobRatings>10 order by jobID DESC";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){

            $locationID=$rowJob['locationID'];
            $queryLocation="SELECT * FROM location WHERE locID='$locationID'";
            $resultLocation=mysqli_query($conn,$queryLocation);

            $rowLocation=mysqli_fetch_assoc($resultLocation);
            $locationName=$rowLocation['locName'];
            $locationAddress=$rowLocation['locStreet'].", ".$rowLocation['locVillage'].", ".$rowLocation['locCity'];
            
                        
            echo "<div class='single-rated'>
                    <h4>".$rowJob['jobTitle']."</h4>
                    <h6>".$locationName."</h6>
                   <p >".$rowJob['jobCount']." pieces needs to do ".$rowJob['jobType'].". Every manpower member has to work at most ".$rowJob['jobPeriod']." days. 
                    <strong></strong> Job should be complete within ".$rowJob['jobPeriod']." days.</p>
                    
                    <h5>Job Nature: ".$rowJob['jobNature']."</h5>
                    <p class='address'><span class='lnr lnr-map'></span> ".$locationAddress."</p>
                    <p class='address'><span class='lnr lnr-database'></span> ".$rowJob['workersJoined']." joined.</p>
                    <a href='#' class='btn btn-primary'>Apply job</a>
                </div>";
            
            
            
          
            /*
            
            <div style='text-align:right'>
                    <p>(<font style='color:red;'>".$rowJob['jobPeriod']."</font>/".($rowJob['workerCount']+5).") joined
                        <a href='./query_boxes/worker_accept_jobs.php?jobID=".$rowJob['jobID']."'><button id='join_btn' class='btn btn-success' onclick="."show_div('job')".">Accept & Join</button></a>
                    </p>
                </div>
                </div>
            */
            
            
                                
            
          
        }
    }
                
?>
