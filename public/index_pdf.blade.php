<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentItem;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.mim.css') }}">
    <title>Declaração</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <!-- <link rel="stylesheet" href="public/css/index-pdf.css"> -->
    <?php

    use PDO;

    /* 	$usuario = "viaexp72_viaport";
        $senha = "j+pW(Ye^&S4u";
        $dbname = "viaexp72_viaexpressaportaria"; */

    //Criar a conexao
     $conn = new PDO('mysql:host=localhost;dbname=db_declaracao', 'root', '');
    //  $conn = new PDO('mysql:host=108.167.132.188;dbname=viaexp72_db_declaracao', 'viaexp72_declaracaoPort', '32010573Bbc@@');
    $sql = 'SELECT id_declaracao FROM contents ORDER BY id_declaracao DESC LIMIT 1';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rows = ($stmt->fetchAll(PDO::FETCH_ASSOC));
    //print_r($rows);

    if (!$conn) {
        die("Falha na conexao: " . mysqli_connect_error());
    } else {
        //echo "Conexao realizada com sucesso";
    }

    use Jenssegers\Date\Date;

    Date::setLocale('pt');
    $content = new ContentItem();
    $date = Date::now()->format(' d F Y ');
    $content = \App\Models\Content::all();
    ?>

    <style>
        body {
            font-family: "Montserrat", sans-serif !important;
        }

        .deca,
        caption {
            border: 1px solid black;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            width: 100px;
        }

        th {
            font-weight: bold;
        }

        tr {
            font-size: 12px;
        }

        caption {
            font-family: "Montserrat", sans-serif !important;
            text-align: center;
            font-weight: 200;
            font-size: 16px;
            color: #000000;
            background-color: #F2F1F1 !important;
        }

        h4 {
            font-family: "Montserrat", sans-serif !important;
            font-weight: 300;
            font-size: 12px;
            color: #000000;
            text-align: left;
        }

        h3 {
            text-align: center;
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="portrait"] {
            width: 29.7cm;
            height: 21cm;
        }

        hr {
            margin-right: 5rem !important;
        }


        .assinatura {
            margin-right: 12rem;
        }

        .declaracao {
            margin-left: 0.5rem;
            margin-right: 0.2rem;
        }

        .sp {
            margin-left: 0.5rem;
            margin-right: 0.2rem;
        }
    </style>
    <?php foreach ($rows as $row) { ?>

        <h5 class="dcl">DCL00<?php echo $row['id_declaracao'] + '1' ?></h5>
    <?php } ?>

</head>

<body>
    <page size="A4">
        <div class=" row col-6">
            <div class="container-fluid">
                </br>
                <table>

                </table>
                <table class="bordered striped ">
                    <caption>Remetente</caption>
                    <thead>
                        <tr>

                            <th>Nome</th>
                            <th>CPF/CNPJ</th>
                            <th>Endereço</th>
                            <th>Cidade/UF</th>
                            <th>Contato/Celular</th>
                        </tr>
                    </thead>
                    <tbody>{
                        <tr>
                            <td><?php echo $_REQUEST['remetente'] ?></td>
                            <td><?php echo $_REQUEST['cnpj'] ?></td>
                            <td><?php echo $_REQUEST['endereco'] ?><br>nº<?php echo $_REQUEST['numero'] ?><br><?php echo $_REQUEST['complemento'] ?></td>
                            <td><?php echo $_REQUEST['cidade'] ?> / <?php echo $_REQUEST['uf'] ?> </td>
                            <td><?php echo $_REQUEST['contato'] ?> <?php echo $_REQUEST['telefone'] ?> </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="container-fluid">
                <table class="bordered striped">
                    <caption>Destinatário</caption>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF/CNPJ</th>
                            <th>Endereço</th>
                            <th>Cidade/UF</th>
                            <th>Contato/Celular</th>
                        </tr>
                    </thead>
                    <tbody>{
                        <tr>

                            <td><?php echo $_REQUEST['destinatario'] ?></td>
                            <td><?php echo $_REQUEST['cnpj2'] ?></td>
                            <td><?php echo $_REQUEST['endereco2'] ?><br>nº<?php echo $_REQUEST['numero2'] ?><br><?php echo $_REQUEST['complemento2'] ?></td>
                            <td><?php echo $_REQUEST['cidade2'] ?> / <?php echo $_REQUEST['uf2'] ?> </td>
                            <td><?php echo $_REQUEST['contato2'] ?> <?php echo $_REQUEST['telefone2'] ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </br>
        <table class=" bordered striped ">
            <caption>Conteúdo</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Centro de custo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_REQUEST['content_items'] as $contentItem) { ?>
                    <tr>
                        <td><?php echo $contentItem["id_product"] ?></td>
                        <td><?php echo $contentItem["content"] ?></td>
                        <td><?php echo $contentItem["quantity"] ?></td>
                        <td><?php echo $contentItem["value"] ?></td>
                        <td><?php echo $contentItem["cost_center"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="bordered striped ">
            <caption>Declaração</caption>
            <p class=declaracao> Declaro ainda que não estou postando conteúdo inflamável, explosivo, causador de combustão espontânea, tóxico, corrosivo, gás ou qualquer outro conteúdo que constitua perigo, conforme o art. 13 da Lei Postal nº 6.538/78. Declaro que não me enquadro no conceito de contribuinte previsto no art. 4º da Lei Complementar nº 87/1996, uma vez que não realizo, com habitualidade ou em volume que caracterize intuito comercial, operações de circulação de mercadoria, ainda que se iniciem no exterior, ou estou dispensado da emissão da nota fiscal por força da legislação tributária vigente, responsabilizando-me, nos termos da lei e a quem de direito, por informações inverídicas.<br />
            <p class=sp>São Paulo, <?php echo $date;  ?></p>
            </br>
            <HR WIDTH=40% ALIGN=RIGHT>
            </p>
            <p ALIGN=RIGHT class=assinatura>ASSINATURA </p>
        </table>
        </div>

</body>
</page>

</html>