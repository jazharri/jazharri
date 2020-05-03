<?php
    $to = "jazharri@gmail.com";
    $subject = "Test Notifikasi";
    $header_email = "";

    //$txt =
    $txt = "
    <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns:m='http://schemas.microsoft.com/office/2004/12/omml' xmlns='http://www.w3.org/TR/REC-html40'>".$header_email."
        <body lang=EN-US link=blue vlink=purple>
            <div class=WordSection1>
            <p class=MsoNormal>Yth. Bapak/Ibu <b>Juan Azharri</b></p>
            <p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
            <p class=MsoNormal>Selamat! Anda telah berhasil melakukan reservasi jadwal HaloAnalis pada:</p>
            <p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
            <table>
                <tr>
                    <th align='left'>Tanggal<th>
                    <th align='left'>:<th>
                    <th align='left'>12 Juli 2020<th>
                <tr>
                <tr>
                    <th align='left'>Waktu<th>
                    <th align='left'>:<th>
                    <th align='left'>10.00 - 12.00 WIB<th>
                <th>				
                <tr>
                    <th align='left'>Analis<th>
                    <th align='left'>:<th>
                    <th align='left'>analisnya<th>
                <tr>		
            </table>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
            <p class=MsoNormal>Dengan data diri sebagai berikut :</p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <table>
                <tr>
                    <th align='left'>Nama<th>
                    <th align='left'>:<th>
                    <th align='left'>Juan Azharri<th>
                <tr>		
                <tr>
                    <th align='left'>Email<th>
                    <th align='left'>:<th>
                    <th align='left'>".$to."<th>
                <th>							
                <tr>
                    <th align='left'>No. HP<th>
                    <th align='left'>:<th>
                    <th align='left'>081210671999<th>
                <tr>
            </table>				
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <p class=MsoNormal>Mohon melakukan pembayaran senilai total Rp1.000.000 (jumlah pilihan waktu dikali rate analis yang dipilih)* dengan cara transfer ke rekening bank: Mandiri 1040004019282 atau BCA 4783011916 a/n PT MNC Sekuritas dengan mencantumkan keterangan berupa nama Anda.</p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>				
            <p class=MsoNormal>Setelah transfer, upload bukti pembayaran Anda melalui https://www.mncsekuritas.id/HaloAnalis#konfirmasi</p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <p class=MsoNormal>Terima kasih atas perhatian Anda.</p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <p class=MsoNormal><span style='color:#000082'><o:p>&nbsp;</o:p></span></p>
            <div>
                <p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
                <p class=MsoNormal><span style='color:#1F497D'>Regards,<o:p></o:p></span></p>
                <p class=MsoNormal><span style='color:#1F497D'><o:p>&nbsp;</o:p></span></p>
                <p class=MsoNormal><span style='color:#1F497D'>Call Center MNC Sekuritas</span><span style='font-size:12.0pt;color:#1F497D'><o:p></o:p></span></p>
                <p class=MsoNormal><span style='font-size:8.0pt;color:#1F497D'>&nbsp;</span></p>
                <p class=MsoNormal><span style='font-size:12.0pt;color:#1F497D'><img border=0 src='https://www.mncsekuritas.id/logo_kecil.png' alt='MNC sekuritas New email-01'></span></p>
                <p class=MsoNormal><b><span style='color:#1F497D'>MNC Financial Center, 16th Floor</span></b></p>
                <p class=MsoNormal><span style='color:#1F497D'>Jalan Kebon Sirih Kav. 21 - 27 </span></p>
                <p class=MsoNormal><span style='color:#1F497D'>Jakarta 10340</span></p>
                <p class=MsoNormal><b><span style='font-size:14.0pt;color:#1F497D'>Call Center 1500 899 (tekan 3)</span></b></p>
                <p class=MsoNormal>&nbsp;</p>
            </div>
            <p class=MsoNormal>&nbsp;</p></div>
        </body>
    </html>
    ";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   $headers = "From: juan.azharri@gmail.com" . "\r\n" .
   "CC: admin@teamkopi.com";

   mail($to,$subject,$txt,$headers);
