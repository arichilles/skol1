<?php
//SCRIPT NYA JGN DI OTAK-ATIK NANTI ERROR
//Date: 15-04-2018
//Fitur: KTP & KK Generate
//Author: ZeroSvn || BabbyCyberTeam
@ini_set('output_buffering',0);
$data = array('7371036708490001 | 7371033011991638');
$data2 = $data[array_rand($data)];
$data3 = explode(' | ', $data2);
//$ktp = base64_encode($data3[0]);
//$kk = base64_encode($data3[1]);
$ktp = $data3[0];
$kk = $data3[1];
//$data4 = array('KTP' => $ktp, 'NO_KK' => $kk);
//print(json_encode(array('src'=>'Hasil', 'result'=>$data4)));
echo ".::[ KTP & KK Generate ]::.\n\n";
echo "decoded by ari efendi || www.batukel.com\n";
echo "Thanks To; zerovn || babby cyber team\n\n";
echo "No. KTP : ".$ktp."\n";
echo "No. KK : ".$kk."\n";
?>
