<?php
	
    $queryJob="SELECT * FROM company_job WHERE jobStatus='cancle' LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            
            echo "<div style='border-radius:5px;border:1px solid lightgrey;text-align:left;width:100%;height:100%;border-left:6px solid red;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px' data-target='#update_company_job_modal' data-toggle='modal'>
                <strong>
                    <font style='font-size:15px'>
                        <p>Job Number ".$rowJob['jobID']." | ".$rowJob['jobTitle']." <lable class='btn btn-danger'>".$rowJob['jobStatus']."d<lable></p>
                    </font>
                </strong>

                <p>
                    Rejected by <lable class='btn btn-default' style='background-color:rgb(61, 63, 66);color:white'>Manpower Solutions</lable>
                </p>
                
                <p>Published on <font style='color:green;'>".$rowJob['jobDate']."</font>
                </p>
                <p>
                    <div style='text-align:right'>
                        <button  class='btn btn-danger'>Remove</button>
                    </div>
                </p>
                </div>";

        }
    }
    mysqli_close($conn);


?>