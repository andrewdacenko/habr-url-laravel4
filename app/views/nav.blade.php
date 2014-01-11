<ul class="nav nav-pills">
  @foreach(Country::all() as $country)
    <li><a href="{{{ route('country', $country->code) }}}">{{{ $country->name }}}</a>
  @endforeach
</ul>