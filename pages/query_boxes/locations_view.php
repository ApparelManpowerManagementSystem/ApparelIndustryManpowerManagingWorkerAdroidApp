<?php
    $queryLoc="SELECT * FROM location LIMIT 10";
    $resultLoc=mysqli_query($conn,$queryLoc);

    if(mysqli_num_rows($resultLoc)>0){
        while($rowLoc=mysqli_fetch_assoc($resultLoc)){

            $locationAddress=$rowLoc['locStreet'].", ".$rowLoc['locVillage'].", ".$rowLoc['locCity'];
           
            
            echo "<div class='btn btn-default' style='margin:2px 0 5px 0;padding:10px;width:100%;text-align:left' data-target='#location_details_modal' data-toggle='modal'>
                    <div style='width:10%;display:inline'>
                        <img src='../Assests/locations/ocean_lanka.jpg' style='width:20%;padding:0;border:2px solid gold;'>
                    </div>
                    <div style='width:80%;display:inline;float:right;padding:4px;line-height:8%'>
                        <p><strong>".$rowLoc['locName']."</strong><hr></p>
                        <p>$locationAddress</p>
                    </div>
                </div>";
            echo"";
          
        }
    }
                
?>
