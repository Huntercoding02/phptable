<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky people</title>
    <link rel="stylesheet" href="/asset/color.css" />
    <style>
        table{
            border-collapse: collapse;
        }
        th{
            background-color: red;
        }
        /* tr{
            background-color: orange;
        } */
        .tr_col_1{
            background-color: orange;
        }
        .tr_col_2{
            background-color: burlywood;
        }
        .tr_col_3{
            background-color: aquamarine;
        }
    </style>
</head>
<body>


<?PHP
// print_r($send_data_to_view_arr);
if ($send_data_to_view_arr > 0) {
    $count =1;
     echo "<table><tr><th>No.</th><th>Detail</th><th>Note</th></tr>";
   


     foreach($send_data_to_view_arr as $row){
        $tr_color = "tr_col_1";
        if($count>'3' && $count<'11'){
            $tr_color = "tr_col_2";
        }
        if($count>'10'){
            $tr_color = "tr_col_3";
        }
        // else if($count>'10') {
        //     $tr_color = "tr_col_3";
        // }
        echo "<tr class='".$tr_color."'><td>" . $count++ .
        "</td><td>" . ' <img src="' . $row['user_logo'] . '" alt="User Logo" style="width: 50px; height: 50px;"> '.'<br>'.$row['username'] . '<br>'.
        $row['user_id'] . 
        "</td><td>".cal($count)."</td>";
     }
     // output data of each row
    //  while($row = $send_data_to_view_arr()) {
    //      echo "<tr><td>" . $row['subject']. "</td><td>" . $row['assessment_id']."</td><td>" . $row['next_assessment_id']. "</td><td>" . $row['last_assessment_id']. "</td></tr>";
    //  }
     echo "</table>";
} 
function cal($count){
if($count=='2'){
    return  '5,000';
}else if($count=='3'){
    return  '4,000';
}else if($count=='4'){
    return  '3,000';
}else{
    return  '500';
}
}
function color(){
  
}
?>

    

    

    <!-- <table style="border-collapse: collapse;">
        <tr>
        <th>No.</th>
        <th>Detail</th>
        <th>Note</th>
        </tr>
        <tr>
           
            <?PHP
            // $arr = array($send_data_to_view_arr);
            // // var_dump($arr);
            // $string = explode(",",$send_data_to_view_arr) ;
            // // var_dump("v1".$string);
            // for($i=0;$i<15;$i++){
            //     echo '<td>'.$string.'<td>';
            // }
// foreach($arr as $v){
//     echo '<td>'.$v.'<td>';
// }
?>
   </tr>
    </table> -->
    <?PHP
    
//    var_dump($arr) ;
    ?>
    
</body>
</html>