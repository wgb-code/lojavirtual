<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    @vite('resources/css/app.css')
    <title>Loja Virtual</title>
</head>

<body class="w-screen h-screen font-dmSans">

    <header class="w-screen px-9 hidden bg-blueDark lg:flex justify-between text-center py-3 text-xs select-none">

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
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <i class="fi fi-rr-bars-staggered flex items-center"></i>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a><i class="fi fi-rr-home flex items-center"></i>Home</a>
                    </li>
                    <li>
                        <details>
                            <summary><i class="fi fi-rr-apps flex items-center"></i>Categorias</summary>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
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
            <h2 class="btn btn-ghost text-xl text-blueDark">Will Store</h2>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-grayDark">
                <li>
                    <a><i class="fi fi-rr-home flex items-center"></i>Home</a>
                </li>
                <li>
                    <details>
                        <summary><i class="fi fi-rr-apps flex items-center"></i>Categorias</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
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
        <div class="content-text font-poppins px-8 py-20 lg:px-32 lg:py-40 text-center lg:text-left">
            <p class="text-purpleDark text-md font-bold leading-6 tracking-wider">#Development 2024</p>
            <h3 class="font-dmSans mt-8 text-black font-bold text-6xl md:leading-10">NOVOS PRODUTOS</h3>
            <p class="mt-8 text-grayDark text-xl leading-8">Talk is cheap, show me the code.</p>
            <button class="mt-8 px-10 py-4 bg-blueLight text-white text-xl font-bold rounded transition-transform transform hover:scale-105 hover:bg-blue-600 hover:shadow-lg hover:text-white">
                VER AGORA
            </button>
        </div>
        <div class="lg:block hidden">
            <img src="{{ asset('storage/uploads/welcome-photo.webp') }}" alt="Welcome Photo">
        </div>
    </section>





</body>

</html>