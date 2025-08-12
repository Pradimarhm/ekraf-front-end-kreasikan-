<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">

<x-head></x-head>

<body class=" scrollbar-custom h-full">
    <div class=" scrollbar-custom min-h-full">

        <x-navbar.visitor />
        <main class=" scrollbar-custom pt-10 bg-white dark:bg-gray-900">
            <div class=" scrollbar-custom mx-auto pt-6">

                <x-ui.alert></x-ui.alert>

                {{ $slot }}

            </div>
        </main>

        <x-footer></x-footer>

</body>

</html>
