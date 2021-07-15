<?php
include_once 'CONTROLLERS/AtoNormativo.php';
$atoNormativoControll = new AtoNormativoController();
$atoNormativoControll->insert($_POST);
?>
<script>window.location.href = '/read';</script>