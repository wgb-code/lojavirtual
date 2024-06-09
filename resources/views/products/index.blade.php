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
    <div class="message-alert flex justify-center p-5">
        <div role="alert" class="alert alert-success flex justify-center w-80">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{$message}}</span>
        </div>
    </div>
    @endif

    <section class="pt-10 lg:px-32">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr class="text-sm">
                        <th>Produto ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    @foreach($products as $product)
                    <tr>
                        <th>{{$product['id']}}</th>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['quantity']}}</td>
                        <td class="flex items-center gap-5">
                            <a class="text-center p-2 rounded-full bg-gray-200" href="{{ url('/products/delete', ['id' => $product->id]) }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7H19M10 10V18M14 10V18M10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V7H9V4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3ZM6 7H18V20C18 20.2652 17.8946 20.5196 17.7071 20.7071C17.5196 20.8946 17.2652 21 17 21H7C6.73478 21 6.48043 20.8946 6.29289 20.7071C6.10536 20.5196 6 20.2652 6 20V7Z" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a class="text-center p-2 rounded-full bg-gray-200" href="{{ url('products/update', ['id' => $product->id]) }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.304 4.84395L17.156 7.69595M7 7H4C3.44772 7 3 7.44772 3 8V18C3 18.5523 3.44772 19 4 19H15C15.5523 19 16 18.5523 16 18V13.5M18.409 3.59095C18.5963 3.77817 18.745 4.00047 18.8464 4.24515C18.9478 4.48983 18.9999 4.75209 18.9999 5.01695C18.9999 5.2818 18.9478 5.54406 18.8464 5.78874C18.745 6.03342 18.5963 6.25573 18.409 6.44295L11.565 13.287L8 14L8.713 10.435L15.557 3.59095C15.7442 3.4036 15.9665 3.25498 16.2112 3.15359C16.4559 3.05219 16.7181 3 16.983 3C17.2479 3 17.5101 3.05219 17.7548 3.15359C17.9995 3.25498 18.2218 3.4036 18.409 3.59095Z" stroke="#383838" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</x-app-layout>