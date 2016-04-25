@extends('layouts.master')

@section('style')
    <link href="/css/partner.css" rel="stylesheet">
@endsection

@section('content')

    <h1>合作夥伴</h1>
    <hr>

    @foreach($partners as $partner)
        @include('partner._partner_card')
    @endforeach
@endsection
