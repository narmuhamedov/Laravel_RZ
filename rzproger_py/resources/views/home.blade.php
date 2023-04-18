@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Aliquid beatae earum expedita nihil quam suscipit voluptatum!
        Doloribus id ipsam, minus natus neque nisi perspiciatis?
        Architecto atque consectetur cum explicabo vero.</p>
@endsection

@section('aside')
@parent
    <p>Просто текст как дополнительный</p>
@endsection
