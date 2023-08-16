@extends('layout.layout')

@section('content')
    <div class="bg-white">
        <div class="pt-6">
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $article->name }}</h1>
                </div>
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <p class="text-3xl tracking-tight text-gray-900">Автор: {{ $article->user->name }}</p>
                    <br>
                    <p class="text-3xl tracking-tight text-gray-900">Рубрика: {{ $article->category->name }}</p>
                    <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <div>
                        <div class="space-y-6">
                            <p class="text-base text-gray-900">{{ $article->description }}</p></div>
                    </div>
                    <div class="mt-10">
                        {{ $article->text }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
