<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Cadastrar Categorias') }}
            </h2>
            <a href="{{url('types/')}}">
                <button class="btn btn-outline btn-sm">Ver Categorias</button>
            </a>
        </div>
    </x-slot>
    <form action="{{ url('types/new') }}" method="POST" class="flex flex-col justify-center items-center mx-20 mt-5">
        @csrf
        <div class="flex flex-col w-1/2 font-dmSans">
            <div class="flex flex-col mt-5">
                <label for="name" class="mb-2 text-gray-800 font-medium dark:text-zinc-200">Categoria</label>
                <input name="name" id="name" type="text" placeholder="Nome da Categoria" class="px-3 py-2 rounded border-gray-400 active:border-violet-700 focus:outline-none focus:ring focus:ring-violet-300 dark:bg-blueDark" required>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <button type="submit" class="flex items-center justify-center mt-10 border-2 rounded-lg px-3 py-2 gap-2 font-semibold bg-blue-700 text-zinc-200 focus:outline-none focus:ring focus:ring-violet-300 dark:bg-transparent">
                Salvar
                <i class="fi fi-rr-badge-check flex items-center"></i>
            </button>
        </div>
    </form>

</x-app-layout>