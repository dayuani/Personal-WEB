<?php 

    $userName=$_POST["fullname"];
    $userEmail=$_POST["email"];
    $userMssage=$_POST["msg"];
    
    
    // tahap pengiriman pesan
        $to = "info@dayuani.com";   //penerima email
        $subject = "info pembuatan website";    //Judul Pesan 


        $msg='
        <p>Berikut ini adalah data pengunjung website yang mengirimkan pesan  melalui <strong>halaman Contact Us</strong> </p>
        <table>
            <tr>
                <th>Nama Lengkap</th>
                <th>:<th>
                <td>'.$userName.'</td>
            </tr>
            <tr>
                <th>Email</th>
                <th>:<th>
                <td>'.$userEmail.'</td>
            </tr>
            <tr>
                <th>Pesan</th>
                <th>:<th>
                <td>'.$userMssage.'</td>
            </tr>
        </table>
        <p>Demikian pesan dari website, Terimakasi</p>
        <h3>System Web</h3>';

        // PhpMailer
        include "classes/class.phpmailer.php";
        $mail = new PHPMailer; 
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = "dayuani.com"; //host masing2 provider email
        $mail->SMTPDebug = 0;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "info@dayuani.com"; //user email
        $mail->Password = "(D4yuAn1*2024"; //password email 
        $mail->SetFrom($userEmail,$userName); //set email pengirim
        $mail->Subject =  $subject; //subyek email
        $mail->AddAddress($to,"Admin WEB");  //tujuan email
        $mail->MsgHTML($msg);


        if($mail->Send()) 
        {
            header('location:send-succes.html');
        }
        else{
            header('location:send-fail.html');
        }
    // echo $userName; echo "<br>";
    // echo $userEmail; echo "<br>";
    // echo $userMssage; echo "<br>";
?>

