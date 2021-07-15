<?php
include_once 'DAO/AtoNormativo.php';
$AtoNormativo = new AtoNormativoDao();
$arrayAtoNormativo = $AtoNormativo->read();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atos Normativos</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <style>
        tr.escondido {
            display: none;
        }
    </style>
    <script>
        function pesquisar() {
            window.valorPesquisa = $('input#id').val();
            $('tbody>tr').each(function() {
                window.valorLinha = "";
                $(this).children().each(function() {
                    window.valorLinha = window.valorLinha + $(this).html();
                });
                $(this).addClass('escondido');
                if (window.valorLinha.includes(window.valorPesquisa)) {
                    $(this).removeClass('escondido');
                }
            });
        }
    </script>
</head>

<body>
    <a href="/insert">Criar</a>
    <div>
        <input type="text" id="id">
        <button onclick="pesquisar();">Pesquisar</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Ato Normativo</th>
                <th>Ementa</th>
                <th>Ato Normativo Consolidado</th>
                <th>Link Diário Oficial</th>
                <th>Ano</th>
                <th>Especificação de Ofertas Especiais</th>
                <th>Ofertas Socioassitenciais</th>
                <th>Tipo de Ato Normativo</th>
                <th>Classificação Geral</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrayAtoNormativo as $value) : ?>
                <tr>
                    <td><?php echo $value["ato_normativo"] ?></td>
                    <td><?php echo $value["ementa"] ?></td>
                    <td><?php echo $value["normativo_consolidado"] ?></td>
                    <td><?php echo $value["link_diario"] ?></td>
                    <td><?php echo $value["ano"] ?></td>
                    <td><?php echo $value["no_especificacao_ofertas_sociais"] ?></td>
                    <td><?php echo $value["no_ofertas_socioassistenciais"] ?></td>
                    <td><?php echo $value["no_ofertas_socioassistenciais"] ?></td>
                    <td><?php echo $value["no_ofertas_socioassistenciais"] ?></td>
                    <td>
                        <a href="/edit?id=<?php echo $value['id'] ?>">Editar</a>
                        <a href="/delete-be?id=<?php echo $value['id'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>