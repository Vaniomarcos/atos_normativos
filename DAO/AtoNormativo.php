<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . 'db.php';

class AtoNormativoDao
{
    function read($id = NULL)
    {
        if (empty($id)) {
            DB::query("SELECT 
            an.*, 
            cg.descricao as no_claficacao_geral, 
            tan.descricao as no_tipo_ato_normativo, 
            eos.descricao as no_especificacao_ofertas_sociais,
            os.descricao as no_ofertas_socioassistenciais
        FROM ato_normativo as an
        left join classificacao_geral cg 
            on fk_classificacao_geral = cg.id 
        left join tipo_ato_normativo tan 
            on fk_tipo_ato_normativo = tan.id
        left join especificacao_ofertas_sociais eos 
            on fk_especificacao_ofertas_sociais = eos.id
        left join ofertas_socioassistenciais os 
            on fk_ofertas_socioassistenciais = os.id");
        } else {
            DB::query("SELECT * FROM ato_normativo where id=:id", $id);
        }

        $registros = array();
        while ($registro = DB::fetch()) {
            $registros[] = $registro;
        }
        return $registros;
    }

    function insert($dados)
    {
        return DB::query(
            "INSERT INTO ato_normativo
        (ato_normativo, ementa, normativo_consolidado, link_diario, ano, fk_especificacao_ofertas_sociais, fk_ofertas_socioassistenciais, fk_tipo_ato_normativo, fk_classificacao_geral)
        VALUES(:ato_normativo, :ementa, :normativo_consolidado, :link_diario, :ano, :fk_especificacao_ofertas_sociais, :fk_ofertas_socioassistenciais, :fk_tipo_ato_normativo, :fk_classificacao_geral);",
            $dados
        );
    }

    function update($dados)
    {
        DB::query("UPDATE ato_normativo
        SET ato_normativo=:ato_normativo, ementa=:ementa, normativo_consolidado=:normativo_consolidado, link_diario=:link_diario, ano=:ano, 
        fk_especificacao_ofertas_sociais=:fk_especificacao_ofertas_sociais, fk_ofertas_socioassistenciais=:fk_ofertas_socioassistenciais, 
        fk_tipo_ato_normativo=:fk_tipo_ato_normativo, fk_classificacao_geral=:fk_classificacao_geral
        WHERE id=:id;
        ", $dados);
    }

    function delete($dados)
    {
        DB::query("DELETE FROM ato_normativo
        WHERE id=:id;", $dados);
    }
}
