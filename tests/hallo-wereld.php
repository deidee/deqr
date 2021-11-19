<?php

require '../vendor/autoload.php';
require '../src/Writer/SvgWriter.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use deidee\deQR\Writer\SvgWriter;

$writer = new SvgWriter;

$qrCode = QrCode::create('https://jeidee.nl/')
    ->setSize(300)
    ->setMargin(10)
    ->setForegroundColor(new Color(0, 0, 0, .5))
    ->setBackgroundColor(new Color(255, 255, 255));

$result = $writer->write($qrCode);

header('Content-Type: ' . $result->getMimeType());

echo $result->getString();
