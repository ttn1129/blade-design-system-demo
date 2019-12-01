@extends('layout.master')

@section('content')
atoms
@component('components.atoms.title', ['text'=>'タイトル'])
@endcomponent
@component('components.atoms.subtitle', ['text'=>'サブタイトル'])
@endcomponent



@endsection
