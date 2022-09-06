<?php

  $return_arr = array();
  #........Array Block.........
  $return_arr= array("Central Station"=>"3 min",
                      "Circular"=>"5 min"
                      );
     $sno=0;
     #....Foreach Loop.......
   foreach ($return_arr as $key => $data) {
    $sno=$sno+1;
    echo"<tr>
       <td scope='row'>".$sno."</td>
       <td id='key'>". $key . "</td>
       <td id='data'>".$data."</td></tr>
       ";
    }

   
   
       
?>
