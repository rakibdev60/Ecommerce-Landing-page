<x-dashboard-layout>
    <div class="px-5">

        {!! form_start($form, ['enctype' => 'multipart/form-data']) !!}
        {!! form_row($form->name) !!}
        {!! form_row($form->slug) !!}
        {!! form_row($form->template_type) !!}
        <h2 class="text-xl font-extrabold dark:text-white mt-5">Page Other Option</h2>
        @include('templates.' . $page->template_type . '.form')
        {!! form_end($form, $renderRest = true) !!}

    </div>

    {{-- mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 --}}
</x-dashboard-layout>
