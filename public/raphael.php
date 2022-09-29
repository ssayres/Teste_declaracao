<?php

session_start();

if (isset($_SESSION['llusuario'])) {
    $user = $_SESSION['llusuario'];

    if (!isset($_COOKIE['login'])) { ?>
      <script>
          alert("Sessão expirada!");
          window.top.location = "index.php";
      </script>
    <?php } ?>
<?php } else { ?>
  <script>
      window.location.href = "index.php";
  </script>
<?php } ?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" dir="ltr">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Controle de Saída RH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/menu/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu/reset.css">
    <link rel="stylesheet" href="css/menu/aisde3.css">
    <link rel="stylesheet" href="css/saidasConfirmadas.css">

</head>

<body>
<aside>

    <div class=" d-flex p-2 text-nowrap justify-content-center align-items-center flex-column">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Entrada e saída de colaboradores anteriores</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text"><label for="data-inicial">Data inicial</label></span>
                    <input class="form-control text-info" type="date" name="data-inicial" id="data-inicial"
                           value="<?= date('Y-m-d') ?>"
                           required>
                </div>
            </div>

            <div class="col">
                <div class="input-group">
                    <span class="input-group-text"><label for="data-final">Data final</label></span>
                    <input class="form-control text-info" type="date" name="data-final" id="data-final"
                           value="<?= date('Y-m-d') ?>"
                           required>
                </div>
            </div>
            <div class="col">
                <button class="btn btn-primary" id="btn-filtrar">Filtrar</button>
                <button class="btn btn-success" id="excel">Exportar para o Excel</button>
            </div>
        </div>
    </div>

    <main>
        <form class="form-product" method="post" action="EnviamentoPortaria.php">
            <table id="tablefc" class="table table-bordered table-hover" responsive="yes">
                <tr name="table" style="position: stick" class="stick">
                    <thead>
                    <th>Nome</th>
                    <th>Motivo</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Solicitação</th>
                    <th>Enviado por</th>
                    <th>Observação gestor</th>
                    <th>Situação</th>
                    <th>Horário da confirmação</th>
                    <th>Observação da portaria</th>
                    <th>Autorizado por</th>
                    </thead>
                </tr>
                <tbody id="tbody">
                </tbody>
            </table>
        </form>


</aside>
</main>

<div class="legenda">
    <div class="enviado">
        <div class="box blue-box"></div>
        <p style="font-weight: bolder">= Enviado</p>
    </div>
    <div class="recusado">
        <div class="box red-box"></div>
        <p style="font-weight: bolder">= Recusada</p>
    </div>
    <div class="pendente">
        <div class="box yellow-box"></div>
        <p style="font-weight: bolder">= Pendente</p>
    </div>
    <div class="efetivado">
        <div class="box green-box"></div>
        <p style="font-weight: bolder">= Efetivado</p>
    </div>
    <div class="nao-efetivado">
        <div class="box purple-box"></div>
        <p style="font-weight: bolder">= Não efetivado</p>
    </div>
</div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script>
    function confirmar(x) {
        let linha = document.getElementsByClassName("tab" + x)

        for (let i = 0; i < linha.length; i++) {
            if (i == linha) {
                linha[i].style.backgroundColor = "green";
            } else {
                linha[i].style.backgroundColor = "black";
            }
        }
    }

    const buscarRelatorio = () => {
        $.ajax({
            url: "gerarRelatorioEntradaSaidaColaboradores.php",
            type: "post",
            data: {
                "data-inicial": $("#data-inicial").val(),
                "data-final": $("#data-final").val()
            },
            success: (response) => {
                $("#tbody").html(response);
                console.log(response)
            }
        });
    };

    $("#excel").on("click", () => {
        $.ajax({
            url: "exportarRelatorioEntradaSaidaColaboradores.php",
            type: "post",
            data: {
                "data-inicial": $("#data-inicial").val(),
                "data-final": $("#data-final").val()
            },
            xhrFields: { responseType: "blob" },
            success: response => {
                const url = window.URL.createObjectURL(new Blob([response]));
                const link = document.createElement("a");;
                link.href = url;
                link.setAttribute("download", "relatório-entrada-saída-colaboradores.xlsx");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                console.log(response)
            }
        })
    });

    $("#btn-filtrar").on("click", () => buscarRelatorio());
    $(document).ready(() => buscarRelatorio());
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
