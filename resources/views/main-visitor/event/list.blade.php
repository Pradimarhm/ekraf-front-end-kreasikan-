<div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-9 flex flex-col justify-center">
    <div class=" w-full flex-none ">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white eventPage1-textBoxUp">
            Event
        </h2>
        <div class="mb-4 grid gap-4 md:mb-8 md:grid-cols-2 grid-cols-1 eventPage1-cardUp">
            @for ($i = 0; $i < 9; $i++)
                <x-ui.card-event size="" />
            @endfor
        </div>
        <x-ui.pagination />
    </div>
</div>

@vite('resources/js/visitor/event/page1.js')
