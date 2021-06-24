<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=CCCC");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);

$dataTab = str_split($data,33);
$newData = "";
$newDataTab = array();
$captorValues = array();

/*while(count($newDataTab)+3<count($dataTab)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=CCCC");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $newDataTab = curl_exec($ch);
    curl_close($ch);
    $newDataTab = str_split($newData,33);
}*/

for($i=1; $i>=0; $i--){
    //$trame = $newDataTab[count($newDataTab)-$i];
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
    sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    $date = "$year-$month-$day";
    $captorValues[$i] = hexdec($v);
}
echo $date;
echo $captorValues[0];
echo $captorValues[1];
?>