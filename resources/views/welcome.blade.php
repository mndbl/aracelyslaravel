@extends('layouts.app')

@section('content')
  <div class="flex flex-col min-h-screen">
 @include('partials.navbar')
   <div class="flex-grow">
       @yield('pages')
   </div>
   @include('partials.footer')
  </div>
@endsection
