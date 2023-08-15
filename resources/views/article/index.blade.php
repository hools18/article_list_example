@extends('layout.layout')

@section('title', 'Список статей')

@section('content')
    @role(\App\Domain\User\Enums\RoleEnum::AUTHOR->value)
    <a href="{{ route('articles.create') }}"
       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Создать статью
    </a>
    @endrole

    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Категории</label>
    <select id="countries"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Выберите категорию</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
    </select>
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Авторы</label>
    <select id="countries"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Выберите автора</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
    </select>
    <h1>Список статей</h1>
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                    <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">michael.foster@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                    <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Dries Vincent</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">dries.vincent@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Business Relations</p>
                <div class="mt-1 flex items-center gap-x-1.5">
                    <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                        <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                    </div>
                    <p class="text-xs leading-5 text-gray-500">Online</p>
                </div>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Lindsay Walton</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">lindsay.walton@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Front-end Developer</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                    <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Courtney Henry</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">courtney.henry@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Designer</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                    <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Tom Cook</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">tom.cook@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Director of Product</p>
                <div class="mt-1 flex items-center gap-x-1.5">
                    <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                        <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                    </div>
                    <p class="text-xs leading-5 text-gray-500">Online</p>
                </div>
            </div>
        </li>
    </ul>

@endsection
