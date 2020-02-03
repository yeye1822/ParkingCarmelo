<?php

require_once 'views/vStruture.php';
require_once 'views/vLogin.php';

$vStructure = new vStructure();

$vStructure->head();

require_once 'views/vlogin.php';
require_once 'views/vEnterPlate.php';


$vStructure->footer();