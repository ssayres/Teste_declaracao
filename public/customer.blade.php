<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
@foreach($content_items  as $contentItem )
     <td>{{$contentItem['id_content']}}</td>
     <td>{{$contentItem['id_product']}}</td>
     <td>{{$contentItem['cost_center']}}</td>
     <td>{{$contentItem['content']}}</td>
              <td>{{$contentItem['quantity']}}</td>
              <td>{{$contentItem['value']}}</td> 
         @endforeach     
         </table>
</body>
</html>