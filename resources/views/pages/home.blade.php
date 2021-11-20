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
        <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
        <h2 class="text-xl font-medium text-gray-800 capitalize dark:text-white md:text-2xl">
          Our Partners
        </h2>

        <div class="flex items-center justify-center">
          <div class="grid gap-8 mt-8 sm:grid-cols-4 lg:grid-cols-8">
            <div class="w-full max-w-xs text-center">
              <a href="https://www.bigbustours.com/es/miami/autobus-turistico-miami/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/bigbus.png"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">BigBus</h3> */}
                {/* <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">CEO</span> */} --}}
              </div>
            </div>

            <div class="w-full max-w-xs text-center">
              <a href="https://fairchildgarden.org/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/ftbg.jpg"
                  alt="avatar"
                />
              </a>
              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Jane Doe</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Co-founder</span> */} --}}
              </div>
            </div>

            <div class="w-full max-w-xs text-center">
              <a href="https://www.hiro163.com/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/hiromiami.png"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Steve Ben</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">UI/UX</span> */} --}}
              </div>
            </div>

            <div class="w-full max-w-xs text-center">
              <a href="https://myntlounge.com/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/made.png"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Patterson Johnson</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Software Engineer</span> */} --}}
              </div>
            </div>
            <div class="w-full max-w-xs text-center">
              <a href="http://www.mistero1.com/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/mistery.jpg"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Patterson Johnson</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Software Engineer</span> */} --}}
              </div>
            </div>
            <div class="w-full max-w-xs text-center">
              <a href="https://www.miamiseaquarium.com/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/seamiami.jpg"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Patterson Johnson</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Software Engineer</span> */} --}}
              </div>
            </div>
            <div class="w-full max-w-xs text-center">
              <a href="https://seaview-hotel.com/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/seaview.png"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Patterson Johnson</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Software Engineer</span> */} --}}
              </div>
            </div>
            <div class="w-full max-w-xs text-center">
              <a href="https://vizcaya.org/">
                <img
                  class="object-contain object-center w-full h-48 mx-auto rounded-lg"
                  src="/assets/vizcaya.png"
                  alt="avatar"
                />
              </a>

              <div class="mt-2">
                {{-- {/* <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Patterson Johnson</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Software Engineer</span> */} --}}
              </div>
            </div>
        </div>
        </div>
      </section>
      <section class="my-8 mx-2">
        <h3 class="w-full text-center font-bold text-blue-600 text-2xl">CONTACT US</h3>
          <div class="grid grid-cols-3 gap-2 divide-x-2 text-justify">
          <p>Welcome to The 305 Total Experience corporation, your number one source for all
            things entertainment, hospitality transportation, and restaurants in Miami. We&#39;re
            dedicated to providing you the very best of our services.</p>
            <p class="pl-2">Founded in 2021 by Aracelis Díaz. The 305 Total Experience corporation has come a
              long way from its beginnings in Miami, Fl. When Aracelis Díaz first started out, her
              passion for promote Miami tourism drove them to start their own business.</p>
              <p class="pl-2">We hope you enjoy our services as much as we enjoy offering them to you. If you have
                any questions or comments, please don&#39;t hesitate to contact us.
                Sincerely,
<br>

<span class="text-right ml-12 italic">
  Aracelis Díaz.

</span>
              </p>
          </div>
      </section>
@endsection
