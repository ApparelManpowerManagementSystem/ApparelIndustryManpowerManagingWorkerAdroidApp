<?php

if(isset($_POST['search'])) {
   
    $value = $_POST['keyword'];
    $area = $_POST['select_area'];
    $category = $_POST['select_category'];
    $queryview = "SELECT * FROM supplier_job,location WHERE supplier_job.locationID=location.locID AND supplier_job.locationID=location.locID AND supplier_job.jobStatus='offline' AND (supplier_job.jobTitle LIKE '$value' OR supplier_job.jobNature='$category' OR location.locCity='$area') ORDER BY supplier_job.jobID DESC";

    $result = mysqli_query($conn,$queryview);

    if (mysqli_num_rows($result) > 0) {

        while ($rowJob = mysqli_fetch_assoc($result)) {

            $locationID = $rowJob['locationID'];
            $queryLocation = "SELECT * FROM location WHERE locID='$locationID'";
            $resultLocation = mysqli_query($conn, $queryLocation);

            $rowLocation = mysqli_fetch_assoc($resultLocation);
            $locationName = $rowLocation['locName'];


            echo "<div class='single-post d-flex flex-row'><div class='thumb'>
									<img src='../img/img-worker/post.png' alt=''>
									
								</div>
            <div class='details'>
                    <div class='title d-flex flex-row justify-content-between'>
                        <div class='titles'>
                            <a href=''><h4>" . $rowJob['jobTitle'] . "<small> Published on " . $rowJob['jobPublished'] . "</small></h4></a>
                            <h6>By " . $locationName . "</h6>					
                        </div>
                        <ul>
                            <li><a class='btn btn-primary' href='./query_boxes/worker_accept_jobs.php?jobID=".$rowJob['jobID']."'>Apply</a></li>
                        </ul>
                    </div>
                    <p >" . $rowJob['jobCount'] . " pieces needs to do <label class='bg-warning'>" . $rowJob['jobType'] . ".</label> Every manpower member has to work at most " . $rowJob['jobPeriod'] . " days. 
                    <strong></strong> Job should be complete within " . $rowJob['jobPeriod'] . " days.</p>

                    <h5>Job Nature: <label class='bg-warning'>" . $rowJob['jobNature'] . "</label></h5>
                    <p class='address'><span class=''></span>".$rowLocation['locStreet'] . ", " . $rowLocation['locVillage'] . ", <label class='bg-warning'>" . $rowLocation['locCity']."</label></p>
                    <p class='address'><span class=''></span>" . $rowJob['workersJoined'] . " joined.</p>
                </div></div>";

            /*

            <div style='text-align:right'>
                    <p>(<font style='color:red;'>".$rowJob['jobPeriod']."</font>/".($rowJob['workerCount']+5).") joined
                        <a href='./query_boxes/worker_accept_jobs.php?jobID=".$rowJob['jobID']."'><button id='join_btn' class='btn btn-success' onclick="."show_div('job')".">Accept & Join</button></a>
                    </p>
                </div>
                </div>
            */


        }
    }else{
        echo "No any jobs found!";
    }
}
?>
