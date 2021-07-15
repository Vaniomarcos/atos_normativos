<?php
include_once 'CONTROLLERS/AtoNormativo.php';
$atoNormativoControll = new AtoNormativoController();
$atoNormativoControll->delete($_GET);
?>
<script>
    window.location.href = '/read';
</script>