<?php
header('Content-type: application/pdf');
$file = 'original.pdf';

header('Content-Disposition: attachment; filename="downloaded.pdf"');
header('Content-Length: ' . filesize($file));
readfile('original.pdf');
