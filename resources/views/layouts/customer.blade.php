<?php 
namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Content;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">



    <!-- <link rel="stylesheet" href="public/css/index-pdf.css"> -->
    <?php
    use Jenssegers\Date\Date;
    Date::setLocale('pt');
    $date = Date::now()->format(' d F Y H:i:s');
    $content = \App\Models\Content::all();
   

    ?>

    <style>
        table,
        th,
        td,
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

        caption {
            font-family: 'Roboto Slab';
            text-align: center;
            font-weight: 300;
            font-size: 20;
            color: 	white;
            background-color: #cfcdcd !important;
            
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="portrait"] {
            width: 29.7cm;
            height: 21cm;
        }
        HR {
            
            margin-right: 5rem;
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

</head>

<body>
    <page size="A4">
        <div class=" row col-6">
            <div class="container-fluid">
    </br>       @foreach($contents as $content )
             
                <table class="bordered striped ">
                    <caption>Remetente</caption>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF/CNPJ</th>
                            <th>Endereço</th>
                            <th>Cidade/UF</th>
                        </tr>
                    </thead>
                    <tbody>{
                        <tr>
                        
                            <td>{{$content['remetente']}}</td>
                            <td>{{$content->cnpj}}</td>
                            <td>{{$content->endereco}} . ' -' . ' ' . {{$content->numero}} . '<br> ' . {{$content->cep}} </td>
                            <td>{{$content->cidade}} . '/' . {{$content->uf}} </td>
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
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                        
                            <td>{{$content['destinatario']}}</td>
                            <td>{{$content['cnpj2']}}</td>
                            <td>{{$content['endereco2']}} . ' -' . ' ' . {{$content['numero2']}} . '<br> ' . {{$content['cep2']}} </td>
                            <td>{{$content['cidade2']}} . '/' . {{$content['uf2']}} </td>
                        </tr>
                    </tbody>
                    @endforeach
                  
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
                <tr>
                @foreach ($content_items as $content)
                        <td>{{$content['idProduct']}}</td>
                        <td>{{$content['cCusto']}}></td>
                        <td>{{$content['content']}}</td>
                        <td>{{$content['quantity']}}</td>
                        <td>{{$content['value']}}</td>
                        @endforeach
                       
                </tr>
            </tbody>
        </table>
        <table class="bordered striped ">
            <caption>Declaração</caption>
            <p class=declaracao> Declaro ainda que não estou postando conteúdo inflamável, explosivo, causador de combustão espontânea, tóxico, corrosivo, gás ou qualquer outro conteúdo que constitua perigo, conforme o art. 13 da Lei Postal nº 6.538/78. Declaro que não me enquadro no conceito de contribuinte previsto no art. 4º da Lei Complementar nº 87/1996, uma vez que não realizo, com habitualidade ou em volume que caracterize intuito comercial, operações de circulação de mercadoria, ainda que se iniciem no exterior, ou estou dispensado da emissão da nota fiscal por força da legislação tributária vigente, responsabilizando-me, nos termos da lei e a quem de direito, por informações inverídicas.<br/>
            <p class=sp>São Paulo, <?php echo $date;  ?></p>
            </br>
            <HR WIDTH=40% ALIGN=RIGHT >
            </p>
            <p ALIGN=RIGHT class=assinatura>ASSINATURA </p>
        </table>
        </div>
        
</body>
</page>

</html>