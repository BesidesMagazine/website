 @extends('layouts.master')

@section('style')
    <link href="/css/partner.css" rel="stylesheet">
@endsection

@section('content')

    <div class="content-container">
        <div class="partner">
            <span class="partner-title">合作夥伴</span>
            <hr class="separator">

            @foreach($partner_categories as $partnercategory)
                    @include('partner._all_partners_wall')
            @endforeach
        </div>

    </div>








@endsection
