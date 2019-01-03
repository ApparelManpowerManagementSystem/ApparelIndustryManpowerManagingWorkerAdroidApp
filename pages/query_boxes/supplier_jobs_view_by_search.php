<?php

if(isset($_POST['search'])) {
   
    require_once '../../db_config/config.php';
    $value = $_POST['keyword'];
    $area = $_POST['select_area'];
    $category = $_POST['select_category'];
    $queryview = "SELECT * FROM supplier_job,location WHERE supplier_job.locationID=location.locID AND supplier_job.jobStatus='offline' AND (supplier_job.jobType='$category' OR location.locCity='$area') AND supplier_job.jobTitle='$value'";

    $result = mysqli_query($conn,$queryview);

    if (mysqli_num_rows($result) > 0) {

        while ($rowJob = mysqli_fetch_assoc($result)) {

            $locationID = $rowJob['locationID'];
            $queryLocation = "SELECT * FROM location WHERE locID='$locationID'";
            $resultLocation = mysqli_query($conn, $queryLocation);

            $rowLocation = mysqli_fetch_assoc($resultLocation);
            $locationName = $rowLocation['locName'];
            $locationAddress = $rowLocation['locStreet'] . ", " . $rowLocation['locVillage'] . ", " . $rowLocation['locCity'];


            echo "<div class='single-post d-flex flex-row'><div class='thumb'>
									<img src='../img/img-worker/post.png' alt=''>
									
								</div>
            <div class='details'>
                    <div class='title d-flex flex-row justify-content-between'>
                        <div class='titles'>
                            <a href=''><h4>" . $rowJob['jobTitle'] . "<small> Published on " . $rowJob['jobPublished'] . "</small></h4></a>
                            <h6>By " . $locationName . "</h6>					
                        </div>
                        <ul class='btns'>
                            <li><a href='#'>Apply</a></li>
                        </ul>
                    </div>
                    <p >" . $rowJob['jobCount'] . " pieces needs to do " . $rowJob['jobType'] . ". Every manpower member has to work at most " . $rowJob['jobPeriod'] . " days. 
                    <strong></strong> Job should be complete within " . $rowJob['jobPeriod'] . " days.</p>

                    <h5>Job Nature: " . $rowJob['jobNature'] . "</h5>
                    <p class='address'><span class=''></span>" . $locationAddress . "</p>
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
    }
}
?>
