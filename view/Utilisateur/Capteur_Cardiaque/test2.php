


<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G07A");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$data = curl_exec($ch);
curl_close($ch);

$data_tab = str_split($data, 33);
echo "Tabular Data:<br />";
$last_trame_index = count($data_tab) - 2; // Index of the last trame
$last_trame = $data_tab[$last_trame_index]; // Last trame
echo "Trame $last_trame_index: $last_trame<br />";

$trame = $last_trame;
// décodage avec des substring
$t = substr($trame, 0, 1);
$o = substr($trame, 1, 4);
// …
// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
    sscanf(
        $trame,
        "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s"
    );
echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");

echo "$v";
$dec = hexdec($v);
echo"$dec";
?>

