<?php
    $queryLoc="SELECT * FROM location LIMIT 10";
    $resultLoc=mysqli_query($conn,$queryLoc);

    if(mysqli_num_rows($resultLoc)>0){
        while($rowLoc=mysqli_fetch_assoc($resultLoc)){
           
            
            echo "<tr>
                  <td>".$rowLoc['locID']."</td>
                  <td>".$rowLoc['locName']."</td>
                  <td>".$rowLoc['locStreet']."</td>
                  <td>".$rowLoc['locVillage']."</td>
                  <td>".$rowLoc['locCity']."</td>
                  <td></td>";
          
        }
    }
                
?>
