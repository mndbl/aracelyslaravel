<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		{{-- <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}"> --}}

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            /* Tab content - closed */
            .tab-content {
            max-height: 0;
            -webkit-transition: max-height .35s;
            -o-transition: max-height .35s;
            transition: max-height .35s;
            }
            /* :checked - resize to full height */
            .tab input:checked ~ .tab-content {
            max-height: 100vh;
            }
            /* Label formatting when open */
            .tab input:checked + label{
            /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
            font-size: 1.25rem; /*.text-xl*/
            padding: 1.25rem; /*.p-5*/
            border-left-width: 2px; /*.border-l-2*/
            border-color: #6574cd; /*.border-indigo*/
            background-color: #f8fafc; /*.bg-gray-100 */
            color: #6574cd; /*.text-indigo*/
            }
            /* Icon */
            .tab label::after {
            float:right;
            right: 0;
            top: 0;
            display: block;
            width: 1.5em;
            height: 1.5em;
            line-height: 1.5;
            font-size: 1.25rem;
            text-align: center;
            -webkit-transition: all .35s;
            -o-transition: all .35s;
            transition: all .35s;
            }
            /* Icon formatting - closed */
            .tab input[type=checkbox] + label::after {
            content: "+";
            font-weight:bold; /*.font-bold*/
            border-width: 1px; /*.border*/
            border-radius: 9999px; /*.rounded-full */
            border-color: #b8c2cc; /*.border-grey*/
            }
            .tab input[type=radio] + label::after {
            content: "\25BE";
            font-weight:bold; /*.font-bold*/
            border-width: 1px; /*.border*/
            border-radius: 9999px; /*.rounded-full */
            border-color: #b8c2cc; /*.border-grey*/
            }
            /* Icon formatting - open */
            .tab input[type=checkbox]:checked + label::after {
            transform: rotate(315deg);
            background-color: #6574cd; /*.bg-indigo*/
            color: #f8fafc; /*.text-grey-lightest*/
            }
            .tab input[type=radio]:checked + label::after {
            transform: rotateX(180deg);
            background-color: #6574cd; /*.bg-indigo*/
            color: #f8fafc; /*.text-grey-lightest*/
            }
         </style>
    </head>

    <body>
        @yield('body')

        @livewireScripts
    </body>
</html>
