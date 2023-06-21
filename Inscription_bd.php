<?php

require __DIR__ ."/vendor/autoload.php";
use Dompdf\Dompdf;
use Dompdf\Options;

$forme_1 = $_POST["forme_1"];
$forme_2 = $_POST["forme_2"];
$forme_3 = $_POST["forme_3"];
$forme_4 = $_POST["forme_4"];
$phone_1 = $_POST['Phone_1'];
$phone_2 = $_POST["Phone_2"];
$forme_5 = $_POST["forme_5"];
$forme_6 = $_POST["forme_6"];
$forme_7 = $_POST["forme_7"];
$forme_8 = $_POST["forme_8"];
$forme_9 = $_POST['forme_9'];

$forme_10 = $_POST["forme_10"];
$forme_11 = $_POST["forme_11"];
$forme_12 = $_POST["forme_12"];
$forme_13 = $_POST["forme_13"];
$forme_14 = $_POST["forme_14"];
$forme_15 = $_POST["forme_15"];
$forme_16 = $_POST["forme_16"];
$forme_17 = $_POST["forme_17"];
$forme_18 = $_POST["forme_18"];
$forme_19 = $_POST["forme_19"];
$forme_20 = $_POST["forme_20"];
$forme_21 = $_POST["forme_21"];
$forme_22 = $_POST["forme_22"];
$forme_23 = $_POST["forme_23"];
$forme_24 = $_POST["forme_24"];
$forme_25 = $_POST["forme_25"];
$forme_26 = $_POST["forme_26"];
$forme_27 = $_POST["forme_27"];
$forme_28 = $_POST["forme_28"];

$valeur = [$forme_1, $forme_2, $forme_3, $forme_4, $phone_1, $phone_2, $forme_5, $forme_6, $forme_7, $forme_8, $forme_9, $forme_10, $forme_11, $forme_12, $forme_13, $forme_14, $forme_15, $forme_16, $forme_17, $forme_18, $forme_19, $forme_20, $forme_21, $forme_22, $forme_23, $forme_24, $forme_25, $forme_26, $forme_27, $forme_28];
$variable = ["{{forme_1}}", "{{forme_2}}", "{{forme_3}}", "{{forme_4}}", "{{phone_1}}", "{{phone_2}}", "{{forme_5}}", "{{forme_6}}", "{{forme_7}}", "{{forme_8}}", "{{forme_9}}", "{{forme_10}}", "{{forme_11}}", "{{forme_12}}", "{{forme_13}}", "{{forme_14}}", "{{forme_15}}", "{{forme_16}}", "{{forme_17}}", "{{forme_18}}", "{{forme_19}}", "{{forme_20}}", "{{forme_21}}", "{{forme_22}}", "{{forme_23}}", "{{forme_24}}", "{{forme_25}}", "{{forme_26}}", "{{forme_27}}", "{{forme_28}}"];


for ($i = 0; $i < count($valeur); $i++) {
    if (empty($value[$i])) {
        ${"forme_" . ($i + 1)} = NULL;
    }

    if ($i == 4 && empty($phone_1)) {
        $phone_1 = NULL;
    }

    if ($i == 5 && empty($phone_2)) {
        $phone_2 = NULL;
    }
}




$option = new Options;
$option->setChroot(__DIR__);
$option->setIsRemoteEnabled(true);

$dompdf = new Dompdf($option);
$dompdf->setPaper("A4","portrait");

$html = file_get_contents("Template.html");



$html =str_replace($variable,$valeur,$html);
$dompdf->loadHtml($html);




$dompdf->render();
$dompdf->addInfo("Title","BEREKIA");
$dompdf->stream("BEREKIA.pdf",["Attachment" => 0 ]);

/*$resultat = $dompdf->output();
file_put_contents("/BEREKIA.pdf",$resultat);

*/
?>

