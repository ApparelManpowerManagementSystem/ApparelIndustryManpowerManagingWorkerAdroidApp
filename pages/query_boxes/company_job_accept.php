<?php
    $queryJob="SELECT * FROM company_job,company WHERE company_job.jobStatus='offline' AND company_job.comID=company.comID LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            $date=date("y-m-d");
            echo "<a href='#' class='list-group-item'>
                        <p>".$rowJob['jobTitle']."</p>
                        
                        <p >Amount: ".$rowJob['jobAmount']." pieces</p>
                        
                        <p>Maximum Job Duration: ".$rowJob['jobPeriod']." days</p>
                        <p>Price: <font style='color:red'>Rs. ".$rowJob['jobPrice']."/=</font></p>
                        <p>Published on <font style='color:green;'>".$rowJob['jobDate']."</font> By ".$rowJob['comName']."
                        </p>
        
                        <p>
                            <div style='text-align:right'>
                                <button  class='btn btn-primary' data-target='#".$rowJob['jobID']."' data-toggle='modal'>Accept & Publish</button>
                                <button  class='btn btn-danger' data-target='#reject_warning_modal' data-toggle='modal'>Reject</button>
                            </div>
                        </p>

                </a>";
            echo "<div>
                    <div class='modal fade' id='".$rowJob['jobID']."' role='dialog'>
                        <div class='modal-dialog'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                               <h3>Publish Job ID ".$rowJob['jobID']."</h3>
                            </div>
                            
                            <div class='modal-body'>
                                <form action='./query_boxes/supplier_publish_jobs.php' autocomplete='on' method='post'>
                                    <div style='display:none' class='form-group'>
                                        <lable>Job Title<lable>
                                        <input value='".$rowJob['jobID']."' type='text' class='form-control' name='jobID' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Title<lable>
                                        <input value='".$rowJob['jobTitle']."' type='text' class='form-control' name='jobTitle' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Type<lable>
                                        <input value='".$rowJob['jobType']."' type='text' class='form-control' name='jobType' required readonly>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Quantity<lable>
                                        <input value='".$rowJob['jobAmount']."' type='text' class='form-control' name='jobAmount' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Duration<lable>
                                        <input value='".$rowJob['jobPeriod']."' type='text' class='form-control' name='jobPeriod' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Enter Worker Count<lable>
                                        <input type='text' class='form-control' name='workerCount' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Enter Location ID<lable>
                                        <input type='text' class='form-control' name='locID' required>
                                    </div>
                                    <div style='display:none' class='form-group'>
                                        <lable>Company ID<lable>
                                        <input value='".$rowJob['comID']."' type='text' class='form-control' name='compID' required readonly>
                                    </div>
                                    <div style='display:none' class='form-group'>
                                        <input value='".$rowJob['supID']."' type='text' class='form-control' name='suppID' required readonly>
                                    </div>
                                    <div style='display:none' class='form-group'>
                                        <lable>Job Publishing Date<lable>
                                        <input value='$date' type='text' class='form-control' name='jobPublishedD' required>
                                    </div>


                                    <div class='form-group'>
                                        <input type='submit' class='form-control btn btn-success' style='width:100%'' value='Publish Job' name='publishJob' required>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }
                
?>
