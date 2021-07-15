<?php
include_once 'CONTROLLERS/AtoNormativo.php';
$atoNormativoControll = new AtoNormativoController();
$atoNormativoControll->update($_POST);
?>
<script>window.location.href = '/read';</script>