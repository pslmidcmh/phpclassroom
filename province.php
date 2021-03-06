<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<br><h2><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h2><br>";
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#FF99CC'><b>ลำดับ</b></td>
        <td bgcolor='#CC6699'><b>จังหวัด</b></td>
        <td bgcolor='#CCCCCC'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#FFCCFF'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#218B81'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#FFFF99'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#AAAAAA'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#336699'><b>ผู้เสียชีวิตรวม</b></td></font></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align= 'center'>";
    echo "<td bgcolor='#D8BFD8'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#FFCCCC'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#FFCCFF'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#CCFFCC'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#CCCCFF'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#99CCFF'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#E6E6FA'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#F5DEB3'>";
    echo $val->total_death;
    echo "</td>";
  }
  echo "</table><br>"; 

  echo "<center><b>วันที่อัปเดต</b></center>";
  echo $val->update_date;
  echo "</center>";
?>













?>
