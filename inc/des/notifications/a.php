<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
include "../../sql.php";
session_start();
 if ($_COOKIE['lang']=="ar"){

    $print= 'ﻃﺒﻊ ﺑﻮاﺳﻄﺔ ';
    $date= 'بتاريخ  :';

}else if ($_COOKIE['lang']=="en"){
    $print= 'Printed By ';
    $date= 'date :';

}


 $user_id=$_SESSION['user_id'];
     $sql->selectall("user where id=$user_id ");
     $x=1;
     while ($row = $sql->res->fetch_assoc()) {
 if ($_COOKIE['lang']=="ar"){$name= $row['name'];}else if ($_COOKIE['lang']=="en"){$name= $row['name_en'];} 
 
} 

     $a='<div class="table-responsive" dir="'.$dir.'">
<table style="width: 100%;">
  <hr>
  <tr>
    <td style="text-align: left;"><span class="fw-medium">'.$print .$name .'</span>

    </td>
    <td style="text-align: center;"><span class="fw-medium">{PAGENO}</span>

    </td>
    <td style="text-align: right;">

      <span class="fw-medium"> '. $date . date("Y-m-d   h:i:s").' </span><br>
       
    </td>
  </tr>
</table>

 
 </div>';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html']) && isset($_POST['css'])) {
    $html = urldecode($_POST['html']);
    $css = urldecode($_POST['css']);
    
    // اﺧﺘﻴﺎﺭ اﻻﺗﺠﺎﻩ (RTL ﺃﻭ LTR) ﺑﻨﺎءً ﻋﻠﻰ اﻟﻠﻐﺔ
    $dir = ($_COOKIE['lang'] == "ar") ? 'rtl' : 'ltr';

    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4',
        'default_font_size' => 12,
        'default_font' => 'dejavusans',
        'orientation' => 'P',
        'directionality' => $dir,
        'autoLangToFont' => true,
        'autoScriptToLang' => true,
        'margin_left' => 5,   // ﻫﺎﻣﺶ اﻟﻴﺴﺎﺭ
        'margin_right' => 5,  // ﻫﺎﻣﺶ اﻟﻴﻤﻴﻦ
        'margin_top' => 5,    // ﻫﺎﻣﺶ ﺃﻋﻠﻰ
        'margin_bottom' => 10, // ﻫﺎﻣﺶ ﺃﺳﻔﻞ
        'showFooter' => true, // ﻇﻬﻮﺭ اﻟﺘﺬﻳﻼﺕ
          'showpagenumbers' => true, // ﺇﻇﻬﺎﺭ ﺃﺭﻗﺎﻡ اﻟﺼﻔﺤﺎﺕ
    ]);


 

$mpdf->setFooter($a);
    // اﻟﺘﺄﻛﺪ ﻣﻦ ﺗﺮﻣﻴﺰ اﻟﻤﺤﺘﻮﻯ ﺑﺘﺮﻣﻴﺰ UTF-8
    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
    $css = mb_convert_encoding($css, 'UTF-8', 'UTF-8');

    // ﺗﻀﻤﻴﻦ ﻣﻠﻔﺎﺕ CSS ﻓﻲ ﻣﻠﻒ PDF
    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

    // ﺗﻀﻤﻴﻦ ﻣﺤﺘﻮﻯ HTML ﺇﻟﻰ PDF
    $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output('file.pdf', 'F' );
    readfile('file.pdf');
} else {
    echo 'Invalid request';


}
?>
