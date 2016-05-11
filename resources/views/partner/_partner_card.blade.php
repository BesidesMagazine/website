<div class="partner-card">
    <h1 class="partner-name">{{$partner->name}}</h1>
    <a href="{{ $partner->connect }}">
    <div class="partner-logo-pic" style="background-image: url('{{ $partner->logourl }}')"></div></a>
    <div class="partner-text">{{$partner->introduction}}</div>
</div>
