 <div class="category-wall-title"><h1>{{ $parcategory->name }}</h1></div>

  @foreach($partners->where('parcategory_name', $parcategory->name)as $partner)
        @include('partner._partner_card')
  @endforeach