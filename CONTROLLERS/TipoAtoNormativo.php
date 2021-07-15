<?php
include_once 'DAO/TipoAtoNormativo.php';
class TipoAtoNormativoController
{
    function read($dados)
    {
        $dao = new TipoAtoNormativoDAO();

        return $dao->read($dados);
    }
}
