<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Cadastro de produtos
                </div>

                <div class="content">
                    <div class="container">
                        <div class="table-responsive custom-table-responsive">

                            <table class="table custom-table">
                                <thead>
                                    <tr>

                                        <th scope="col">
                                            <label class="control control--checkbox">
                                                <input type="checkbox" onclick="toggle(this);" />

                                                <div class="control__indicator"></div>
                                            </label>
                                        </th>


                                        <th scope="col">ID do produto</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col" id="gerar-todos"><a href="#">{{ __('Gerar PDFs ✉') }}</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($contents as $content )
                                    <tr scope="row">
                                        <th scope="row">
                                            <label class="control control--checkbox">
                                                <input type="checkbox" value="{{$content['id_declaracao']}}" name="checkbox" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </th>
                                        <td>{{$content['id_product']}}</td>
                                        <td>{{$content['content']}}</td>
                                        <td>{{$content['value']}} </td>
                                        <td>
                                           
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                            </th>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>