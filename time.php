<?php

$return_arr= array("North Square"=>"6 min",
    "West Market"=>"10 min"
    );
$sno=2;
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