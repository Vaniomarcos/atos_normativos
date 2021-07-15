<?php
include_once 'DAO/OfertasSocioAssistenciais.php';
class OfertasSocioAssistenciaisController
{
    function read($dados)
    {
        $dao = new OfertasSocioAssistenciaisDAO();

        return $dao->read($dados);
    }
}
