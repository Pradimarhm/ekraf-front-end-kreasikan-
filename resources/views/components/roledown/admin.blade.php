<div class="relative ml-3">
    <div>
        <button type="button" @click="isOpen = !isOpen"
            class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-600"
            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img class="size-8 rounded-full"
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="">
        </button>
    </div>
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white dark:bg-gray-700 py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
        <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->

        <a href="/profil" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
            role="menuitem" tabindex="-1" id="user-menu-item-0">Profil</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
            role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
        <a href="/keluar" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-700 hover:text-white"
            role="menuitem" tabindex="-1" id="user-menu-item-2">Keluar</a>
    </div>
</div>
