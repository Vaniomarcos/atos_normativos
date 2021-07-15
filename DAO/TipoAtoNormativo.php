<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . 'db.php';

class TipoAtoNormativoDao
{
    function read()
    {
        DB::query("SELECT * FROM tipo_ato_normativo");
        $registros = array();
        while ($registro = DB::fetch()) {
            $registros[] = $registro;
        }
        return $registros;
    }
}
