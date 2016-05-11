 <div class="category-wall-title"><h1>{{ $partnercategory->name }}</h1></div>

  @foreach($partners->where('partnercategoryname', $partnercategory->name)as $partner)
        @include('partner._partner_card')
  @endforeach