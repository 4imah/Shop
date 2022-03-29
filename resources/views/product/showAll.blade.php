@extends('../shopPage')

@section('product')
@foreach($products as $product)
    {{$product->food}}
    {{$product->price}}
@endforeach
@endsection