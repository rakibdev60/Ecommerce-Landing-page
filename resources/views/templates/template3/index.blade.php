<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page->data['hedding2'] }}</title>

    <link rel="icon" type="image/x-icon" href="/favicon.jpeg">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1537589020133773');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1537589020133773&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DJJKJF0D52"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DJJKJF0D52');
</script>

</head>

<body>
    <div class="my-5">



        <div class="max-w-5xl mx-auto">
            <div class="flex flex-wrap md:flex-nowrap gap-5">

                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                  
                    <!-- Carousel wrapper -->
                    <div class="relative h-[40] overflow-hidden rounded-lg md:h-[40rem]">
                        @foreach ($page->data['slider_image'] as $item)
                            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                                <img src="storage/{{ $item }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <div id="default-carousel2" class="relative w-full" data-carousel="slide">
                    <h1 class="text-3xl mb-5 font-bold text-center text-green-500">{{ $page->data['hedding'] }}</h1>
                    <!-- Carousel wrapper -->
                    <div class="relative h-[40] overflow-hidden rounded-lg md:h-[40rem]">
                        @foreach ($page->data['slider_image2'] as $item)
                            <div class="hidden duration-500 ease-in-out" data-carousel-item>
                                <img src="storage/{{ $item }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>




    </div>

    <div class="bg-green-100">
        <div class="max-w-screen-lg py-5 mx-auto">
            <div class="flex flex-wrap items-center justify-center gap-5 px-5">
                <div>
                    <h2 class="text-3xl font-bold">{{ $page->data['hedding2'] }}</h2>
                    <div>
                        @isset($page->data['point1'])
                            <p><svg class="inline w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                                </svg> {{ $page->data['point1'] }}</p>
                        @endisset
                        @isset($page->data['point2'])
                            <p><svg class="inline w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                                </svg> {{ $page->data['point2'] }}</p>
                        @endisset
                        @isset($page->data['point3'])
                            <p><svg class="inline w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                                </svg> {{ $page->data['point3'] }}</p>
                        @endisset
                        @isset($page->data['point4'])
                            <p><svg class="inline w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                                </svg> {{ $page->data['point4'] }}</p>
                        @endisset
                        @isset($page->data['point5'])
                            <p><svg class="inline w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                                </svg> {{ $page->data['point5'] }}</p>
                        @endisset
                    </div>
                    <div class="mt-5">
                        <a class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            href="#order_id">অর্ডার করতে চাই</a>
                    </div>
                </div>
                <div>
                    {{-- <iframe style="max-width: 100%;max-height:auto" src="{{ $page->data['video_link'] }}"></iframe> --}}
                    <img class=" max-w-96" src="/storage/{{ $page->data['video_image'] }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-screen-lg mx-auto my-5">
            @isset($page->data['text1'])
                <p class="text-center">{{ $page->data['text1'] }}</p>
            @endisset
            @isset($page->data['text2'])
                <p class="my-5 text-lg font-bold text-center">{{ $page->data['text2'] }}</p>
            @endisset
            @isset($page->data['text3'])
                <p class="my-5 text-xl text-center ">{{ $page->data['text3'] }}</p>
            @endisset
            @isset($page->data['text4'])
                <p class="my-5 text-3xl font-bold text-center text-green-500">{{ $page->data['text4'] }}</p>
            @endisset

            <p class="my-5 text-center text-red-500">অফারটি লুফে নিতে এখনি <span class="text-green-500 ">“অর্ডার করতে
                    চাই”</span> বাটনে ক্লিক করুন</p>

            <div class="flex justify-center">
                <a href="#order_id"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        অর্ডার করতে চাই
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-blue-100">
        <div class="max-w-2xl py-5 mx-auto">
            <h2 class="mb-5 text-3xl font-bold text-center">{{ $page->data['heading3'] }}</h2>
            <div class="flex flex-col gap-5 ">
                @isset($page->data['text5'])
                    <p><svg class="inline w-6 h-6 text-red-800 me-1 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                        </svg>{{ $page->data['text5'] }}</p>
                @endisset
                @isset($page->data['text6'])
                    <p><svg class="inline w-6 h-6 text-red-800 me-1 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                        </svg>{{ $page->data['text6'] }}</p>
                @endisset
                @isset($page->data['text7'])
                    <p><svg class="inline w-6 h-6 text-red-800 me-1 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                        </svg>{{ $page->data['text7'] }}</p>
                @endisset
                @isset($page->data['text8'])
                    <p><svg class="inline w-6 h-6 text-red-800 me-1 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m8 12 2 2 5-5m4.5 5.3 1-.9a2 2 0 0 0 0-2.8l-1-.9a2 2 0 0 1-.6-1.4V7a2 2 0 0 0-2-2h-1.2a2 2 0 0 1-1.4-.5l-.9-1a2 2 0 0 0-2.8 0l-.9 1a2 2 0 0 1-1.4.6H7a2 2 0 0 0-2 2v1.2c0 .5-.2 1-.5 1.4l-1 .9a2 2 0 0 0 0 2.8l1 .9c.3.4.6.9.6 1.4V17a2 2 0 0 0 2 2h1.2c.5 0 1 .2 1.4.5l.9 1a2 2 0 0 0 2.8 0l.9-1a2 2 0 0 1 1.4-.6H17a2 2 0 0 0 2-2v-1.2c0-.5.2-1 .5-1.4Z" />
                        </svg>{{ $page->data['text8'] }}</p>
                @endisset
            </div>
            <div class="flex justify-center mt-5">
                <a href="#order_id"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        অর্ডার করতে চাই
                    </span>
                </a>
            </div>
        </div>
    </div>

    @include('templates.template3.order')
</body>

</html>
