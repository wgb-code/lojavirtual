<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h3>Lista de Produtos</h3>
    <button>
        <a href="{{ url('/products/new')}}">Adicionar Produto</a>    <!-- Por padrão, o navegador pega GET -->
    </button>

    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }} 
                <a href="{{ url('/products/update', ['id' => $product->id]) }}">Editar</a>
                <a href="{{ url('/products/delete', ['id' => $product->id]) }}">Deletar</a>
            </li>
        @endforeach
    </ul>
</body>
</html>