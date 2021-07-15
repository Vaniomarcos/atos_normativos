<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . 'db.php';

class EspecificicacaoOfertasSociaisDao
{
    function read()
    {
        DB::query("SELECT * FROM especificacao_ofertas_sociais");
        $registros = array();
        while ($registro = DB::fetch()) {
            $registros[] = $registro;
        }
        return $registros;
    }
}


