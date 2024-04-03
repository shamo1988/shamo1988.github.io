<?php
sleep(1);
     if ($_POST) {
		 

        $isim = $_REQUEST['ad'];
        $email = $_REQUEST['email'];
		 $telefon = $_REQUEST['telefon'];
		$mesaj = $_REQUEST['mesaj'];
$konu = $_REQUEST['konu'];
      // Set your email address where you want to receive emails. 
       $to = "info@ems-yapi.com";
       $subject = 'EMS YAPI- WEBSİTE İletişim form';
			$headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: ".$isim." <".$email."> \r\n";
	$mesaj2 = "Ad Soyad: ".$isim." <br>E-posta: ".$email." <br>Telefon: ".$telefon." <br>Konu: ".$konu." <br><br><br>Mesaj: ".$mesaj."<br><br><br>
			  ";
            $send_email = mail($to,$subject,$mesaj2,$headers);


       echo ($send_email) ? 'success' : 'error';

  }?>