<?php
include_once 'CONTROLLERS/ClassificacaoGeral.php';
$classificacaoGeral = new ClassificacaoGeralDao();
$arrayClassificacaoGeral = $classificacaoGeral->read();

include_once 'CONTROLLERS/TipoAtoNormativo.php';
$tipoAtoNOrmativo = new TipoAtoNormativoDao();
$arrayTipoAtoNormativo = $tipoAtoNOrmativo->read();

include_once 'CONTROLLERS/OfertasSocioAssistenciais.php';
$ofertasSocioAssistenciais = new OfertasSocioassistenciaisDao();
$arrayOfertasSocioAssistenciais = $ofertasSocioAssistenciais->read();

include_once 'CONTROLLERS/EspecificacaoOfertasSociais.php';
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
    <form method="POST" action="/insert-be">
        Ato Normativo <input type="text" name="ato_normativo" id=""> <br><br>
        Ementa <input type="text" name="ementa" id=""><br><br>
        Ato Normativo Consolidado<input type="text" name="normativo_consolidado" id=""> <br><br>
        Link Diário Oficial <input type="text" name="link_diario" id=""> <br><br>
        Ano <input type="text" name="ano" id=""> <br><br>
        Classificação Geral <select name="fk_classificacao_geral" id="">
            <option value="">Selecione:</option>
            <?php foreach ($arrayClassificacaoGeral as $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select> <br><br>
        Tipo do Ato Normativo <select name="fk_tipo_ato_normativo" id="">
            <option value="">Selecione:</option>
            <?php foreach ($arrayTipoAtoNormativo as $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select> <br><br>
        Ofertas Socioassistenciais <select name="fk_ofertas_socioassistenciais" id="">
            <option value="">Selecione:</option>
            <?php foreach ($arrayOfertasSocioAssistenciais as $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select> <br><br>
        Especificação das Ofertas Sociais <select name="fk_especificacao_ofertas_sociais" id="">
            <option value="">Selecione: </option>
            <?php foreach ($arrayEspecificacaoOfertasSociais as $value) : ?>
                <option value="<?php echo $value["id"] ?>"><?= $value["descricao"] ?></option>
            <?php endforeach; ?>
        </select> <br><br>

        <input type="submit" value="Enviar">

    </form>
</body>

</html>