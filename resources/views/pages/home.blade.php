@extends('welcome')
@section('pages')
   <div class="w-full bg-center bg-cover h-128" style="background-image: url('assets/miamilarga.jpg');" >
            <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-white uppercase lg:text-3xl">This history beging with <a href="/about" class="text-blue-400 underline">Us</a></h1>
                    <a href="/business-plan"
                     class="w-full px-4 py-2 mt-4 text-sm font-medium text-white uppercase transition-colors duration-200 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Business Plan</a>
                </div>
            </div>
        </div>
@endsection
