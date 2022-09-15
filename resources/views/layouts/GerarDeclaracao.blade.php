<!DOCTYPE html>
<html lang="en">
<head>
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


        .col-33 {
            width: 33%;
        }

        .col-20 {
            width: 20%;
        }

        
        .ml-2 {
            margin-left: 20%;
        }


        .centralizar {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        
        .campos {
            padding: 1%;
            margin-top: 1%;
            border: 1px solid black;
        }

        
    </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Declaração de Conteúdo') }}
        </h2>
    </x-slot>
    <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript">
    
</script>
<script type="text/javascript">
	$(document).ready(function(){	
		$("#cnpj").mask("99.999.999/9999-99");
	});
</script>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <h3 class="centralizar">
        <form name="formulario" class="row" method="post" action="">
        <div class="col-33 ml-2 campos" style="border-right: none">
        <x-label  :value="__('REMETENTE')" />
        </div>
        <div class="col-33 campos">
        <x-label  :value="__('DESTINATÁRIO')" />

        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>CNPJ/CPF:</p><x-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" /> 

        </div>
        <div class="col-33 campos">
            
            <p>CNPJ/CPF:</p><x-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj"/> 
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>Nome:</p><x-input id="nome" class="block mt-1 w-full" type="text" name="nome"/> 
        </div>
        <div class="col-33  campos">
            <p>Nome:</p><x-input id="nome" class="block mt-1 w-full" type="text" name="nome"/> 
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p> CEP:  </p><x-input id="cep" class="block mt-1 w-full" type="text" name="cep"/> 
        </div>
        <div class="col-33 campos">
            <p> CEP:  </p><x-input id="cep" class="block mt-1 w-full" type="text" name="cep"/> 
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>Endereco:</p><x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco"/> 
            <p>Número: </p><x-input id="numero" class="block mt-1 w-full" type="text" name="numero"/> 
            <p>Complemento: </p><x-input id="complemento" class="block mt-1 w-full" type="text" name="complemento"/> 
        </div>
        <div class="col-33 campos">
            <p>Endereco:</p><x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco"/> 
            <p>Número: </p><x-input id="numero" class="block mt-1 w-full" type="text" name="numero"/> 
            <p>Complemento: </p><x-input id="complemento" class="block mt-1 w-full" type="text" name="complemento"/> 
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>Cidade: </p><x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade"/>
            <p>Estado: </p><x-input id="estado" class="block mt-1 w-full" type="text" name="estado"/>  
        </div>
        <div class="col-33 campos">
            <p>Cidade: </p><x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade"/>
            <p>Estado: </p><x-input id="estado" class="block mt-1 w-full" type="text" name="estado"/>  
        </div>
        
         </div>
    
        </div>
    </div>
</x-app-layout>
                
</body>
</html>
