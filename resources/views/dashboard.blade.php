<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-bg-primary w-60 h-screen pt-5 px-3 font-poppins fixed">
        <div class="nav-header flex justify-between items-center text-text-primary">
            <h2 class="text-xl pl-3">Loja Virtual</h2>
            <i class="fa-solid fa-bars cursor-pointer pr-3" title="Minimizar menu de navegação" aria-label="Close"></i>
        </div>
        <div class="nav-body pt-10 text-text-primary">
            <ul>
                <li class="flex
                           justify-start 
                           items-center 
                           py-3 pl-3 gap-2 
                           font-light 
                           text-sm
                           hover:bg-bg-secondary 
                           hover:rounded 
                           hover:cursor-pointer" title="Navegar para o ínicio da loja">
                    <i class="fa-solid fa-house"></i>
                    <a aria-current="page" href="{{ url('/menu') }}">Início</a>
                </li>
                <li class="flex 
                           justify-start 
                           items-center
                           py-3 pl-3
                           mt-5 gap-2 
                           font-light 
                           text-sm
                           hover:bg-bg-secondary
                           hover:rounded
                           hover:cursor-pointer" title="Navegar para o cadastro de produtos">
                    <i class="fa-regular fa-pen-to-square"></i>
                    <a aria-current="page" href="{{ url('/products') }}">Cadastro de produtos</a>
                </li>
                <li class="flex 
                           justify-start 
                           items-center
                           py-3 pl-3
                           mt-5 gap-2 
                           font-light 
                           text-sm
                           hover:bg-bg-secondary 
                           hover:rounded 
                           hover:cursor-pointer" title="Navegar para o cadastro de tipos de produtos">
                    <i class="fa-regular fa-clipboard"></i>
                    <a href="{{ url('/types') }}">Cadastro de tipos</a>
                </li>
                <li class="flex 
                           justify-start 
                           items-center 
                           py-3 pl-3
                           mt-5 gap-2 
                           font-light 
                           text-sm 
                           hover:text-red-500 
                           hover:cursor-pointer
                           hover:text-text-danger" title="Sair da conta">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                </li>
                <form id="logout-form" class="hidden" action="{{ url('/logout') }}" method="POST" >
                    @csrf
                </form>
            </ul>
        </div>
    </nav>

    <script src="https://kit.fontawesome.com/c77b23d563.js" crossorigin="anonymous"></script>
</body>

</html>