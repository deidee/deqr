<?php

require '../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Writer\SvgWriter;

$writer = new SvgWriter;

$qrCode = QrCode::create('https://github.com/deidee/deqr')
    ->setSize(300)
    ->setMargin(10)
    ->setForegroundColor(new Color(0, 0, 0))
    ->setBackgroundColor(new Color(255, 255, 255));

$result = $writer->write($qrCode);

//header('Content-Type: ' . $result->getMimeType());

?>
<img src="<?= $result->getDataUri() ?>" alt="">
