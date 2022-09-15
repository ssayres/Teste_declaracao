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
   
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
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
            <p>CNPJ/CPF:</p><x-input id="cnpj2" class="block mt-1 w-full" type="text" name="cnpj2"/> 
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
            <p> CEP:  </p><x-input id="cep2" class="block mt-1 w-full" type="text" name="cep"/> 
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>Endereco:</p><x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco"/> 
            <p>Número: </p><x-input id="numero" class="block mt-1 w-full" type="text" name="numero"/> 
            <p>Complemento: </p><x-input id="complemento" class="block mt-1 w-full" type="text" name="complemento"/> 
        </div>
        <div class="col-33 campos">
            <p>Endereco:</p><x-input id="endereco2" class="block mt-1 w-full" type="text" name="endereco"/> 
            <p>Número: </p><x-input id="numero2" class="block mt-1 w-full" type="text" name="numero"/> 
            <p>Complemento: </p><x-input id="complemento2" class="block mt-1 w-full" type="text" name="complemento"/> 
        </div>
        <div class="col-33 ml-2 campos" style="border-right: none">
            <p>Cidade: </p><x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade"/>
            <p>Estado: </p><x-input id="estado" class="block mt-1 w-full" type="text" name="estado"/>  
        </div>
        <div class="col-33 campos">
            <p>Cidade: </p><x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade"/>
            <p>Estado: </p><x-input id="estado2" class="block mt-1 w-full" type="text" name="estado"/>  
        </div>
        
         </div>
    
        </div>
    </div>

    <script>
        new FormMask(document.querySelector("#cnpj"), "__.___.___/____-__", "_", [".", "-", "/"])
        new FormMask(document.querySelector("#cnpj2"), "__.___.___/____-__", "_", [".", "-", "/"])
        new FormMask(document.querySelector("#cep"), "_____-___", "_", ["-"])
        new FormMask(document.querySelector("#cep2"), "_____-___", "_", ["-"])

     
        </script>
</x-app-layout>
                
</body>
</html>
