 @extends('layouts.master')

@section('style')
    <link href="/css/partner.css" rel="stylesheet">
@endsection

@section('content')

    <h1>合作夥伴</h1>
    <hr>

    @foreach($partner_categories as $partnercategory)
            @include('partner._all_partners_wall')
    @endforeach

   

   


  
@endsection
