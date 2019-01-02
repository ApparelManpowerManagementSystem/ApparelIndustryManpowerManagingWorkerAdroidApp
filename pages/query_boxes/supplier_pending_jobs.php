<?php
    $queryJob="select DISTINCT worker_pending.jobID,company.comName,supplier_job.jobType,supplier_job.jobTitle,supplier_job.comID,supplier_job.jobProgress,supplier_job.workerCount,supplier_job.jobCount,supplier_job.jobPublished from company,supplier_job,worker_pending,worker where worker_pending.jobID=supplier_job.jobID and worker.workerID=worker_pending.workerID AND supplier_job.jobStatus='online' AND  company.comID=supplier_job.comID";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            $jobID=$rowJob['jobID'];
            $query="select count(workerID) as workerCount from worker_pending where jobID='$jobID'";
            $resultCount=mysqli_query($conn,$query);
            $rowCount=mysqli_fetch_assoc($resultCount);
            
            $level="danger";
            $value=(((int)$rowCount['workerCount'])/((int)$rowJob['workerCount']))*100;
           if($value>75){
               $level="primary";
           }else if($value>50){
               $level="success";
           }else if($value>25){
               $level="warning";
           }
            
            echo "<div class='progress-group'>
                      ".$rowJob['jobTitle']." <small>by ".$rowJob['comID']."</small>
                      <span class='float-right'><b>".$rowCount['workerCount']."</b>/".$rowJob['workerCount']."</span>
                      
                      <div class='progress progress-sm'>
                        <div class='progress-bar bg-".$level."' style='width: ".$value."%'></div>
                      </div>
                      <div style='text-align:right'>
                        <button style='margin:5px 2px 2px 0' class='btn btn-primary'><i class='fa fa-check' aria-hidden='true'></i> Start</button>
                        <button style='margin:5px 0 2px 0' class='btn btn-danger'><i class='fa fa-close' aria-hidden='true'></i> Cancel</button>
                    </div>
                    </div>
                    <!-- /.progress-group -->";
          
        }
    }
                
?>
