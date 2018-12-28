<?php
    
    $query="SELECT * FROM worker";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<div style='border-radius:20px;border:1px solid lightgrey;border-left:6px solid grey;margin:2px 0 5px 0;padding:10px;width:100%;text-align:left'>
                    <p><strong><i class='fa fa-user' aria-hidden='true'></i> Mr. ".$row['workerName']." | ".$row['workerID']."</strong><hr></p>
                    <p>
                        
                       <i class='fa fa-phone' aria-hidden='true'></i> (+94)".$row['workerPhone']."
                       <i class='fa fa-envelope' aria-hidden='true'></i> ".$row['workerEmail']."
                    </p>

                    <p>
                        <div style='text-align:right'>
                            <form action='./query_boxes/supplier_remove_worker.php' autocomplete='on' method='POST'>                        
                                <div class='form-group'>
                                    <input style='width:25%;display:none' type='text' value='".$row['workerID']."' name='workerID' required>
                                    <input style='width:150px' type='submit' class='form-control btn btn-primary' value='Remove Worker' name='removeWorker' required>
                                </div>
                            </form>
                        </div>
                    </p>
                </div>";;
        }
        
    }


?>