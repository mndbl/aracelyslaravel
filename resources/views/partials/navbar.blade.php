@php
    $links = [
    ['path'=> '/', 'text'=> 'Home'],
    ['path'=> '/about', 'text'=> 'About'],
    ['path'=> '/business-plan', 'text'=> 'Business Plan'],
    ['path'=> '/operations', 'text'=> 'Operations'],
    ['path'=> '/corporate-structure', 'text'=> 'Corporate Structure'],
    ['path'=> '/hotel-operations', 'text'=> 'Hotel Operations'],
    ['path'=> '/financials', 'text'=> 'Financials'],
    ['path'=> '/marketing-plan', 'text'=> 'Marketing Plan'],
    ['path'=> '/strategic-management', 'text'=> 'Strategic Management'],
    ['path'=> '/future-development', 'text'=> 'Future Development'],
]
@endphp
<nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-2 py-4 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <div class="text-xl font-semibold text-gray-700">
                        <a class="text-xl font-bold text-gray-800 dark:text-white  hover:text-gray-700 dark:hover:text-gray-300" href="/">The 305 <br/> Total Experience</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fillRule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="hidden lg:flex lg:items-center">
                    @foreach ($links as $link)
                    <a href={{$link['path']}}
                    class="block mx-1 mt-2 text-sm text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">{{$link['text']}}</a>

                    @endforeach
                    {{-- <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Web Designers</a>
                    <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">UI/UX Designers</a>
                    <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Contact</a> */} --}}
                </div>
            </div>
        </div>
    </nav>
