<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                             alt="Your Company">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('main.index') }}" @class([
                            'bg-gray-900' => Route::is('main.index'),
                            "text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                        ])>Главная</a>
                        <a href="{{ route('article.index') }}" @class([
                            'bg-gray-900' => Route::is('article.index'),
                            "text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                        ])>Статьи</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="relative ml-3">
                        <div class="ml-10 flex items-baseline space-x-4">
                            @auth
                                <a href="{{ route('logout') }}"
                                   class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                   aria-current="page">Выйти</a>
                            @else
                                <a href="{{ route('login') }}"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Войти</a>
                                <a href="{{ route('register') }}"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Регистрация</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="{{ route('main.index') }}"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
               aria-current="page">Главная</a>
            <a href="{{ route('article.index') }}"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Статьи</a>
        </div>

        <div class="border-t border-gray-700 pb-3">
            @auth
                <div class="mt-3 space-y-1 px-2">
                    <a href="{{ route('logout') }}"
                       class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Выйти</a>
                </div>
            @else
                <div class="mt-3 space-y-1 px-2">
                    <a href="{{ route('login') }}"
                       class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Войти</a>
                </div>
                @if (Route::has('register'))
                    <div class="mt-3 space-y-1 px-2">
                        <a href="{{ route('register') }}"
                           class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Регистрация</a>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</nav>
