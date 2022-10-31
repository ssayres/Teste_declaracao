<?php

use App\Http\Controllers;
use App\Models\ContentItem;

$contentItem = ContentItem::all();
?>
<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}" />
    <link href="{{ URL::asset('css/declaracao.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/ajustes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.mim.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <link href="{{ URL::asset('css/jquery-ui.min.css') }}" rel="stylesheet">


    @stack('javascript')




  </head>

  <body>
    <!-- Container que é o pai de todos os elementos da página. action="{{route('dashboard.Conteudo')}}" method="post" -->
    <form class="divFormu container responsive-sm" id="formGeral" name="formGeral" enctype="multipart/form-data">
      <form class="form-estrutura">
        @csrf
        <div class="row row-cols-12 content-page">

          <!-- Formulário que é exibido a esquerda da página. -->
          <div class="form-container col-6">

            <main>

              <div class="container">
                <div class="form-container">
                  <div class="form-product row g-1 my-0">

                    <p></p>
                    <h1>Remetente</h1>

                    <div class="row g-2 my-1">
                      <div class="col-5">
                        <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                        <input list="" type="text" class="form-control text-primary bg-light" Montserrat-labelledby billing placeholder="000.000.000-00" name="cnpj" id="cnpj" onfocusout="verificarCampo('inputCpfCnpj')" onChange="handleChangeMask" data-mask="00.000.000/0000-00" onblur="checkCnpj(this.value)" required>
                      </div>

                      <div class="col-7">
                        <label for="inputNome" class="form-label">Remetente:</label>
                        <input type="text" class="form-control text-primary bg-light" Montserrat-labelledby billing name="remetente" placeholder="O nome do remetente" id="remetente" aria-describedby="validationTooltipUsernamePrepend" required>
                      </div>

                      <div class="row g-2 my-0">
                        <div class="col-4">
                          <label for="inputCEP" class="form-label">CEP:</label>
                          <input list="" type="text" placeholder="00000-000" class="form-control text-primary bg-light" Montserrat-labelledby billing name="cep" id="cep" required>
                        </div>

                        <div class="col-8">
                          <label for="inputEndereço" class="form-label">Endereço:</label>
                          <input list="" type="text" placeholder="Nome da rua ou avenida" class="form-control text-primary bg-light" Montserrat-labelledby billing name="endereco" id="endereco" required>
                        </div>
                      </div>


                      <div class="row g-2 my-0">
                        <div class="col-3">
                          <label for="inpuNumero" class="form-label">Número:</label>
                          <input list="" placeholder="n°" type="text" class="form-control text-primary bg-light" Montserrat-labelledby billing name="numero" id="numero" required>
                        </div>


                        <div class="col-3">
                          <label for="inputComplemento" class="form-label">Complemento:</label>
                          <input list="" type="text" placeholder="ex: AP 2" class="form-control text-primary bg-light" Montserrat-labelledby billing name="complemento" id="complemento">
                        </div>


                        <div class="col-4">
                          <label for="inputCidade" class="form-label">Cidade:</label>
                          <input list="" type="text" placeholder="ex: São Paulo" class="form-control text-primary bg-light" Montserrat-labelledby billing name="cidade" id="cidade" required>
                        </div>

                        <div class="col-2">
                          <label for="inputEstado" class="form-label">Estado:</label>
                          <select list="" type="text" placeholder="SP" class="form-control text-primary bg-light" Montserrat-labelledby billing name="uf" id="uf" required>
                            <option value="">...</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                          </select>
                        </div>

                        <div class="col-6">
                          <label for="inputContato" class="form-label">Contato:</label>
                          <input type="text" placeholder="Digite o nome completo" class="form-control text-primary bg-light" Montserrat-labelledby billing name="contato" id="contato" >
                        </div>

                        <div class="col-6">
                          <label for="inputContato" class="form-label">Telefone/Celular:</label>
                          <input type="tel" placeholder="(xx) x-xxxx-xxxx" class="form-control text-primary bg-light" Montserrat-labelledby billing name="telefone" id="telefone" maxlength="15" onkeyup="handlePhone(event)" >
                        </div>

                        <div class="form-check form-switch g-0 my-4 salvar">
                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                          <label class="form-check-label" for="flexSwitchCheckDefault">Salvar
                            formulário remetente?</label>
                        </div>

                        <hr id="phr">

                        <div class="row g-2 my-0">
                          <p></p>
                          <h1>Destinatário</h1>

                          <div class="row g-2 my-0">
                            <div class="col-5">
                              <label for="inputCpfCnpj" class="form-label">CPF/CNPJ:</label>
                              <input list="nomes" type="text" placeholder="000.000.000-0" class="form-control text-primary bg-light" Montserrat-labelledby billing name="cnpj2" id="cnpj2" onfocusout="verificarCampo('inputCpfCnpj')" onChange="handleChangeMask" data-mask="00.000.000/0000-00" onblur="checkCnpj1(this.value)" required>
                            </div>

                            <div class="col-7">
                              <label for="inputNome" class="form-label">Destinatário:</label>
                              <input list="nomes" type="text" placeholder="O nome do Destinatário" class="form-control text-primary bg-light" Montserrat-labelledby billing name="destinatario" id="destinatario"  required>
                            </div>
                          </div>

                          <div class="row g-2 my-0">
                            <div class="col-4">
                              <label for="inputCEP" class="form-label">CEP:</label>
                              <input list="nomes" type="text" placeholder="00000-000" class="form-control text-primary bg-light" Montserrat-labelledby billing name="cep2" id="cep2" required>
                            </div>

                            <div class="col-8">
                              <label for="inputEndereço" class="form-label">Endereço:</label>
                              <input list="nomes" type="text" placeholder="Nome da rua ou avenida" class="form-control text-primary bg-light" Montserrat-labelledby billing name="endereco2" id="endereco2" required>
                            </div>

                            <div class="row g-2 my-0">
                              <div class="col-2">
                                <label for="inputNumero" class="form-label">Número:</label>
                                <input list="nomes" type="text" placeholder="n°" class="form-control text-primary bg-light" Montserrat-labelledby billing name="numero2" id="numero2" required>
                              </div>


                              <div class="col-3">
                                <label for="inputComplemento" class="form-label">Complemento:</label>
                                <input list="nomes" type="text" placeholder="ex: AP 2" class="form-control text-primary bg-light" Montserrat-labelledby billing name="complemento2" id="complemento2">
                              </div>

                              <div class="col-5">
                                <label for="inputCidade" class="form-label">Cidade:</label>
                                <input list="nomes" type="text" placeholder="ex: São Paulo" class="form-control text-primary bg-light" Montserrat-labelledby billing name="cidade2" id="cidade2" required>
                              </div>

                              <div class="col-2">
                                <label for="inputEstado" class="form-label">Estado:</label>
                                <select list="nomes" type="text" placeholder="SP" class="form-control text-primary bg-light" Montserrat-labelledby billing name="uf2" id="uf2" required>
                                  <option value="">...</option>
                                  <option value="AC">AC</option>
                                  <option value="AL">AL</option>
                                  <option value="AP">AP</option>
                                  <option value="AM">AM</option>
                                  <option value="BA">BA</option>
                                  <option value="CE">CE</option>
                                  <option value="DF">DF</option>
                                  <option value="ES">ES</option>
                                  <option value="GO">GO</option>
                                  <option value="MA">MA</option>
                                  <option value="MT">MT</option>
                                  <option value="MS">MS</option>
                                  <option value="MG">MG</option>
                                  <option value="PA">PA</option>
                                  <option value="PB">PB</option>
                                  <option value="PR">PR</option>
                                  <option value="PE">PE</option>
                                  <option value="PI">PI</option>
                                  <option value="RJ">RJ</option>
                                  <option value="RN">RN</option>
                                  <option value="RS">RS</option>
                                  <option value="RO">RO</option>
                                  <option value="RR">RR</option>
                                  <option value="SC">SC</option>
                                  <option value="SP">SP</option>
                                  <option value="SE">SE</option>
                                  <option value="TO">TO</option>
                                </select>
                              </div>

                              <div class="col-6">
                                <label for="inputContato" class="form-label">Contato:</label>
                                <input type="text" placeholder="Digite o nome completo" class="form-control text-primary bg-light" Montserrat-labelledby billing name="contato2" id="contato2" required>
                              </div>

                              <div class="col-6">
                                <label for="inputContato" class="form-label">Telefone/Celular:</label>
                                <input type="tel" placeholder="(xx) x-xxxx-xxxx" class="form-control text-primary bg-light" Montserrat-labelledby billing name="telefone2" id="telefone2" maxlength="15" required>
                              </div>

                              <div class="form-check form-switch g-0 my-4 salvar">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Salvar formulário
                                  remetente?</label>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </main>

          </div>

          <!-- Formulário que é exibido a direita da página -->

          <div class="iso-container col-6">
            <div class="col-12">

              <!-- Div lado -->
              <main>
                <div class="container">
                  <div class="form-container">
                    <form class="form-product row g-1" novalidate>

                      <div class="row g-2 my-0">
                        <p></p>
                        <h1>Conteúdo</h1>


                        <div class="row g-2 my-0">
                          <div class="col-6">
                            <label for="idProduto" class="form-label">ID do Produto:</label>
                            <input list="" type="text" placeholder="Digite aqui..." class="form-control text-primary bg-light" Montserrat-labelledby billing name="idProduct" name="idProduct" id="idProduct" onfocusout="verificarCampo('inputNome')" required />
                            <div class="col-4">
                              <!-- <button class="btn " type="button" name="buscar" id="buscar" onclick="buscar()" >Buscar</button> -->
                            </div>
                          </div>
                          <div class="col-6">
                            <label for="cCusto" class="form-label">Centro de
                              custo:</label>
                            <input list="" type="text" placeholder="Digite aqui..." class="form-control text-primary bg-light" Montserrat-labelledby billing name="cCusto" id="cCusto" onfocusout="verificarCampo('inputNome')"  required />
                          </div>

                          <div class="col-6">
                            <label for="Conteudo" class="form-label">Conteúdo do
                              pacote:</label>
                            <input list="" type="text"  class="form-control text-primary bg-light1" Montserrat-labelledby billing name="content" id="content" onfocusout="verificarCampo('inputNome')" disabled required>
                          </div>

                          <div class="col-6">
                            <label for="Quantidade" class="form-label">Quantidade de itens
                              enviados:</label>
                            <input list="" type="number" placeholder="Qual a quantidade..." class="form-control text-primary bg-light" Montserrat-labelledby billing name="quantity" id="quantity" onfocusout="verificarCampo('inputNome')" required>
                          </div>

                          <div class="col-12">
                            <label for="Valor" class="form-label">Valor (R$):</label>
                            <input Montserrat-labelledby billing class="form-control text-primary bg-light1" id="value" name="value" onfocusout="verificarCampo('inputNome')" onkeyup="atacado(this);" disabled required>
                            <br>
                          </div>

                        </div>

                        <button class="btn btn-danger" type="button" name="botaoAdd" id="butao2">Adicionar conteúdo</button>



                      </div>

                      <hr>
                      <div class="row g-2 my-0">

                        <h1></h1>

                        <div class="row g-2 my-0">

                          <div class="row g-2 my-0 tabela">

                            <table class="table table-bordered">
                              <thead>
                                <th scope="col">IdProduto</th>
                                <th scope="col">CentroCusto</th>
                                <th scope="col">Qtd</th>
                                <th scope="col">Conteúdo</th>
                                <th scope="col">Valor</th>
                                <th scope="col">#</th>
                              </thead>
                              <tbody id="show">

                              </tbody>
                            </table>


                          </div>
                        </div>


                    </form>

                    <!-- Botões -->
                    <div class="row g-2 my-0 bots">

                      <div class="col-5">
                        <div class="d-grid my-3">
                          <button class="btn btn-outline-danger" type="reset" name="botaoExcluir" id="botaoExcluir">Limpar Formulário
                          </button>
                        </div>
                      </div>

                      <div class="col-7">
                        <div class="d-grid my-3">
                          <button class="btn btn-danger" type="submit" name="botaoEnviar" id="botaoEnviar" data-dismiss="alertList" onclick="msg().Enviar()">Gerar Declaração
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
      </form>
      </main>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
      const handlePhone = (event) => {
        let input = event.target
        input.value = phoneMask(input.value)
      }

      const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g, '') //Remove tudo o que não é dígito
        value = value.replace(/(\d{2})(\d)/, "($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
        value = value.replace(/(\d)(\d{4})$/, "$1-$2") //Coloca hífen entre o quarto e o quinto dígitos
        return value
      }

      function mascara(o, f) {
        v_obj = o;
        v_fun = f;
        setTimeout("execmascara()", 1);
      }

      function execmascara() {
        v_obj.value = v_fun(v_obj.value);
      }

      function mtel(v) {
        v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
      }

      function id(el) {
        return document.getElementById(el);
      }

      window.onload = function() {
        id("telefone2").onkeyup = function() {
          mascara(this, mtel);
        };
      };

      function checkCnpj(cnpj) {

        // ## EXEMPLO 1
        // Aciona a validação a cada tecla pressionada
        var temporizador = false;
        $('cnpj').keypress(function() {

          // O input que estamos utilizando
          var input = $(this);

          // Limpa o timeout antigo
          if (temporizador) {
            clearTimeout(temporizador);
          }

          // Cria um timeout novo de 500ms
          temporizador = setTimeout(function() {
            // Remove as classes de válido e inválido
            input.removeClass('valido');
            input.removeClass('invalido');

            // O CPF ou CNPJ
            var cpf_cnpj = input.val();

            // Valida
            var valida = valida_cpf_cnpj(cpf_cnpj);

            // Testa a validação
            if (valida) {
              input.addClass('valido');
            } else {
              input.addClass('invalido');
            }
          }, 500);

        });
      };

      function checkCnpj(cnpj) {
        $.ajax({
          'url': 'https://www.receitaws.com.br/v1/cnpj/' + cnpj.replace(/[^0-9]/g, ""),
          'type': "GET",
          'dataType': 'jsonp',
          'success': function(data) {

            // Verifica CPF
            if (data.length == 11) {

              alert('CPF Válido')

            }

            // // Verifica CNPJ
            else if (data.length == 14) {

              alert('Se os campos for preenchidos aom apenas o CNPJ, então ele é válido pela receita federal')
            }

            if (data.nome == undefined) {
              // alert(data.status + ' ' + data.message)
            } else {
              document.getElementById('remetente').value = data.nome;
              document.getElementById('numero').value = data.numero;
              document.getElementById('endereco').value = data.logradouro;
              document.getElementById('cidade').value = data.municipio;
              document.getElementById('uf').value = data.uf;
              document.getElementById('cep').value = data.cep;
              document.getElementById('complemento').value = data.complemento;
            }
            console.log(data);
          }
        })
      }
      $(function() {
        $('#cnpj').blur(function() {

          // O CPF ou CNPJ
          var cnpj = $(this).val();

          // Testa a validação e formata se estiver OK
          if (formata_cpf_cnpj(cnpj)) {
            $(this).val(formata_cpf_cnpj(cnpj));
          } else {

          }

        });

      });

      function checkCnpj1(cnpj2) {
        $.ajax({
          'url': 'https://www.receitaws.com.br/v1/cnpj/' + cnpj2.replace(/[^0-9]/g, ''),
          'type': "GET",
          'dataType': 'jsonp',
          'success': function(data) {
            if (data.nome == undefined) {

            } else {
              document.getElementById('destinatario').value = data.nome;
              document.getElementById('numero2').value = data.numero;
              document.getElementById('endereco2').value = data.logradouro;
              document.getElementById('cidade2').value = data.municipio;
              document.getElementById('uf2').value = data.uf;
              document.getElementById('cep2').value = data.cep;
              document.getElementById('complemento2').value = data.complemento;
            }
            console.log(data);
          }
        })
      }
      $(function() {
        $('#cnpj2').blur(function() {

          // O CPF ou CNPJ
          var cnpj = $(this).val();

          // Testa a validação e formata se estiver OK
          if (formata_cpf_cnpj(cnpj)) {
            $(this).val(formata_cpf_cnpj(cnpj));
          } else {

          }

        });

      });
      $("#cnpj").keydown(function() {
        try {
          $("#cnpj").unmask();
        } catch (e) {}

        var tamanho = $("#cnpj").val().length;

        if (tamanho < 11) {
          $("#cpf").mask("999.999.999-99");
        } else {
          $("#cnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function() {
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
      });

      $("#cnpj2").keydown(function() {
        try {
          $("#cnpj2").unmask();
        } catch (e) {}

        var tamanho = $("#cnpj2").val().length;

        if (tamanho < 11) {
          $("#cnpj2").mask("999.999.999-99");
        } else {
          $("#cnpj2").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function() {
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
      });
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
      (function alertList() {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
          .forEach(function(form) {
            form.addEventListener('submit', function(event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()
    </script>
    <script>
      function atacado(i) {
        var decimais = 2;
        var separador_milhar = '.';
        var separador_decimal = ',';

        var decimais_ele = Math.pow(10, decimais);
        var thousand_separator = '$1' + separador_milhar;
        var v = i.value.replace(/\D/g, '');
        v = (v / decimais_ele).toFixed(decimais) + '';
        var splits = v.split(".");
        var p_parte = splits[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, thousand_separator);
        (typeof splits[1] === "undefined") ? i.value = p_parte: i.value = p_parte + separador_decimal + splits[1];

      }

      function msg() {
        alert("Gerando PDF do conteúdo aguarde por favor!");
      }
    </script>
    <script>
      contentItems = []
      $('#butao2').click(function(e) {
        e.preventDefault()
        let item = {
          'id_product': $('#idProduct').val(),
          'cost_center': $('#cCusto').val(),
          'content': $('#content').val(),
          'quantity': $('#quantity').val(),
          'value': $('#value').val(),
        }
        contentItems.push(item)
        resetForm(contentItems)
      });

      function resetForm(items) {
        $(".row-input").remove()
        let show2 = "";
        let cont = 0;
        items.forEach(function(e) {
          let form = $('form[name="formGeral"]');
          let inputProduct = $("<input>").attr("name", "content_items\[" + cont + "\]\[id_product\]").attr("type", "hidden").attr("class", "row-input").val(e['id_product'])
          let inputCostCenter = $("<input>").attr("name", "content_items\[" + cont + "\]\[cost_center\]").attr("type", "hidden").attr("class", "row-input").val(e['cost_center'])
          let inputContent = $("<input>").attr("name", "content_items\[" + cont + "\]\[content\]").attr("type", "hidden").attr("class", "row-input").val(e['content'])
          let inputQuantity = $("<input>").attr("name", "content_items\[" + cont + "\]\[quantity\]").attr("type", "hidden").attr("class", "row-input").val(e['quantity'])
          let inputValue = $("<input>").attr("name", "content_items\[" + cont + "\]\[value\]").attr("type", "hidden").attr("class", "row-input").val(e['value'])
          form.append(inputProduct)
          form.append(inputCostCenter)
          form.append(inputContent)
          form.append(inputQuantity)
          form.append(inputValue)
          show2 += `
            <div class="row g-2 my-0 tabela">
                <tr class="row-product-${cont}">
                    <td scope="col">${e['id_product']}</td>
                    <td scope="col">${e['cost_center']}</td>
                    <td scope="col">${e['content']}</td>
                    <td scope="col">${e['quantity']}</td>
                    <td scope="col">${e['value']}</td>
                    <td scope="col" nowrap><button class="apagar" onclick="removerElemento(${cont})">🗑️<button><td>
                </tr>
               </div>
              `
          cont++;
        })
        $('#show').html(show2);
      }

      function removerElemento(elementoClicado) {
        $(".row-product-" + elementoClicado + "").remove()
        contentItems.splice(elementoClicado, 1)
        resetForm(contentItems)
      }
    </script>
    <script>
      $(function Enviar() {
        $('form[name="formGeral"]').submit(function(e) {
          e.preventDefault();
          $.ajax({
            url: "{{route('dashboard.Conteudo')}}",
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
              console.log("Dados inseridos com sucesso!");
              funcao_pdf(data.declaracao)
            },
            error: function(e) {
              console.log(e);
            }
          });
        })
      })


      $(function() {
        $('#idProduct').autocomplete({
          source: function(request, response) {
            console.log(request.term)
            $.getJSON("{{url('/dashboard/products')}}?term=" + request.term, function(data) {
              var array = $.map(data, function(row) {
                return {
                  value: row.id_product,
                  label: row.content,
                  content: row.content,
                  sales_price: row.value
                }
              })

              response($.ui.autocomplete.filter(array, request.term));


            })
          },
          minLength: 1,
          delay: 60,
          select: function(event, ui) {
            $('#content').val(ui.item.content)
            $('#value').val(ui.item.sales_price)
          }
        })
      })

      $(function() {
        $("input[name='idProduct']").blur(function(){
          console.log("oi")
          let id_product = $(this).val();
          let content = $('#content');
          let value = $('#value');

          $.getJSON("{{url('/dashboard/TesteInput')}}", {id_product},
            function(retorno){
              $('#content').val(retorno.content);
              $('#value').val(retorno.value);
              // console.log($array_values);
            }

          );

        })

      });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</x-app-layout>
</body>

</html>