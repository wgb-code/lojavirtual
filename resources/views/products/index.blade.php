<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins w-screen h-screen flex justify-center p-10 bg-bg-primary text-text-primary">
    <div class="container w-3/4 border-2 rounded-xl p-8">
        <div class="container-header flex justify-between items-center">
            <h3 class="text-2xl font-medium">Lista de Produtos</h3>
            <div class="btn-register-product bg-text-primar p-2 cursor-pointer hover:bg-bg-secondary hover:text-text-primary" title="Cadastrar novo produto">
                <i class="fa-solid fa-plus cursor-pointer text-bg-primary">
                    <a href="{{ url('/products/new')}}"></a>    <!-- Por padrão, o navegador pega GET -->
                </i>
            </div>
        </div>
        <div class="container-body w-full overflow-auto">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)    
                    <tr>{{ $product->name }}</tr>
                    <tr>{{ $product->quantity }}</tr>
                    <tr>{{ $product->price }}</tr>
                    <tr>
                        <a href="{{ url('/products/update', ['id' => $product->id]) }}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="{{ url('/products/delete', ['id' => $product->id]) }}">
                            <i class="fa-regular fa-trash-can"></i>
                        </a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/c77b23d563.js" crossorigin="anonymous"></script>
</body>
</html>