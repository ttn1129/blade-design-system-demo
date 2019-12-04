@extends('layout.master')

@section('content')
molcules
@component('components.molecules.header', [
    'title'=>'タイトル in normal-block',
    'subtitle'=>'サブタイトル in normal-block',
    ])
@endcomponent

@endsection
