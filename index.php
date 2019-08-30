<?php
    $ch = curl_init("https://bx.in.th/api/"); // add your url which contains json file
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($content, true);
    //print_R($json);
    $count=count($json);
    echo'<th>เหรียญ</th><th>ราคาล่าสุด  (บาท)</th>';
    for($i=0;$i<$count;$i++)
    {
      echo'<tr><td>'.$json[$i]['secondary_currency'].'</td><td>'.$json[$i]['last_price'].'</td></tr>';
    }
?>
