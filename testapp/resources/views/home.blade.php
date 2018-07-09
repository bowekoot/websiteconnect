@extends('layouts.app')

@section('content')
<h1> home </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iusto mollitia porro qui praesentium autem consectetur necessitatibus minima architecto amet. Soluta repellat nihil quos quae maxime eius, architecto sit officia?</p>
@endsection

@section('sidebar')
@parent
    <p>this is appended to the sidebar </p>
@endsection
