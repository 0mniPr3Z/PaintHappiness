<?php
echo'<h2>Ce site a été réalisé par (ci-après désigné comme l\'ÉDITEUR):</h2>';

$id = 1;
include'inc/brik/enterprise.php';

echo'<h2>Pour (ci-après désigné comme le BENEFICIAIRE):</h2>';
$id = 2;
include'inc/brik/enterprise.php';

echo '<h2>Ce site est hébergé par (ci-après désigné comme l\'HÉBERGEUR):</h2>';
$id = 3;
include'inc/brik/enterprise.php';

include'legal/mentionslegales2.php';
?>