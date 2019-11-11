@extends('layout.master')

@section('content')
atoms
@component('components.atoms.title', ['text'=>'タイトル'])
@endcomponent
@component('components.atoms.subtitle', ['text'=>'サブタイトル'])
@endcomponent

@component('components.container.normal-block')
@component('components.atoms.title', ['text'=>'タイトル in normal-block'])
@endcomponent
@component('components.atoms.subtitle', ['text'=>'サブタイトル in normal-block'])
@endcomponent
@endcomponent


@endsection
