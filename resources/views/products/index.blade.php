<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Listagem de Produtos') }}
            </h2>
            <a href="{{url('products/new')}}">
                <button class="btn btn-outline btn-sm">Adicionar</button>
            </a>
        </div>
    </x-slot>

    @if ($message = Session::get('success'))
    <div id="toast" class="toast toast-end fixed z-50">
        <div class="alert bg-green-600 text-white shadow-lg rounded-lg p-4 flex flex-col dark:bg-blueDark dark:text-zinc-200">
            <span>{{$message}}</span>
            <progress id="progressBar" class="progress progress-success w-56" value="0" max="100"></progress>
            <button id="closeToast" class="btn btn-sm btn-danger ml-2 dark:bg-zinc-200 dark:text-blueDark hover:bg-blueDark hover:text-zinc-200 hover:border-0">Fechar</button>
        </div>
    </div>
    @endif

    <section class="pt-10 lg:px-32">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr class="text-sm text-center">
                        <th>Produto ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 dark:text-gray-200">
                    @foreach($products as $product)
                    <tr class="text-center">
                        <th>{{$product['id']}}</th>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['quantity']}}</td>
                        <td class="flex items-center gap-5">
                            <a class="text-center p-2 rounded-full" href="{{ url('/products/delete', ['id' => $product->id]) }}">
                                <i class="fi fi-rr-trash"></i>
                            </a>
                            <a class="text-center p-2 rounded-full" href="{{ url('products/update', ['id' => $product->id]) }}">
                                <i class="fi fi-rr-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</x-app-layout>