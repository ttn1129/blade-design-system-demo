@extends('layout.master')

@section('content')
organisms
@component('components.organisms.header', [
    'title'=>'タイトル in normal-block',
    'subtitle'=>'サブタイトル in normal-block',
    ])
@endcomponent

@endsection
