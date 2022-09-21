
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <style lang="scss" scoped>

form {
    font-family: "Lora", sans-serif !important;
    font-size: 2.375rem;
    line-height: 1.25rem;
    text-align: left;
    margin-bottom: 2.1875rem;

    color: rgb(44, 44, 44);
  }

  h2 {
    font-family: "Lora", sans-serif !important;
    line-height: 0.9375rem;
    font-size: 1.375rem;
    text-align: left;
    font-style: italic;

    color: rgb(61, 61, 61);
  }

  p {
    margin-top: 1.5625rem;
    font-family: "Merriweather", serif;
    font-size: 0.875rem;
    line-height: 1.3125rem;

    color: black;
    text-align: left;

  padding: 1.25rem;
  border: 0.0625rem solid whitesmoke;
  background-color: white;

  border-top-left-radius: 0.3125rem;
  border-bottom-left-radius: 0.3125rem;
}

.form-sender {
  min-height: 564px;
}


.form-control:active,
.form-control:focus {
  outline: none;
  box-shadow: none !important;
}

.form-control:focus {
  border: 1px solid #e97b00;
  box-shadow: 0 0 4px #e97b00 !important;
}

.form-text {
  color: gray;
  font-size: 0.75rem;
}

</style>
    </head>
    <template>
    <form class="form-container form-sender" @submit.prevent="">
    <div class="row row-cols-12">
      <div class="col-12">
        <h2>Formulário</h2>
        <h1>Remetente</h1>
      </div>

      <div class="col-6">
        <DefaultInput
          v-model="sender.name"
          type="text"
          label="Nome"
          id="inputNomeRemetente"
          formText="Insira o nome do remetente aqui."
          formTextId="inputTextNomeRemetente"
          invalidFeedback="Você se esqueceu de preencher o campo com o nome do remetente."
          classAppend="sender"
        />
      </div>

      <div class="col-6">
        <DefaultInput
          type="text"
          label="CPF/CNPJ"
          id="inputDocumentoRemetente"
          formText="Insira o documento do remetente no campo acima."
          formTextId="inputTextDocumentoRemetente"
          invalidFeedback="Você se esqueceu de preencher o campo com o documento do remetente."
          v-model="sender.document"
          v-mask="['###.###.###-##', '##.###.###/####-##']"
          classAppend="sender"
        />
      </div>

      <div class="col-12 mb-3">
        <label for="inputCepRemetente" class="form-label">CEP</label>
        <input
          type="text"
          name="inputCepRemetente"
          id="inputCepRemetente"
          class="form-control"
          v-model="sender.postalCode"
          @focusout="verifySenderCep"
          maxlength="8"
        />

        <div
          id="inputTextCepRemetente"
          class="form-text default-form-text"
        ></div>

        <div class="invalid-feedback"></div>
      </div>

      <div class="col-6">
        <DefaultInput
          type="text"
          label="Endereço"
          id="inputEnderecoRemetente"
          formText="Preencha o campo de CEP do remetente para que esse campo se preencha automaticamente."
          formTextId="inputTextEnderecoRemetente"
          invalidFeedback="Você se esqueceu de preencher o cep do remetente."
          v-model="sender.address"
          classAppend="sender"
        />
      </div>

      <div class="col-3">
        <DefaultInput
          type="text"
          label="Número"
          id="inputNumeroRemetente"
          formText="Insira o número do remetente acima."
          formTextId="inputNumberNumeroRemetente"
          
          
         
        />
      </div>

      <div class="col-3">
        <DefaultInput
          type="text"
          label="Complemento"
          id="inputComplementoRemetente"
          formText="Insira o complemento do endereço caso possua."
          formTextId="inputTextComplementoRemetente"
          v-model="sender.complement"
          classAppend="sender"
        />
      </div>

      <div class="col-6">
        <DefaultInput
          type="text"
          label="Cidade"
          id="inputCidadeRemetente"
          formText="Preencha o campo de CEP do remetente para que esse campo se preencha automaticamente."
          formTextId="inputTextCityRemetente"
          invalidFeedback="Você se esqueceu de preencher o campo com o CEP do remetente."
          v-model="sender.city"
          classAppend="sender"
        />
      </div>

      <div class="col-6">
        <DefaultInput
          type="text"
          label="Estado"
          id="inputEstadoRemetente"
          formText="Preencha o campo de CEP do destinatário para que esse campo se preencha automaticamente."
          formTextId="inputTextStateRemetente"
          invalidFeedback="Você se esqueceu de preencher o campo com o CEP do destinatário."
          v-model="sender.state"
        />
      </div>

      <div class="col-12">
        <SwitchButton
          id="inputSwitchButtonRemetente"
          text="Salvar formulário remetente?"
          v-model="saveSender"
          @click="this.$store.dispatch('alterSwitchSender')"
          :checked="this.$store.getters.$stateSwitchSender"
          :class="['my-4']"
        />
      </div>
    </div>
  </form>
</template>
    
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
</body>
    </html>
