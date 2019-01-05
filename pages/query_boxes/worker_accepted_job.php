<?php

if($_SESSION['userStatus']=='offline'){
    $userID=$_SESSION['userID'];
    $queryJob="SELECT * FROM worker_pending,supplier_job WHERE worker_pending.workerID='$userID' AND worker_pending.jobID=supplier_job.jobID AND isDone=0 LIMIT 1";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        $rowJob=mysqli_fetch_assoc($resultJob);

            $locationID=$rowJob['locationID'];
            $queryLocation="SELECT * FROM location WHERE locID='$locationID'";
            $resultLocation=mysqli_query($conn,$queryLocation);

            $rowLocation=mysqli_fetch_assoc($resultLocation);
            $locationName=$rowLocation['locName'];
            $locationAddress=$rowLocation['locStreet'].", ".$rowLocation['locVillage'].", ".$rowLocation['locCity'];
        
            $_SESSION['jobID']=$rowJob['jobID'];
            
            if($rowJob['jobStatus']=='pending'){
                echo "<div style='margin-top:10px' class='single-post d-flex flex-row'><div class='thumb'>
				    <img src='../img/img-worker/post.png' alt=''>
                    </div>
                <div class='details'>
                    <div class='title d-flex flex-row justify-content-between'>
                        <div class='titles'>
                            <a href=''><h4>".$rowJob['jobTitle']."<small> Published on ".$rowJob['jobPublished']."</small></h4></a>
                            <h6>By ".$locationName."</h6>					
                        </div>
                        <ul>
                            <li class='btn btn-primary disabled'><a>Applied</a></li>
                            <li class='btn btn-warning'><a>Pending</a></li>
                        </ul>
                    </div>
                    <p >".$rowJob['jobCount']." pieces needs to do ".$rowJob['jobType'].". Every manpower member has to work at most ".$rowJob['jobPeriod']." days. 
                    <strong></strong> Job should be complete within ".$rowJob['jobPeriod']." days.</p>

                    <h5>Job Nature: ".$rowJob['jobNature']."</h5>
                    <p class='address'><span class=''></span>".$locationAddress."</p>
                    <p class='address'><span class=''></span>".$rowJob['workersJoined']." joined.</p>
                    <div style='text-align:right'><li class='btn btn-danger'><a href='./query_boxes/worker_leave_job.php' style='color:white'>Leave</a></li></div>
                </div></div>";
            }else if($rowJob['jobStatus']=='online'){
                echo "<div style='margin-top:10px' class='single-post d-flex flex-row'><div class='thumb'>
				    <img src='../img/img-worker/post.png' alt=''>
                    </div>
                <div class='details'>
                    <div class='title d-flex flex-row justify-content-between'>
                        <div class='titles'>
                            <a href=''><h4>".$rowJob['jobTitle']."<small> Published on ".$rowJob['jobPublished']."</small></h4></a>
                            <h6>By ".$locationName."</h6>					
                        </div>
                        <ul>
                            <li class='btn btn-primary disabled'><a>Joined</a></li>
                            <li class='btn btn-success'><a>Started</a></li>
                        </ul>
                    </div>
                    <p >".$rowJob['jobCount']." pieces needs to do ".$rowJob['jobType'].". Every manpower member has to work at most ".$rowJob['jobPeriod']." days. 
                    <strong></strong> Job should be complete within ".$rowJob['jobPeriod']." days.</p>

                    <h5>Job Nature: ".$rowJob['jobNature']."</h5>
                    <p class='address'><span class=''></span>".$locationAddress."</p>
                    <p class='address'><span class=''></span>".$rowJob['workersJoined']." joined.</p>
                    Progress
                    <div style='margin-top:10px;margin-bottom:10px' class='progress'>
                        <div class='progress-bar' style='width:".$rowJob['jobProgress']."%'>
                            <span>".$rowJob['jobProgress']."%</span>
                        </div>
                    </div>
                    <div style='text-align:right'>
                        <li class='btn btn-danger'><a href='./query_boxes/worker_leave_job.php' style='color:white'>Leave</a></li>
                        <li class='btn btn-warning'><a href='./query_boxes/workertempleave_job.php' style='color:white'>Temporary Leave</a></li>
                    </div>
                </div></div>";
            }else if($rowJob['jobStatus']=='done'){
                echo "<div style='margin-top:10px' class='single-post d-flex flex-row'><div class='thumb'>
				    <img style='width:70%' src='../img/img-worker/post.png' alt=''>
                    </div>
                <div class='details'>
                    <div class='title d-flex flex-row justify-content-between'>
                        <div class='titles'>
                            <a href=''><h4>".$rowJob['jobTitle']."<small> Published on ".$rowJob['jobPublished']."</small></h4></a>
                            <h6>By ".$locationName."</h6>					
                        </div>
                        <ul>
                            <li style='margin:2px' class='btn btn-primary disabled'><a>Joined</a></li>
                            <li style='margin:2px' class='btn btn-success'><a>Completed</a></li>
                        </ul>
                    </div>
                    <p >".$rowJob['jobCount']." pieces needs to do ".$rowJob['jobType'].". Every manpower member has to work at most ".$rowJob['jobPeriod']." days. 
                    <strong></strong> Job should be complete within ".$rowJob['jobPeriod']." days.</p>

                    <h5>Job Nature: ".$rowJob['jobNature']."</h5>
                    <p class='address'><span class=''></span>".$locationAddress."</p>
                    <p class='address'><span class=''></span>".$rowJob['workersJoined']." joined.</p>
                    Progress
                    <div style='margin-top:10px;margin-bottom:10px' class='progress'>
                        <div class='progress-bar' style='width:".$rowJob['jobProgress']."%'>
                            <span>".$rowJob['jobProgress']."%</span>
                        </div>
                    </div>
                    <div style='text-align:right'>
                        <li class='btn btn-primary'><a href='./query_boxes/worker_complete_job.php?jobID=".$rowJob['jobID']."' style='color:white' target='_blank'>Print Invoice</a></li>
                    </div>
                </div></div>";
            }
            
            
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
