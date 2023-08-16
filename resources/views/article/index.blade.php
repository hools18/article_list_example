@extends('layout.layout')

@section('title', 'Список статей')

@section('content')
    @role(\App\Domain\User\Enums\RoleEnum::AUTHOR->value)
    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <a
                href="{{ route('articles.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Создать статью
            </a>
        </div>
    </div>
    @endrole
    <article-page/>

@endsection
