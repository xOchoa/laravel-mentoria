@extends('layouts.admin')
@section('titulo','Titulo')
@section('content')
    @component('components.lista',['arreglo'=>$arreglo])

    @endcomponent
@endsection