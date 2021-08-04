<?
$name = $_POST['name1'];
$phone = $_POST['phone1'];

$toEmail = "magicyn13@gmail.com";
$fromEmail = "info@selennaya.com";

$m_data ="Имя: $name, Телефон: $phone";


$success_url="http://lav.selennaya.com/shmatok.by/price-products-shmatok.pdf";
$header="Content-type:text/plain; charset = utf-8\r\nFrom:$fromEmail";

if($toEmail != ''){
 mail($toEmail,$them,$m_data,$header);
}
header("Location: " .$success_url);
exit;

 // if ($mailto != '')
 //   {
 //      mail($mailto, $subject, $body, $header);
 //   }
 //   header('Location: '.$success_url);
 //   exit;