<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
        }

        .container {
            height: fit-content !important;
            padding: 10px;
        }

        .row {
            display: flex;
            flex-flow: row wrap;
        }

        .col-10 {
            width: 10%;
        }

        .col-50 {
            width: 50%;
        }

        .col-33 {
            width: 33%;
        }

        .col-20 {
            width: 20%;
        }

        .ml-1 {
            margin-left: 10%;
        }

        .ml-2 {
            margin-left: 20%;
        }

        .ml-3 {
            margin-left: 30%;
        }

        .ml-4 {
            margin-left: 40%;
        }

        .ml-5 {
            margin-left: 50%;
        }

        .bg-red {
            background-color: red;
        }

        .bg-blue {
            background-color: blue;
        }

        .centralizar {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .camposFinais {
            margin-top: 2%;
            padding: 5px;
            border: 1px solid black;

        }

        .campos {
            padding: 1%;
            margin-top: 1%;
            border: 1px solid black;
        }

        table, th, td {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        th, td {
            padding: 10px;
            text-align: center;
            width: 120px;
        }

        th {
            font-weight: bold;
        }
    </style>      
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Identificação dos bens') }}
        </h2>
    </x-slot>
    </head>
    <body>
    <div class="container">
    <form name="formulario" class="row" method="post" action="{{route('dashboard.Conteudo')}}">
                        @csrf
    <h3 class="centralizar"><u> preencha os campos abaixo com as informações sobre seu(s) item(s). </u></h3>
    <div class="row">
        <div class="col-33 ml-2 campos" style="border-right: none">
        <p>CNPJ/CPF:</p>
                            <x-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" />
        </div>
        <div class="col-33 campos">
        <p>CNPJ/CPF:</p>
                            <x-input id="cnpj2" class="block mt-1 w-full" type="text" name="cnpj2" />  
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
        <p>Nome:</p>
                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" />
        </div>
        <div class="col-33 campos">
        <p>Nome:</p>
                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" />
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
        <p> CEP: </p>
                            <x-input id="cep" class="block mt-1 w-full" type="text" name="cep" />
        </div>
        <div class="col-33  campos">
            <p> CEP: </p>
                            <x-input id="cep2" class="block mt-1 w-full" type="text" name="cep" />
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
        <p>Endereco:</p>
                            <x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" />
                            <p>Número: </p>
                            <x-input id="numero" class="block mt-1 w-full" type="text" name="numero" />
                            <p>Complemento: </p>
                            <x-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" />
        </div>
        <div class="col-33 campos">
        <p>Endereco:</p>
                            <x-input id="endereco2" class="block mt-1 w-full" type="text" name="endereco" />
                            <p>Número: </p>
                            <x-input id="numero2" class="block mt-1 w-full" type="text" name="numero" />
                            <p>Complemento: </p>
                            <x-input id="complemento2" class="block mt-1 w-full" type="text" name="complemento" />
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
        v class="col-33 ml-2 campos" style="border-right: none">
                            <p>Cidade: </p>
                            <x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" />
                            <p>Estado: </p>
                            <x-input id="uf" class="block mt-1 w-full" type="text" name="estado" />
        </div>
        <div class="col-33 campos">
        <x-input id="cidade2" class="block mt-1 w-full" type="text" name="cidade" />
                            <p>Estado: </p>
                            <x-input id="uf2" class="block mt-1 w-full" type="text" name="estado" />
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>  </p>
        </div>
        <div class="col-33 campos">
            <p>   </p>
        </div>
    </div> 
    <input type="submit" >
 </form>
</div>
    
<script>
        
        new FormMask(document.querySelector("#cnpj"), "__.___.___/____-__", "_", [".", "-", "/"])
        new FormMask(document.querySelector("#cnpj2"), "__.___.___/____-__", "_", [".", "-", "/"])
        new FormMask(document.querySelector("#cep"), "_____-___", "_", ["-"])
        new FormMask(document.querySelector("#cep2"), "_____-___", "_", ["-"])

        $("#cep").blur(function() {
            // Remove tudo o que não é número para fazer a pesquisa
            var cep = this.value.replace(/[^0-9]/, "");

            // Validação do CEP; caso o CEP não possua 8 números, então cancela
            // a consulta
            if (cep.length != 8) {
                return false;
            }

            // A url de pesquisa consiste no endereço do webservice + o cep que
            // o usuário informou + o tipo de retorno desejado (entre "json",
            // "jsonp", "xml", "piped" ou "querty")
            var url = "https://viacep.com.br/ws/" + cep + "/json/";

            // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
            // caso ocorra algum erro (o cep pode não existir, por exemplo) a
            // usabilidade não seja afetada, assim o usuário pode continuar//
            // preenchendo os campos normalmente
            $.getJSON(url, function(dadosRetorno) {
                try {
                    // Preenche os campos de acordo com o retorno da pesquisa
                    $("#endereco").val(dadosRetorno.logradouro);
                    $("#cidade").val(dadosRetorno.localidade);
                    $("#uf").val(dadosRetorno.uf);
                } catch (ex) {}
            });
        });

        $("#cep2").blur(function() {
            // Remove tudo o que não é número para fazer a pesquisa
            var cep2 = this.value.replace(/[^0-9]/, "");

            // Validação do CEP; caso o CEP não possua 8 números, então cancela
            // a consulta
            if (cep2.length != 8) {
                return false;
            }

            // A url de pesquisa consiste no endereço do webservice + o cep que
            // o usuário informou + o tipo de retorno desejado (entre "json",
            // "jsonp", "xml", "piped" ou "querty")
            var url = "https://viacep.com.br/ws/" + cep2 + "/json/";

            // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
            // caso ocorra algum erro (o cep pode não existir, por exemplo) a
            // usabilidade não seja afetada, assim o usuário pode continuar//
            // preenchendo os campos normalmente
            $.getJSON(url, function(dadosRetorno) {
                try {
                    // Preenche os campos de acordo com o retorno da pesquisa
                    $("#endereco2").val(dadosRetorno.logradouro);
                    $("#cidade2").val(dadosRetorno.localidade);
                    $("#uf2").val(dadosRetorno.uf);
                } catch (ex) {}
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</x-app-layout>
</body>
    </html>
