<?php
    $queryJob="select DISTINCT worker_pending.jobID,company.comName,supplier_job.jobType,supplier_job.workerCount,supplier_job.jobCount,supplier_job.jobPublished from company,supplier_job,worker_pending,worker where worker_pending.jobID=supplier_job.jobID and worker.workerID=worker_pending.workerID AND supplier_job.jobStatus='online' AND  company.comID=supplier_job.comID";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            $jobID=$rowJob['jobID'];
            $query="select count(workerID) as workerCount from worker_pending where jobID='$jobID'";
            $resultCount=mysqli_query($conn,$query);
            $rowCount=mysqli_fetch_assoc($resultCount);
            echo "<div style='border:1px solid lightgrey;width:100%;height:100%;border-left:6px solid grey;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px'>
                <strong>
                    <font style='font-size:15px'>
                        <p>Job ID: ".$rowJob['jobID']." By ".$rowJob['comName']."</p><hr>

                    </font>
                </strong>
                <p>Type: ".$rowJob['jobType']."</p>
                <p>Job Count: ".$rowJob['jobCount']."</p>
                <p>Worker Count: ".$rowJob['workerCount']."</p>
                <p>Workers Joined</p>
                <p>
                    <div class='progress' style='width:99%'>
                      <div class='progress-bar progress-bar-stripe active' role='progressbar' aria-valuenow='".$rowCount['workerCount']."'
                      aria-valuemin='0' aria-valuemax='100' style='width:".$rowCount['workerCount']."%'>
                        ".$rowCount['workerCount']."% Complete (success)worker
                      </div>
                    </div>
                </p>
                <p>Published On: ".$rowJob['jobPublished']."</p>
                <p>
                    <div style='text-align:right'>
                        <button class='btn btn-primary'><i class='fa fa-check' aria-hidden='true'></i> Start Job</button>
                        <button class='btn btn-danger'><i class='fa fa-close' aria-hidden='true'></i> Cancel Job</button>
                    </div>
                    
                </p>
                </div>";
          
        }
    }
                
?>
