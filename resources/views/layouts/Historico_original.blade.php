
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel de Administração') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Histórico de Declarações:
                </div>
                    <table borders="1">
                        @foreach($contents as $content )
                        <tr>
                        <td>Id da Declaração{{$content['id_declaracao']}}</td>
                            <td>Id do usuário solicitante{{$content['id_user']}}</td>
                            <td>Remetente{{$content['remetente']}}</td>
                            <td>Destinatário{{$content['destinatario']}}</td>
                            <td>Conteúdo{{$content['content']}}</td>
                            <td>Quantidade{{$content['quantity']}}</td>
                            <td>Valor{{$content['value']}}</td>
                            <td>Data da solicitação{{$content['created_at']}}</td>
                            </tr>
                            @endforeach
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>