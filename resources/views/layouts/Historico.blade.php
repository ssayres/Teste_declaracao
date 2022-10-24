<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link href="{{ URL::asset('css/ajustes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.mim.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/tabela.css') }}" rel="stylesheet" type="text/css">


</head>


  <body>

<div class="content">
  <div class="container">
    <div class="table-responsive custom-table-responsive">

    <table class="table custom-table">
          <thead>
            <tr>

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox" onclick="toggle(this);"/>

                  <div class="control__indicator"></div>
                </label>
              </th>


              <th scope="col">ID Declaração</th>
              <th scope="col">ID do Usuário</th>
              <th scope="col">Remetente</th>
              <th scope="col">Destinatário</th>
              <th scope="col">Data da Solicitação</th>
                <th scope="col" id="gerar-todos"><a href="#">{{ __('Gerar PDFs ✉') }}</a></th>
            </tr>
          </thead>

          <tbody>
          @foreach($contents as $content )
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox" value="{{$content['id_declaracao']}}" name="checkbox"  />
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>{{$content['id_declaracao']}}</td>
              <td>{{$content['id_user']}}</td>
              <td>{{$content['remetente']}}<small class="d-block">{{$content['content']}}</small>
              </td>
              <td>{{$content['destinatario']}}</td>
              <td>{{$content['created_at']}}</td>

            <td> <x-nav-link :href="route('dashboard.download', $content['id_declaracao'])"  :active="request()->routeIs('dashboard.download', $content['id_declaracao'])">
            {{ __('Detalhar ✉') }}
                    </x-nav-link></th>


</td>

              <!-- <td>{{$content['content']}}</td> -->
              <!-- <td>{{$content['quantity']}}</td> -->
              <!-- <td>{{$content['value']}}</td> -->

            </tr>
            @endforeach
          </tbody>
    </table>

  </div>

</div>

</div>


<!-- [MDB] -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

<script type="text/javascript" src="js/mdbootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>

<!-- [Script para selecionar todos] -->
<script>
function toggle(source) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i] != source)
          checkboxes[i].checked = source.checked;
  }
}
</script>

<!-- [Script para chamar a NavBar] -->
<script>
  $("#navbar").load("navbar.html");
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{asset('js/scripts.js')}}"></script>

<script>
$(function() {
    $("#gerar-todos").on("click", function (e) {
        e.preventDefault()
        $("input:checkbox[name=checkbox]:checked").each(function() {
            funcao_pdf($(this).val())
        })
    })
    $("input").on("input.highlight", function() {
      var search = $(this).val();
      $("#context").unmark().mark(search);
    }).trigger("input.highlight").focus();
});
</script>
</x-app-layout>
</body>
</html>