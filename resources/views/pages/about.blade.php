@extends('welcome')
@section('pages')
    <section class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
          <div class="items-center lg:flex">
            <div class="lg:w-1/2">
              <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">
                Why we exist?
              </h2>

              <p class="mt-4 text-gray-500 dark:text-gray-400 lg:max-w-md">
                My company exists to support local business. We want to offer a
                quality service and informative excellence in the tourist
                services market, providing our clients with information on
                high-quality products and services.
              </p>

              <div class="flex items-center mt-6 -mx-2">
                <a class="mx-2" href="#" aria-label="Twitter">
                  <svg
                    class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path d="M492 109.5c-17.4 7.7-36 12.9-55.6 15.3 20-12 35.4-31 42.6-53.6-18.7 11.1-39.4 19.2-61.5 23.5C399.8 75.8 374.6 64 346.8 64c-53.5 0-96.8 43.4-96.8 96.9 0 7.6.8 15 2.5 22.1-80.5-4-151.9-42.6-199.6-101.3-8.3 14.3-13.1 31-13.1 48.7 0 33.6 17.2 63.3 43.2 80.7-16-.4-31-4.8-44-12.1v1.2c0 47 33.4 86.1 77.7 95-8.1 2.2-16.7 3.4-25.5 3.4-6.2 0-12.3-.6-18.2-1.8 12.3 38.5 48.1 66.5 90.5 67.3-33.1 26-74.9 41.5-120.3 41.5-7.8 0-15.5-.5-23.1-1.4C62.8 432 113.7 448 168.3 448 346.6 448 444 300.3 444 172.2c0-4.2-.1-8.4-.3-12.5C462.6 146 479 129 492 109.5z" />
                  </svg>
                </a>

                <a class="mx-2" href="#" aria-label="Facebook">
                  <svg
                    class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z" />
                  </svg>
                </a>

                <a class="mx-2" href="#" aria-label="Linkden">
                  <svg
                    class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z" />
                  </svg>
                </a>

                <a class="mx-2" href="#" aria-label="Github">
                  <svg
                    class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                  </svg>
                </a>
              </div>
            </div>

            <div class="mt-8 lg:mt-0 lg:w-1/2">
              <div class="flex items-center justify-center lg:justify-end">
                <div class="max-w-lg">
                  <img
                    class="object-cover object-center w-full h-64 rounded-md shadow"
                    src="/assets/2miami.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
          <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div>
              <svg class="w-8 h-8" viewBox="0 0 30 30" fill="none">
                <path
                  d="M29.6931 14.2283L22.7556 6.87823C22.3292 6.426 21.6175 6.40538 21.1652 6.83212C20.7137 7.25851 20.6927 7.9706 21.1195 8.42248L27.3284 15L21.1195 21.5783C20.6927 22.0302 20.7137 22.7419 21.1652 23.1687C21.3827 23.3738 21.6606 23.4754 21.9374 23.4754C22.2363 23.4754 22.5348 23.3569 22.7557 23.1233L29.6932 15.7729C30.1022 15.339 30.1023 14.6618 29.6931 14.2283Z"
                  fill="#2D3748"
                />
                <path
                  d="M8.88087 21.578L2.67236 15L8.88087 8.42215C9.30726 7.97028 9.28664 7.25812 8.83476 6.83179C8.38323 6.4054 7.67073 6.42603 7.2444 6.87791L0.306858 14.2279C-0.102245 14.6614 -0.102245 15.3391 0.306858 15.7726L7.24475 23.123C7.466 23.3574 7.76413 23.4755 8.06302 23.4755C8.33976 23.4755 8.61767 23.3735 8.83476 23.1684C9.28705 22.742 9.30726 22.0299 8.88087 21.578Z"
                  fill="#2D3748"
                />
                <path
                  d="M16.8201 3.08774C16.2062 2.99476 15.6317 3.41622 15.5379 4.03011L12.2379 25.6302C12.1441 26.2445 12.566 26.8186 13.1803 26.9124C13.238 26.921 13.295 26.9252 13.3516 26.9252C13.898 26.9252 14.3773 26.5266 14.4624 25.97L17.7624 4.3699C17.8562 3.7556 17.4343 3.1815 16.8201 3.08774Z"
                  fill="#4299E1"
                />
              </svg>

              <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                Mission
              </h1>

              <p class="mt-2 text-gray-500 dark:text-gray-400">
                To support our local businesses to grow their clientele through
                our company, website, marketing, and diffusion by communicating
                and transmitting to our user&#39;s quality, security, loyalty,
                and value to all the varieties we are promoting. while at the
                same time helping tourist and locals by providing them with a
                guide to the hottest spots in the city.
              </p>
            </div>

            <div>
              <svg class="w-8 h-8" viewBox="0 0 30 30" fill="none">
                <path
                  d="M27.3633 7.08984H26.4844V6.21094C26.4844 4.75705 25.3015 3.57422 23.8477 3.57422H4.39453C2.94064 3.57422 1.75781 4.75705 1.75781 6.21094V21.1523H0.878906C0.393516 21.1523 0 21.5459 0 22.0312V23.7891C0 25.2429 1.18283 26.4258 2.63672 26.4258H27.3633C28.8172 26.4258 30 25.2429 30 23.7891V9.72656C30 8.27268 28.8172 7.08984 27.3633 7.08984ZM3.51562 6.21094C3.51562 5.72631 3.9099 5.33203 4.39453 5.33203H23.8477C24.3323 5.33203 24.7266 5.72631 24.7266 6.21094V7.08984H20.332C18.8781 7.08984 17.6953 8.27268 17.6953 9.72656V21.1523H3.51562V6.21094ZM1.75781 23.7891V22.9102H17.6953V23.7891C17.6953 24.0971 17.7489 24.3929 17.8465 24.668H2.63672C2.15209 24.668 1.75781 24.2737 1.75781 23.7891ZM28.2422 23.7891C28.2422 24.2737 27.8479 24.668 27.3633 24.668H20.332C19.8474 24.668 19.4531 24.2737 19.4531 23.7891V9.72656C19.4531 9.24193 19.8474 8.84766 20.332 8.84766H27.3633C27.8479 8.84766 28.2422 9.24193 28.2422 9.72656V23.7891Z"
                  fill="#2D3748"
                />
                <path
                  d="M24.7266 21.1523H22.9688C22.4834 21.1523 22.0898 21.5459 22.0898 22.0312C22.0898 22.5166 22.4834 22.9102 22.9688 22.9102H24.7266C25.212 22.9102 25.6055 22.5166 25.6055 22.0312C25.6055 21.5459 25.212 21.1523 24.7266 21.1523Z"
                  fill="#4299E1"
                />
                <path
                  d="M23.8477 12.3633C24.3331 12.3633 24.7266 11.9698 24.7266 11.4844C24.7266 10.999 24.3331 10.6055 23.8477 10.6055C23.3622 10.6055 22.9688 10.999 22.9688 11.4844C22.9688 11.9698 23.3622 12.3633 23.8477 12.3633Z"
                  fill="#4299E1"
                />
              </svg>

              <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                Vision
              </h1>

              <p class="mt-2 text-gray-500 dark:text-gray-400">
                To become #1 guide in Miami for the hottest spots of the city.
                This guide is for everyone, from those who are visiting Miami
                for their first time to those who were born here. We want
                everyone to be aware of the best places and what Miami is
                really.
              </p>
            </div>

            <div>
              <svg class="w-8 h-8" viewBox="0 0 30 30" fill="none">
                <g clipPath="url(#clip0)">
                  <path
                    d="M26.599 4.339a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zM7.151 25.661a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zM23.486 13.163a8.636 8.636 0 00-1.19-2.873l1.123-1.123-2.592-2.59L19.705 7.7a8.636 8.636 0 00-2.873-1.19V4.921h-3.664v1.586a8.634 8.634 0 00-2.873 1.19l-1.122-1.12-2.592 2.589 1.123 1.123a8.636 8.636 0 00-1.19 2.873H4.922l-.002 3.663h1.592A8.626 8.626 0 007.704 19.7l-1.127 1.127 2.59 2.591 1.128-1.127a8.623 8.623 0 002.873 1.19v1.597h3.664v-1.597a8.628 8.628 0 002.873-1.19l1.128 1.128 2.59-2.592-1.127-1.127a8.627 8.627 0 001.19-2.873h1.593v-3.664h-1.593zM15 19.256a4.255 4.255 0 110-8.511 4.255 4.255 0 010 8.51z"
                    fill="#4299E1"
                  />
                  <path
                    d="M5.276 23.2c-.42 0-.823.105-1.182.302A13.853 13.853 0 011.172 15C1.172 7.375 7.375 1.172 15 1.172c.927 0 1.854.092 2.754.274a.586.586 0 00.232-1.149A15.111 15.111 0 0015 0C10.993 0 7.226 1.56 4.393 4.393A14.902 14.902 0 000 15c0 3.37 1.144 6.66 3.228 9.296-.268.4-.413.872-.413 1.365 0 .657.257 1.275.721 1.74a2.444 2.444 0 001.74.721c.658 0 1.276-.256 1.74-.721.465-.465.721-1.083.721-1.74s-.256-1.276-.72-1.74a2.445 2.445 0 00-1.74-.72zm.912 3.373a1.28 1.28 0 01-.912.377 1.28 1.28 0 01-.911-.377 1.28 1.28 0 01-.378-.912c0-.344.134-.668.378-.912a1.28 1.28 0 01.911-.377c.345 0 .668.134.912.378.243.243.377.567.377.911 0 .344-.134.668-.377.912zM26.772 5.703a2.465 2.465 0 00-.308-3.104 2.446 2.446 0 00-1.74-.721c-.658 0-1.276.256-1.74.72a2.445 2.445 0 00-.721 1.74c0 .658.256 1.276.72 1.741.465.465 1.083.72 1.74.72.42 0 .824-.104 1.183-.3A13.854 13.854 0 0128.828 15c0 7.625-6.203 13.828-13.828 13.828-.918 0-1.836-.09-2.728-.269a.586.586 0 00-.23 1.15c.968.193 1.963.291 2.958.291 4.007 0 7.773-1.56 10.607-4.393A14.902 14.902 0 0030 15c0-3.37-1.145-6.66-3.228-9.297zm-2.96-.452a1.28 1.28 0 01-.377-.912c0-.344.134-.668.377-.911a1.28 1.28 0 01.912-.378 1.29 1.29 0 010 2.578 1.28 1.28 0 01-.912-.377z"
                    fill="#2D3748"
                  />
                  <path
                    d="M12.582 25.078c0 .324.263.586.586.586h3.664a.586.586 0 00.586-.586v-1.136a9.179 9.179 0 002.199-.911l.802.802a.586.586 0 00.829 0l2.59-2.592a.586.586 0 000-.828l-.802-.802a9.169 9.169 0 00.911-2.199h1.132a.586.586 0 00.586-.585v-3.664a.586.586 0 00-.586-.586h-1.132a9.17 9.17 0 00-.911-2.199l.797-.797a.587.587 0 000-.829l-2.592-2.59a.586.586 0 00-.829 0l-.795.797a9.177 9.177 0 00-2.2-.912V4.922a.586.586 0 00-.585-.586h-3.664a.586.586 0 00-.586.586v1.126a9.169 9.169 0 00-2.199.91l-.796-.795a.586.586 0 00-.828 0l-2.592 2.59a.585.585 0 000 .828l.797.797a9.173 9.173 0 00-.911 2.199h-1.13a.586.586 0 00-.586.585l-.002 3.664a.585.585 0 00.586.586h1.132c.207.77.512 1.507.911 2.2l-.801.8a.586.586 0 000 .83l2.59 2.59a.586.586 0 00.829 0l.801-.801a9.185 9.185 0 002.2.911v1.136zm-1.97-3.28a.586.586 0 00-.732.078l-.713.714-1.761-1.763.712-.713a.586.586 0 00.078-.732 8.02 8.02 0 01-1.11-2.679.586.586 0 00-.572-.462H5.507l.002-2.492h1.005a.586.586 0 00.572-.463 8.022 8.022 0 011.11-2.678.586.586 0 00-.078-.733l-.708-.708 1.763-1.761.707.707c.196.196.5.228.733.078a8.016 8.016 0 012.678-1.11.586.586 0 00.463-.573v-1h2.492v1c0 .277.193.515.463.573a8.024 8.024 0 012.678 1.11c.232.15.537.118.732-.078l.708-.707 1.762 1.761-.708.708a.586.586 0 00-.078.732 8.027 8.027 0 011.11 2.679c.058.27.297.463.573.463h1.007v2.492h-1.007a.586.586 0 00-.573.462 8.02 8.02 0 01-1.11 2.679.586.586 0 00.078.732l.713.713-1.761 1.762-.714-.713a.586.586 0 00-.732-.078 8.027 8.027 0 01-2.678 1.11.586.586 0 00-.463.573v1.011h-2.492v-1.01a.586.586 0 00-.463-.574 8.021 8.021 0 01-2.678-1.11z"
                    fill="#2D3748"
                  />
                  <path
                    d="M19.841 15A4.847 4.847 0 0015 10.158 4.847 4.847 0 0010.158 15 4.847 4.847 0 0015 19.841 4.847 4.847 0 0019.841 15zm-8.51 0A3.674 3.674 0 0115 11.33 3.674 3.674 0 0118.67 15 3.674 3.674 0 0115 18.67 3.674 3.674 0 0111.33 15z"
                    fill="#2D3748"
                  />
                  <path
                    d="M20.395 2.216a.59.59 0 00.415-.172.593.593 0 00.171-.415.59.59 0 00-.586-.586.589.589 0 00-.586.586.589.589 0 00.586.587zM9.63 27.794a.59.59 0 00-.586.586.59.59 0 00.586.586.59.59 0 00.586-.586.59.59 0 00-.586-.585z"
                    fill="#4299E1"
                  />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <path fill="#fff" d="M0 0h30v30H0z" />
                  </clipPath>
                </defs>
              </svg>

              <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                Image
              </h1>

              <p class="mt-2 text-gray-500 dark:text-gray-400">
                My image would be as an updated, reliable guide with an
                impeccable reputation so that both my clients and my guide
                visitors consider not having to look for trending sites in any
                other guide.
              </p>
            </div>
            <div>
              <svg class="w-8 h-8" viewBox="0 0 30 30" fill="none">
                <g clipPath="url(#clip0)">
                  <path
                    d="M26.599 4.339a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zM7.151 25.661a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zM23.486 13.163a8.636 8.636 0 00-1.19-2.873l1.123-1.123-2.592-2.59L19.705 7.7a8.636 8.636 0 00-2.873-1.19V4.921h-3.664v1.586a8.634 8.634 0 00-2.873 1.19l-1.122-1.12-2.592 2.589 1.123 1.123a8.636 8.636 0 00-1.19 2.873H4.922l-.002 3.663h1.592A8.626 8.626 0 007.704 19.7l-1.127 1.127 2.59 2.591 1.128-1.127a8.623 8.623 0 002.873 1.19v1.597h3.664v-1.597a8.628 8.628 0 002.873-1.19l1.128 1.128 2.59-2.592-1.127-1.127a8.627 8.627 0 001.19-2.873h1.593v-3.664h-1.593zM15 19.256a4.255 4.255 0 110-8.511 4.255 4.255 0 010 8.51z"
                    fill="#4299E1"
                  />
                  <path
                    d="M5.276 23.2c-.42 0-.823.105-1.182.302A13.853 13.853 0 011.172 15C1.172 7.375 7.375 1.172 15 1.172c.927 0 1.854.092 2.754.274a.586.586 0 00.232-1.149A15.111 15.111 0 0015 0C10.993 0 7.226 1.56 4.393 4.393A14.902 14.902 0 000 15c0 3.37 1.144 6.66 3.228 9.296-.268.4-.413.872-.413 1.365 0 .657.257 1.275.721 1.74a2.444 2.444 0 001.74.721c.658 0 1.276-.256 1.74-.721.465-.465.721-1.083.721-1.74s-.256-1.276-.72-1.74a2.445 2.445 0 00-1.74-.72zm.912 3.373a1.28 1.28 0 01-.912.377 1.28 1.28 0 01-.911-.377 1.28 1.28 0 01-.378-.912c0-.344.134-.668.378-.912a1.28 1.28 0 01.911-.377c.345 0 .668.134.912.378.243.243.377.567.377.911 0 .344-.134.668-.377.912zM26.772 5.703a2.465 2.465 0 00-.308-3.104 2.446 2.446 0 00-1.74-.721c-.658 0-1.276.256-1.74.72a2.445 2.445 0 00-.721 1.74c0 .658.256 1.276.72 1.741.465.465 1.083.72 1.74.72.42 0 .824-.104 1.183-.3A13.854 13.854 0 0128.828 15c0 7.625-6.203 13.828-13.828 13.828-.918 0-1.836-.09-2.728-.269a.586.586 0 00-.23 1.15c.968.193 1.963.291 2.958.291 4.007 0 7.773-1.56 10.607-4.393A14.902 14.902 0 0030 15c0-3.37-1.145-6.66-3.228-9.297zm-2.96-.452a1.28 1.28 0 01-.377-.912c0-.344.134-.668.377-.911a1.28 1.28 0 01.912-.378 1.29 1.29 0 010 2.578 1.28 1.28 0 01-.912-.377z"
                    fill="#2D3748"
                  />
                  <path
                    d="M12.582 25.078c0 .324.263.586.586.586h3.664a.586.586 0 00.586-.586v-1.136a9.179 9.179 0 002.199-.911l.802.802a.586.586 0 00.829 0l2.59-2.592a.586.586 0 000-.828l-.802-.802a9.169 9.169 0 00.911-2.199h1.132a.586.586 0 00.586-.585v-3.664a.586.586 0 00-.586-.586h-1.132a9.17 9.17 0 00-.911-2.199l.797-.797a.587.587 0 000-.829l-2.592-2.59a.586.586 0 00-.829 0l-.795.797a9.177 9.177 0 00-2.2-.912V4.922a.586.586 0 00-.585-.586h-3.664a.586.586 0 00-.586.586v1.126a9.169 9.169 0 00-2.199.91l-.796-.795a.586.586 0 00-.828 0l-2.592 2.59a.585.585 0 000 .828l.797.797a9.173 9.173 0 00-.911 2.199h-1.13a.586.586 0 00-.586.585l-.002 3.664a.585.585 0 00.586.586h1.132c.207.77.512 1.507.911 2.2l-.801.8a.586.586 0 000 .83l2.59 2.59a.586.586 0 00.829 0l.801-.801a9.185 9.185 0 002.2.911v1.136zm-1.97-3.28a.586.586 0 00-.732.078l-.713.714-1.761-1.763.712-.713a.586.586 0 00.078-.732 8.02 8.02 0 01-1.11-2.679.586.586 0 00-.572-.462H5.507l.002-2.492h1.005a.586.586 0 00.572-.463 8.022 8.022 0 011.11-2.678.586.586 0 00-.078-.733l-.708-.708 1.763-1.761.707.707c.196.196.5.228.733.078a8.016 8.016 0 012.678-1.11.586.586 0 00.463-.573v-1h2.492v1c0 .277.193.515.463.573a8.024 8.024 0 012.678 1.11c.232.15.537.118.732-.078l.708-.707 1.762 1.761-.708.708a.586.586 0 00-.078.732 8.027 8.027 0 011.11 2.679c.058.27.297.463.573.463h1.007v2.492h-1.007a.586.586 0 00-.573.462 8.02 8.02 0 01-1.11 2.679.586.586 0 00.078.732l.713.713-1.761 1.762-.714-.713a.586.586 0 00-.732-.078 8.027 8.027 0 01-2.678 1.11.586.586 0 00-.463.573v1.011h-2.492v-1.01a.586.586 0 00-.463-.574 8.021 8.021 0 01-2.678-1.11z"
                    fill="#2D3748"
                  />
                  <path
                    d="M19.841 15A4.847 4.847 0 0015 10.158 4.847 4.847 0 0010.158 15 4.847 4.847 0 0015 19.841 4.847 4.847 0 0019.841 15zm-8.51 0A3.674 3.674 0 0115 11.33 3.674 3.674 0 0118.67 15 3.674 3.674 0 0115 18.67 3.674 3.674 0 0111.33 15z"
                    fill="#2D3748"
                  />
                  <path
                    d="M20.395 2.216a.59.59 0 00.415-.172.593.593 0 00.171-.415.59.59 0 00-.586-.586.589.589 0 00-.586.586.589.589 0 00.586.587zM9.63 27.794a.59.59 0 00-.586.586.59.59 0 00.586.586.59.59 0 00.586-.586.59.59 0 00-.586-.585z"
                    fill="#4299E1"
                  />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <path fill="#fff" d="M0 0h30v30H0z" />
                  </clipPath>
                </defs>
              </svg>

              <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                Values
              </h1>

              <p class="mt-2 text-gray-500 dark:text-gray-400">
                Our core values are ethics, integrity, customer focus, unique
                culture, discipline, and constant improvement.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
        <h2 class="text-xl font-medium text-gray-800 capitalize dark:text-white md:text-2xl">
          Our Partners
        </h2>

        <div class="flex items-center justify-center">
          <div class="grid gap-8 mt-8 sm:grid-cols-4 lg:grid-cols-8 xl:grid-cols-8">
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

      <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
          <div class="lg:w-1/2">
            <div class="h-64 bg-cover bg-new-services lg:rounded-lg lg:h-full" style="background-image: url('/assets/newservices.jpg')"></div>
          </div>

          <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">
              New Services
              {{-- <span class="text-indigo-600 dark:text-indigo-400">Idea</span> --}}
            </h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400">
              Below the umbrella are several types of services, such as:
            </p>
            <ul>
              <li>
                Restaurants and bars: Allowing for an unforgettable food
                experience to be provided to customers.
              </li>
              <li>
                Hotels: where the customers can relax and have a good time.
                Creating memories for life.
              </li>
              <li>
                Attractions: several location packages for a complete and
                enjoyable trip.
              </li>
              <li>
                Transportation Services: to allow customers to learn more about
                South Florida.
              </li>
            </ul>

            <div class="mt-8">
              <a
                href="/business-plan"
                class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700"
              >
                Start Now
              </a>
            </div>
          </div>
        </div>
      </section>
@endsection
