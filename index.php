<?php
include 'view/template-parts/header.php';

$view = new IndicationController();
$view->index();

include 'view/template-parts/footer.php';