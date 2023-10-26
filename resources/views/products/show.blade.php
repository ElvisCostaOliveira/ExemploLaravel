<h1><p>{{ $product->Category->nome }}</p></h1>

<h2>{{ $product -> nome }} - R${{ $product -> preco }}</h2>

<p>{{ $product -> descriacao }}</p>

<a href="{{route('products.edit', $product->id)}}">Editar</a>

<form action="{{route('products.destroy', $product->id)}}" method="POST">

    @method('DELETE')

    @csrf

    <button type="submit">Delete</button>

</form>