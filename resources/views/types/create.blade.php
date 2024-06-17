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
</x-app-layout>