<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

    <meta name="generator" content="" />
    <meta name="description" content="" />
    <meta name="" content="" />
    <link rel="icon" type="image/svg+xml" href="" />
    <link rel="sitemap" type="application/xml" href="" />

    <meta name="author" content="Julian Cataldo, Zoltán Szőgyényi, Robert Tanislav" />
    <meta name="copyright" content="MIT" />
    @vite(['resources/css/app.css'])
</head>

<body
    class="bg-gray-50 dark:bg-gray-800 scrollbar scrollbar-w-3 scrollbar-thumb-rounded-[0.25rem] scrollbar-track-slate-200  scrollbar-thumb-gray-400 dark:scrollbar-track-gray-900 dark:scrollbar-thumb-gray-700">

    @include('layouts.dashboard-navbar-sidebar')

    @include('layouts.dashboard-sidebar')

    <div class="flex pt-12 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div id="main-content"
            class="relative w-full h-full min-h-screen overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">

            {{ $slot }}

            {{-- @include('layouts.dashboard-footer-sidebar') --}}

        </div>
    </div>

    @vite(['resources/js/app.js'])

    <script>
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

</body>

</html>
