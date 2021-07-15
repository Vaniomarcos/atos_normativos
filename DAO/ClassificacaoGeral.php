<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . 'db.php';

class ClassificacaoGeralDao
{
    function read()
    {
        DB::query("SELECT * FROM Classificacao_geral");
        $registros = array();
        while ($registro = DB::fetch()) {
            $registros[] = $registro;
        }
        return $registros;
    }
}


