<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . 'db.php';

class OfertasSocioassistenciaisDao
{
    function read()
    {
        DB::query("SELECT * FROM ofertas_socioassistenciais");
        $registros = array();
        while ($registro = DB::fetch()) {
            $registros[] = $registro;
        }
        return $registros;
    }
}
