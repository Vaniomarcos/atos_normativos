<?php
include_once 'DAO/AtoNormativo.php';
class AtoNormativoController
{
    function insert($dados)
    {
        $dao = new AtoNormativoDao();
        return $dao->insert($dados);
    }

    function read($dados)
    {
        $dao = new AtoNormativoDao();
        if (!empty($dados["id"])) {
            return $dao->read($dados);
        } else {
            return array();
        }
    }

    function update($dados)
    {
        $dao = new AtoNormativoDao();
        return $dao->update($dados);
    }

    function delete($dados)
    {
        $dao = new AtoNormativoDao();
        return $dao->delete($dados);
    }
}
