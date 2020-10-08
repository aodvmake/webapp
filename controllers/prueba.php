<?php
require_once("../lib/phpqrcode/qrlib.php");
//$id=$user->lastInsertId();
/*QRcode::png('PHP QR Code :)');
$id="1";
QRcode::png($id,"../Imagen/QRL/qr_".$id.".png",'L',10,5);
$user->actualizar("productos","qr='qr_".$id.".png'","id=".$id);
mensaje("Producto insertado <a href='".urlsite."?pagina=productos'> CONTINUAR</a> ");

 $param = $_GET['id']; // remember to sanitize that - it is user input!
    
    // we need to be sure ours script does not output anything!!!
    // otherwise it will break up PNG binary!
    
    ob_start("callback");
    
    // here DB request or some processing
    $codeText = '1123 - '.$param,"../Imagen/QRL/qr_".$id.".png",'L',10,5";

    
    // end of processing here
    $debugLog = ob_get_contents();
    ob_end_clean();
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($codeText);
    $imcode=QRcode::png($codeText);
    move_uploaded_file($imcode,'../Imagen/QRL/'.$codeText);
    */
//its a location where generated QR code can be stored.

// If directory is not created, the create a new directory

//QRcode::png("Krisnha ya la chupo el diablo","../Imagen/QRL/239.png",'L',10,5);
$suma='2';

$sumas=$suma+1;
echo $sumas;  
?>