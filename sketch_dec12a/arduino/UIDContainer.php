<?php
$UIDresult = '345678';
$resultMapping = array(
    '123456' => 'Jilian Garette Abangan',
    '234567' => 'Daven Reez Nemenzo',
    '345678' => 'Mike Joseph Hubahib',
    '456789' => 'MIKE',
);

if (array_key_exists($UIDresult, $resultMapping)) {
    $output = $resultMapping[$UIDresult];
} else {
    $output = $UIDresult;
}
?>