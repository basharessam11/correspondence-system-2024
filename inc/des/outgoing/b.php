<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
 
 
 

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html']) && isset($_POST['css'])) {
        $html = urldecode($_POST['html']);
        $css = urldecode($_POST['css']);

 
 
        

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'default_font_size' => 12,
            'default_font' => 'dejavusans',
            'orientation' => 'P',
            'directionality' => 'rtl',
            'autoLangToFont' => true,
            'autoScriptToLang' => true,
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 35,
            'margin_bottom' => 35,
            'margin_header' => 0,
            'margin_footer' => 0,
        ]);

        $header_html = ''; // قم بتعيين HTML الهيدر هنا
        $footer_html = ''; // قم بتعيين HTML الفوتر هنا
        // تعيين الهيدر والفوتر
        $mpdf->SetHTMLHeader($header_html);
        $mpdf->SetHTMLFooter($footer_html);

        // تأكد من ترميز المحتوى بترميز UTF-8
        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        $css = mb_convert_encoding($css, 'UTF-8', 'UTF-8');

        // تضمين ملفات CSS في ملف PDF
        $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

        // تضمين محتوى HTML إلى PDF
        $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

        // إخراج ملف PDF
        $mpdf->Output('file.pdf', 'F');
        readfile('file.pdf');
    } else {
        echo 'Invalid request';
    }
 
?>
