<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edição de Produto') }}
            </h2>
            <a href="{{url('products/')}}">
                <button class="btn btn-outline btn-sm">Ver Produtos</button>
            </a>
        </div>
    </x-slot>
    <form action="{{ url('products/update') }}" method="POST" class="flex flex-col justify-center items-center mx-20 mt-5 cursor-pointer">
        @csrf

        <div class="flex flex-col w-1/2 font-dmSans">

            <div class="flex flex-col mt-5">
                <label for="name" class="mb-2 text-gray-800 font-medium">Produto</label>
                <input name="name" id="name" type="text" value="{{ $product['name'] }}" class="px-3 py-2 rounded border-gray-400 active:border-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
            </div>

            <div class="flex flex-col mt-5">
                <label for="description" class="mb-2 text-gray-800 font-medium">Descrição</label>
                <div class="relative">
                    <textarea name="description" id="description" class="block w-full rounded border border-gray-400 focus:outline-none focus:ring focus:ring-violet-300 resize-none">{{ $product['description'] }}</textarea>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fi fi-rr-attribution-pencil"></i>
                    </div>
                </div>
            </div>

            <div class="grid grid-flow-col gap-4 mt-5">
                <div class="flex flex-col">
                    <label for="quantity" class="mb-2 text-gray-800 font-medium">Quantidade</label>
                    <div class="relative">
                        <input name="quantity" id="quantity" type="number" value="{{ $product['quantity'] }}" class="block w-full px-3 py-2 rounded border border-gray-400 focus:outline-none focus:ring focus:ring-violet-300 appearance-none">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i class="fi fi-rr-sort-amount-up"></i>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="price" class="mb-2 text-gray-800 font-medium">Preço</label>
                    <div class="relative">
                        <input name="price" id="price" type="number" value="{{ $product['price'] }}" class="block w-full px-3 py-2 rounded border-gray-400 focus:outline-none focus:ring focus:ring-violet-300 appearance-none custom-number-input">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i class="fi fi-rr-badge-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mt-5">
                <label for="type_id" class="mb-2 text-gray-800 font-medium">Categoria</label>
                <select name="type_id" id="type_id" class="select select-info w-full rounded border-gray-400">
                    @foreach($types as $type)
                    <option {{ $product->type_id == $type->id ? "selected" : "" }} value="{{ $type->id }}" class="font-poppins"> {{ $type->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="flex items-center justify-center mt-10 border-2 rounded-lg px-3 py-2 gap-2 font-semibold bg-blue-700 text-zinc-200 hover:bg-sky-700 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 cursor-pointer">
                Salvar
                <i class="fi fi-rr-badge-check flex items-center"></i>
            </button>
        </div>
    </form>

</x-app-layout>