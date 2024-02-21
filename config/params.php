<?php

use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'defaultConfig' => (new ConfigVariables())->getDefaults(),
    'defaultFontConfig' => (new FontVariables())->getDefaults(),
    'SetFontTHsarabun' => [
        'R' => 'THSarabunNew/THSarabunNew.ttf',
        'B' => 'THSarabunNew/THSarabunNew Bold.ttf',
        'I' => 'THSarabunNew/THSarabunNew Italic.ttf',
    ],
    'SetFontTHSarabunNew' => [
        'R' => 'THSarabunNew/THSarabunNew.ttf',
        'B' => 'THSarabunNew/THSarabunNew Bold.ttf',
        'I' => 'THSarabunNew/THSarabunNew Italic.ttf',
    ],
    'SetFontGaruda' => [
        'R' => 'Garuda/Garuda.ttf',
        'B' => 'Garuda/GarudaBold.ttf',
    ],
    'SetFontAwesome' => [
        'R' => 'FontAwesome/fa-regular-400.ttf',
        'B' => 'FontAwesome/fa-regular-400.ttf',
    ],
];
