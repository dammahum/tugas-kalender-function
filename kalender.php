<?php
	$hari = date('t');	
	
	for($i=1; $i <= $hari; $i++){		
		if($i%7 == 1){		
			echo "<br>";
			echo "<span style='color:red;'>" . $i . "</span>";
		} else {
			echo $i;	
		}
	}
?>

<br /><br />

<?php
$bulan= date ("m");
$tahun=date("Y");
$jumlah_hari=date("t");
echo"<table>
	<tr>
	<th align=center><font color=red>Minggu</font></th>
	<th align=center>Senin</th>
	<th align=center>Selasa</th>
	<th align=center>Rabu</th>
	<th align=center>Kamis</th>
	<th align=center>Jumat</th>
	<th align=center>Sabtu</th>
	</tr>";
	
$s=date ("w", mktime (0,0,0,$bulan,1,$tahun));

for ($ds=1;$ds<=$s;$ds++) {
	echo "<td></td>";
	}
	for ($d=1;$d<=$jumlah_hari;$d++) {
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) { echo "<tr>"; 
		}
		
		$fontColor="#000";
		
		if (date("D",mktime (0,0,0,$bulan,$d,$tahun)) == "Sun") {
			$fontColor="red";
			}
			
		echo "<td align=center> <span style=\"color:$fontColor\"> $d </span></td>";

		if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6){
			echo "</tr>"; }
		}
echo "</table>";
?>