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
  	  	  	มังกรผงาด
            </h><br /><br />
			
            อันดับ<br />
            วีเจที่ได้รับ Chinese Dragon มากที่สุด<br /><br />
			
			ปุ่ม กดดูอันดับ เพิ่มเติม <br /><br />
            
            <?PHP
// print_r($send_data_to_view_arr);
if ($send_data_to_view_arr > 0) {
    $count =1;
     echo "<table><tr><th>อันดับ</th><th>รายชื่อ</th><th>รางวัล</th></tr>";
   


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
    return '/asset/picture/icon-คูปอง-5000.png' ;
}else if($count=='3'){
    return  '/asset/picture/icon-คูปอง-3000.png';
}else if($count=='4'){
    return  '/asset/picture/icon-คูปอง-2000.png';
}else if($count>'4'&& $count<'12'){
    return  '/asset/picture/icon-คูปอง-400.png';
}else{
    return  '/asset/picture/icon-คูปอง-100.png';
}
}

?>
			<h class="a1">ระยะเวลากิจกรรม</h>
            <br />
            21 มกราคม 2568 (10.00 น.) – 29 มกราคม 2568 (22.00 น.)
            <br /><br />
			
            <h class="a1">รายละเอียดกิจกรรม VJ</h><br />
            ➤ VJ ที่ได้รับของขวัญมากที่สุด 5 อันดับแรก จะได้รับรางวัล<br />
            ➤วีเจจะต้องมีเวลาไลฟ์ / เวลาไลฟ์ล็อกห้อง / รับสาย <br />
            รวมกัน 5 ชั่วโมงขึ้นไป จึงจะได้รับรางวัล<br />
            หากไม่ครบตามกำหนดจะไม่ได้รับรางวัล<br />
            ➤ วีเจที่ได้รับรางวัลจะต้องมีของขวัญ ขั้นต่ำ 5,000 ชิ้น<br /><br />

            <img src="/asset/picture/01.png" width="166" />
            <br />
            Chinese Dragon 20 คูปอง<br />
            ได้รับ 2 คูปอง ต่อชิ้น<br /><br />

            <h class="a1">รางวัลกิจกรรม VJ
            </h><br />
            40,000 คูปอง จำนวน 5 รางวัล<br />
            <br />
            <h class="a2">รวม 200,000 คูปอง
            </h><br /><br />

        
        <div class="note">
        	<font size="+2">หมายเหตุ</font><br />
            ➤ สอบถามข้อมูลและแจ้งปัญหาติดต่อ LINE: @takemeclub / Fb: @TakeMeFanClub<br />
            ➤ กิจกรรมใดที่จัดอยู่ในช่วงเวลาปิดเซิร์ฟเวอร์หรือเหตุใดๆ<br />
			ที่ทำให้ไม่สามารถออนไลน์ได้จะยึดเวลาจบกิจกรรมตามเดิม<br />
            ➤ ทีมงานขอสงวนสิทธิ์จะไม่นับคะแนนกิจกรรม ที่ได้รับของขวัญจากยูสที่ไม่มีการเติมเงิน<br />
            ➤ ทีมงานจะตรวจสอบรางวัลให้ภายใน 5-7 วันทำการหลังจบกิจกรรม<br />
            ➤ กิจกรรมที่จัดอยู่ในช่วงเวลาปิดเซิร์ฟเวอร์หรือเหตุที่ทำให้ไม่สามารถออนไลน์ได้<br />
            จะยึดเวลาจบกิจกรรมตามเดิม<br />
            ➤ อันดับและเวลาอ้างอิงตาม Server เป็นหลัก<br />
            ➤ ขอสงวนสิทธิ์ในการเปลี่ยนแปลงรายละเอียด โดยไม่ต้องแจ้งให้ทราบล่วงหน้า<br />
            ➤ คำตัดสินของทีมงานถือว่าเป็นที่สิ้นสุด<br />
			<b>Sponsor by WinNine Pacific : <a href="https://winnine.com.au/main.php" target="_blank">winnine.com.au</a></b><br />

		</div><!-- /note -->
        
        <div class="foot">WinNine Pacific Pty Ltd Level 20, Zenith Center, 821 Pacific Hwy, Chatswood NSW 2067 Australia</div>
   
    </div><!-- /section1 -->

</div><!-- /wrapper -->

</body>
</html>
