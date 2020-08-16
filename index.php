<?php

$result = '';
$data = ['H', 'E', 'L', 'L', 'O'];
foreach ($data as $i => $letter) {
    if (strlen($result) === 4) {
        $result .= ' template';
        break;
    }
    if ($i >= 0) {
        $result .= strtolower($letter);
    }
}
echo ucfirst(str_replace('template', 'YEAH', $result));
