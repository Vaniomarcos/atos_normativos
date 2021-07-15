<?php

include_once 'CONTROLLERS/AtoNormativo.php';
$atoNormativo = new AtoNormativoController();
$arrayAtoNormativo = $atoNormativo->read($_GET);

include_once 'DAO/ClassificacaoGeral.php';
$classificacaoGeral = new ClassificacaoGeralDao();
$arrayClassificacaoGeral = $classificacaoGeral->read();

include_once 'DAO/TipoAtoNormativo.php';
$tipoAtoNOrmativo = new TipoAtoNormativoDao();
$arrayTipoAtoNormativo = $tipoAtoNOrmativo->read();

include_once 'DAO/OfertasSocioAssistenciais.php';
$ofertasSocioAssistenciais = new OfertasSocioassistenciaisDao();
$arrayOfertasSocioAssistenciais = $ofertasSocioAssistenciais->read();

include_once 'DAO/EspecificacaoOfertasSociais.php';
$especificaoOfertaSociais = new EspecificicacaoOfertasSociaisDao();
$arrayEspecificacaoOfertasSociais = $especificaoOfertaSociais->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atos Normativos</title>
</head>

<body>
    <a href="/read">Listagem</a> <br><br>
    <form method="POST" action="/edit-be">
        Ato Normativo <input type="text" name="ato_normativo" value="<?php echo ($arrayAtoNormativo[0]['ato_normativo']); ?>"><br><br>
        Ementa <input type="text" name="ementa" value="<?php echo ($arrayAtoNormativo[0]['ementa']); ?>"><br><br>
        Ato Normativo Consolidado <input type="text" name="normativo_consolidado" value="<?php echo ($arrayAtoNormativo[0]['normativo_consolidado']); ?>"><br><br>
        Link do Diário Oficial <input type="text" name="link_diario" value="<?php echo ($arrayAtoNormativo[0]['link_diario']); ?>"><br><br>
        Ano <input type="text" name="ano" value="<?php echo ($arrayAtoNormativo[0]['ano']); ?>"><br><br>
        Classificação Geral <select name="fk_classificacao_geral" value="<?php echo ($arrayAtoNormativo[0]['fk_classificacao_geral']); ?>">
            <option value="">Selecione:</option>
            <?php foreach ($arrayClassificacaoGeral as $value) : ?>
                <?php
                if ($value['id'] == $arrayAtoNormativo[0]['fk_classificacao_geral']) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }

                ?>
                <option <?php echo $selected; ?> value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select><br><br>
        Tipo do Ato Normativo <select name="fk_tipo_ato_normativo" value="<?php echo ($arrayAtoNormativo[0]['fk_tipo_ato_normativo']); ?>">
            <option value="">Selecione:</option>
            <?php foreach ($arrayTipoAtoNormativo as $value) : ?>
                <?php
                if ($value['id'] == $arrayAtoNormativo[0]['fk_tipo_ato_normativo']) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }

                ?>
                <option <?php echo $selected; ?> value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select><br><br>
        Ofertas Socioassistenciais <select name="fk_ofertas_socioassistenciais" value="<?php echo ($arrayAtoNormativo[0]['fk_ofertas_socioassistenciais']); ?>">
            <option value="">Selecione:</option>
            <?php foreach ($arrayTipoAtoNormativo as $value) : ?>
                <?php
                if ($value['id'] == $arrayAtoNormativo[0]['fk_ofertas_socioassistenciais']) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }

                ?>
                <option <?php echo $selected; ?> value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select><br><br>
        Especificação das Ofetas Sociais <select name="fk_especificacao_ofertas_sociais" value="<?php echo ($arrayAtoNormativo[0]['fk_especificacao_ofertas_sociais']); ?>">
            <option value="">Selecione:</option>
            <?php foreach ($arrayTipoAtoNormativo as $value) : ?>
                <?php
                if ($value['id'] == $arrayAtoNormativo[0]['fk_especificacao_ofertas_sociais']) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }

                ?>
                <option <?php echo $selected; ?> value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Enviar">
        <input type="hidden" name="id" value="<?php echo ($arrayAtoNormativo[0]['id']); ?>">
    </form>
</body>

</html>