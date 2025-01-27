
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TakeMe</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">

<link rel="stylesheet" href="/asset/sty.css">
<style>
        table{
            border-collapse: collapse;
            margin: 0 auto;
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

<div class="wrapper">

	<div class="section1">
    
    	<div class="pic-top"><img src="/asset/picture/pic-top.jpg" /></div>
        
        <div class="content">
			
			<h class="a2">
       	    RISING DRAGON</h>
            <br /><br />
			
            Ranking<br />
            Host who received most Chinese Dragon<br /><br />
            Click here for rank preview<br /><br />
		
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
        "</td><td>". ' <img src="' .cal($count). '" alt="User Logo" style="width: 50px; height: 50px;"> '."</td>";
     }
     // output data of each row
    //  while($row = $send_data_to_view_arr()) {
    //      echo "<tr><td>" . $row['subject']. "</td><td>" . $row['assessment_id']."</td><td>" . $row['next_assessment_id']. "</td><td>" . $row['last_assessment_id']. "</td></tr>";
    //  }
     echo "</table>";
} 
function cal($count){
if($count=='2'){
    return '/asset/picture/icon-คูปอง-5000-en.png' ;
}else if($count=='3'){
    return  '/asset/picture/icon-คูปอง-3000-en.png';
}else if($count=='4'){
    return  '/asset/picture/icon-คูปอง-2000-en.png';
}else if($count>'4'&& $count<'12'){
    return  '/asset/picture/icon-คูปอง-400-en.png';
}else{
    return  '/asset/picture/icon-คูปอง-100-en.png';
}
}

?>
            <h class="a1">EVENT DURATION</h>
			<br />
			21 JAN 2025 (10.00 AM) – 29 JAN 2025 (10.00 PM) GMT+7
            <br /><br />
			
            <h class="a1">EVENT DETAILS</h><br />
            ➤ Top 5 Broadcasters who receive most of gift,<br />
            will receive the rewards.<br />
            ➤ Broadcaster have to cumulate live/lock session/call<br />
            period total at least 5 hours, will be rewarded.<br />
            ➤ Broadcasters have to cumulate<br />
            gift more than 5,000 pieces, will be rewarded.<br /><br />

            <img src="/asset/picture/01.png" width="166" />
            <br />
            Chinese Dragon 20 Coupons<br />
            will receive 2 Coupons/piece
            <br /><br />

            <h class="a1">Event Rewards
            </h><br />
            40,000 coupons (5 reward)<br />
            <br />
   
            <h class="a2">Total reward of 200,000 coupons<br />
            <br />

        
        <div class="note">
        	<font size="+2">Remarks</font><br />
            ➤ For inquiries and problem report, contact<br />
			LINE: @takemeclub / Fb: @TakeMeFanClub<br />
            ➤ Checking and prize giving by the staff takes place within 5-7 days<br />
            after the event has been over,<br />
            ➤ In case of server maintenance or another reason causing players<br />
			cannot be online during event holding,event still ends as it was.<br />
            ➤ The team reserves the right not to count event points from gifts received<br />
            from users who have not made a top-up earlier.<br />
            ➤ In case of server maintenance or another reason<br />
            causing players cannot be online during event holding,<br />
            event still ends as it was.<br />
            ➤ Ranking and time mainly based on server.<br />
            ➤ Staff decision is final.<br />
			<b>Sponsor by WinNine Pacific : <a href="https://winnine.com.au/main.php" target="_blank">winnine.com.au</a></b><br />
            
            
		</div><!-- /note -->
        
        <div class="foot">WinNine Pacific Pty Ltd Level 20, Zenith Center, 821 Pacific Hwy, Chatswood NSW 2067 Australia</div>
   
    </div><!-- /section1 -->

</div><!-- /wrapper -->

</body>
</html>
