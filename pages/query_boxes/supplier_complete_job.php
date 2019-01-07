<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../../mail/vendor/autoload.php';

    if(isset($_POST['completeJob'])){
        require_once('../../db_config/config.php');
        $jobID=$_POST['jobID'];
        $unit=$_POST['unitPrice'];
        print_r($_POST);
        $query1="UPDATE supplier_job SET jobStatus='done' WHERE jobID='$jobID'";
        
        
        
        if(mysqli_query($conn,$query1)){
            $query4="SELECT * FROM worker_pending,worker,supplier_job WHERE worker_pending.workerID=worker.workerID AND worker_pending.jobID=supplier_job.jobID AND worker_pending.jobID=$jobID";
            $result4=mysqli_query($conn,$query4);
            if(mysqli_num_rows($result4)>0){
                while($row=mysqli_fetch_assoc($result4)){
                    $jobID=$row['jobID'];
                    $userID=$row['workerID'];
                    
                    $query6="SELECT count(id) AS leaveCount FROM worker_leaves WHERE JobID='$jobID' AND workerID='$userID'";
                    $result6=mysqli_query($conn,$query6);
                    if(mysqli_num_rows($result6)>0){
                        $row6=mysqli_fetch_assoc($result6);
                        $leaveCount=$row6['leaveCount'];
                        $totalPay=$row['jobPeriod']*$unit-($leaveCount*$unit/2);

                        $query7="INSERT INTO invoice VALUES(NULL,'$jobID','$userID','$totalPay',0)";
                        mysqli_query($conn,$query7);
                    }
                    
                }
                echo "add";
                
            }
            $query9="SELECT * FROM worker_pending,worker,supplier_job WHERE worker_pending.workerID=worker.workerID AND worker_pending.jobID=supplier_job.jobID AND worker_pending.jobID=$jobID";
            $result9=mysqli_query($conn,$query9);
            if(mysqli_num_rows($result9)>0){
                $row9=mysqli_fetch_assoc($result9);
                $comID=$row9['comID'];
                $price=$row9['jobPrice'];
                $query8="INSERT INTO invoice VALUES(NULL,'$jobID','$comID','$price',0)";
                if(mysqli_query($conn,$query8)){
                    echo "added";
                }
                $comjobID=
                $query2="UPDATE company_job SET jobStatus='done' WHERE jobID=".$row9['comJobID']."";
                if(mysqli_query($conn,$query2)){
                    echo "<script>window.location.replace('../supplier.php');alert('Temporary leave success');</script>";
                }
                
            }
            
            
                
                
               
        }
        
        
    }
    


?>