@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')

@section('content')
    @auth
        @if(auth()->user()->is_subscribed)
            @include('layouts.sections.home._slideHero')

            <section class="container mx-auto">
                @include('layouts.sections.home._slideFirst', ['favorites' => $favorites])
                @include('layouts.sections.home._slideSecond')
                @include('layouts.sections.home._slideThird')
            </section>

            @push('styles')
                @vite(['resources/css/swiper.css'])
            @endpush

            @push('scripts')
                @vite(['resources/js/swiper.js','resources/js/toggleFavorite.js', 'resources/js/sliders.js'])
            @endpush
        @else
             <div class="text-white text-2xl flex flex-col justify-center items-center h-screen">
                <p>Ödeme yapmadınız. Lütfen ödeme yapınız.</p>
                <a href="{{ route('payment') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded mt-4">
                    Ödeme Ekranına Dön

                    
                </a>
            </div>
        @endif
    @endauth

    @guest
        <section class="container mx-auto">
            @include('layouts.sections.home._guestHero')
            @include('layouts.sections.home._guestWatchEnjoy')
            @include('layouts.sections.home._chooseYourPlan')
        </section>
    @endguest
@endsection
