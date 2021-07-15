<?php
include_once 'DAO/EspecificacaoOfertasSociais.php';
class EspecificacaoOfertasSociaisController
{
    function read($dados)
    {
        $dao = new EspecificacaoOfertasSociaisDAO();

        return $dao->read($dados);
    }
}
