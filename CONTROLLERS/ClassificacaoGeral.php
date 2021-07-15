<?php
include_once 'DAO/ClassificacaoGeral.php';
class ClassificacaoGeralController
{
    function read($dados)
    {
        $dao = new ClassificacaoGeralDao();

        return $dao->read($dados);
    }
}
