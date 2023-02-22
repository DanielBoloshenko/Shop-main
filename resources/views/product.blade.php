@extends('layouts.app')

@section('content')

<main class="mt-5 pt-4">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('img/'.$product->img) }}" class="img-fluid" alt="" />
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4">
                    <div class="mb-3">
                        <strong class="mb-0"><p style="font-size: 20px;">{{$product->name}}</p></strong>
                        <span class="mt-0">{{$product->category}}</span>
                    </div>

                    <p class="lead">
                        <span>{{$product->price}} ₽</span>
                    </p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa sint voluptatibus! Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                    <form action="{{ route('addToCart', $product->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-dark" type="submit">Добавить в корзину</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
