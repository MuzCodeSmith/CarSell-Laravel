  @extends('Layouts.clean')
  @section('childContent')
    @include('Layouts.partials.header')
      @yield('content')
    <footer></footer>
  @endsection
