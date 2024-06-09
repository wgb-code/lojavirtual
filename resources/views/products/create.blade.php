<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Cadastrar Produto') }}
            </h2>
            <a href="{{url('products/')}}">
                <button class="btn btn-outline btn-sm">Ver Produtos</button>
            </a>
        </div>
    </x-slot>
    <div class="card-body flex place-content-center p-4">
        <form class="w-2/3" action="{{ url('products/new') }}" method="POST">
            @csrf
            <div>
                <label for="name">{{ __('Name') }}:</label>
                <input id="name" class="w-full block" type="text" name="name" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div>
                <label for="description">{{ __('Description') }}:</label>
                <input id="description" class="w-full block" type="text" name="description" required />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div>
                <label for="quantity">{{ __('Quantity') }}:</label>
                <input id="quantity" class="w-full block" type="text" name="quantity" required />
                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
            </div>
            <div>
                <label for="price">{{ __('Price') }}:</label>
                <input id="price" class="w-full block" type="text" name="price" required />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>
            <div>
                <label for="type_id">{{__('Type')}}</label>
                <select id="type_id" class="w-full block" name="type_id">
                    @foreach ($types as $type)
                    <option value="{{$type['id']}}">{{$type['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex  w-full justify-between mt-4">
                <div class="">
                    <button href="{{ url('/products') }}">Voltar</button>
                </div>
                <div>
                    <button type="submit">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>