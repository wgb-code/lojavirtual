<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    @vite('resources/css/app.css')
    <title>Will Store</title>
</head>

<body class="min-w-screen min-h-screen font-dmSans">

    <header class="min-w-screen px-9 hidden bg-blueDark lg:flex justify-between text-center py-3 text-xs select-none">

        <div class="primeiros-contatos flex gap-5">
            <div class="phone-contact flex gap-3 text-white">
                <i class="fi fi-rr-phone-call flex items-center"></i>
                <p class="font-semibold">(43) 3125-5517</p>
            </div>

            <div class="mail-contact flex gap-3 text-white">
                <i class="fi fi-rr-envelope flex items-center"></i>
                <p class="font-semibold">admin@lojavirtual.com</p>
            </div>
        </div>

        <h2 class="text-blueLight tracking-wide font-semibold">80% de desconto na primeira compra</h2>

        <div class="social-media-contact flex gap-3 text-white">
            <p class="font-semibold">Siga-nos:</p>
            <i class="fi fi-brands-instagram flex items-center"></i>
            <i class="fi fi-brands-youtube flex items-center"></i>
            <i class="fi fi-brands-facebook flex items-center"></i>
        </div>
    </header>

    <nav class="navbar bg-base-100 px-5">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden dark:text-zinc-200">
                    <i class="fi fi-rr-bars-staggered flex items-center"></i>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 dark:text-zinc-200">
                    <li>
                        <a><i class="fi fi-rr-home flex items-center"></i>Home</a>
                    </li>
                    <li>
                        <details>
                            <summary><i class="fi fi-rr-apps flex items-center"></i>Categorias</summary>
                            <ul class="p-2">
                                @foreach($types as $type)
                                <li>
                                    <a>{{ $type->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <i class="fi fi-rr-user flex items-center"></i>Acessar
                            </summary>
                            <ul class="p-2">
                                <li>
                                    <a href="{{url('login')}}">Login</a>
                                </li>
                                <li>
                                    <a href="{{url('register')}}">Cadastro</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li class="md:flex lg:hidden">
                        <details>
                            <summary class="text-red-600">
                                <i class="fi fi-rr-bullhorn flex items-center"></i>Suporte
                            </summary>
                            <ul class="p-2">
                                <li><a>Telefone</a></li>
                                <li><a>Email</a></li>
                                <li><a>Redes Sociais</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
            <h2 class="btn btn-ghost text-xl text-blueDark dark:text-zinc-200">Will Store</h2>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-grayDark dark:text-zinc-200">
                <li>
                    <a><i class="fi fi-rr-home flex items-center"></i>Home</a>
                </li>
                <li>
                    <details>
                        <summary><i class="fi fi-rr-apps flex items-center"></i>Categorias</summary>
                        <ul class="p-2">
                            @foreach($types as $type)
                            <li>
                                <a>{{ $type->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary>
                            <i class="fi fi-rr-user flex items-center"></i>Acessar
                        </summary>
                        <ul class="p-2">
                            <li>
                                <a href="{{url('login')}}">Login</a>
                            </li>
                            <li>
                                <a href="{{url('register')}}">Cadastro</a>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </nav>

    <section class="max-w-screen mx-5 bg-blueExtraLight select-none flex lg:flex-row flex-col items-center lg:items-start justify-center lg:justify-start rounded-md">
        <div class="content-text font-poppins px-8 py-20 lg:px-32 lg:py-40 text-center lg:text-left max-w-full">
            <p class="text-purpleDark text-md font-bold leading-6 tracking-wider">#Development 2024</p>
            <h3 class="font-dmSans mt-8 text-black font-bold text-6xl md:leading-10">NOVOS PRODUTOS</h3>
            <p class="mt-8 text-grayDark text-xl leading-8">Talk is cheap, show me the code.</p>
            <button class="mt-8 px-10 py-4 bg-blueLight text-zinc-200 text-xl font-bold rounded transition-transform transform hover:scale-105 hover:bg-blue-600 hover:shadow-lg hover:text-zinc-200">
                VER AGORA
            </button>
        </div>
        <div class="lg:block hidden">
            <img src="{{ asset('storage/uploads/welcome-photo.webp') }}" alt="Foto inicial da página, ruiva com suas mãos segurando o cabelo.">
        </div>
    </section>

    <section class="max-w-screen mx-5 my-20 font-dmSans">
        <div class="produtos-destaques text-center">
            <h2 class="text-blueDark text-2xl font-bold leading-8 dark:text-zinc-200">PRODUTOS RECENTES</h2>
            <p class="mt-3 text-grayDark tracking-wide dark:text-zinc-400">Abaixo os 10 produtos mais recentes.</p>
        </div>

        <div class="mt-14 grid grid-cols-2 md:grid-cols-4 gap-10">
            @foreach($products->take(8) as $product)
            <article class="flex flex-col items-center mb-6 md:mb-10">
                <div class="font-poppins select-none">
                    <div class="p-5 bg-blueLight rounded">
                        <img src="{{ asset('storage/uploads/no-image.webp') }}" class="w-40 h-40" alt="Imagem default quando não tiver imagem cadastrada.">
                    </div>
                    <h3 class="mt-6 text-left text-base text-blueLight font-dmSans font-bold leading-6">
                        {{$product->name}}
                    </h3>
                    <h5 class="text-left text-sm text-grayDark font-medium leading-6 dark:text-zinc-400">
                        #{{$product->type->name}}
                    </h5>
                    <p class="my-2 md:my-4 text-left text-sm text-grayDark dark:text-zinc-400">
                        {{$product->description}}
                    </p>

                    <div class="mt-2 flex justify-between w-full">
                        <p class="p-2 rounded bg-blueLight flex items-center text-white font-medium dark:text-black">
                            R${{$product->price}}
                        </p>
                        <p class="p-2 text-center border-2 border-blueLight rounded-md font-medium text-blueLight">
                            {{$product->quantity}}
                        </p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        
    </section>

</body>

</html>