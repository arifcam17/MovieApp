@extends('layouts.adminMaster')
@section('title', 'Anasayfa')
 @section('description', 'test.')
 @section('keywords', 'test, test, test')
  @section('content')
<section class="relative z-10 py-10">

 <div class="container mx-auto">
  <div class="bg-white">
   <div class="flex flex-wrap items-stretch">
    <div class="w-full lg:w-1/2">
     <div class="relative hidden h-full w-full overflow-hidden lg:flex">
      <div class="flex h-full items-end">
       <img src="{{asset('./images/loginBg.jpg')}}" alt="image"   loading="lazy" class="h-full w-full object-cover object-center" />
      </div>
     </div>
    </div>
    <div class="w-full lg:w-1/2">
     <div class="w-full py-14 px-8 sm:p-[70px] lg:px-14 xl:px-[90px]">
      <h2 class="text-dark mb-3 text-[32px] font-bold">
       Hoşgeldiniz
      </h2>
      <p class="mb-14 text-base text-[#8F8F8F] xl:mb-20">
        Herkesin hesabına erişmesini <br class="hidden sm:block" />
        kolaylaştırıyoruz
      <form action="{{ route('admin.authenticate') }}" method="post">
        @csrf

        <div class="mb-4">
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                class="@error('email') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none"
            />
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <input
                type="password"
                name="password"
                placeholder="Enter your Password"
                class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none"
            />
            @error('password')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        @if ($errors->has('failure'))
            <p class="error">{{ $errors->first('failure') }}</p>
        @endif

        <div class="mb-8 flex flex-wrap justify-between">
            <div class="inline-flex items-center">
                <label class="flex items-center cursor-pointer relative" for="check-with-link">
                    <input type="checkbox" name="remember" id="remember"  class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-slate-800 checked:border-slate-800" id="check-with-link" />
                    <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <i class="icon-Check text-md"></i>
                    </span>
                </label>
                <label for="remember" class="cursor-pointer ml-2 text-[#adadad] text-sm" for="check-with-link">
                    Beni Hatırla
                </label>
            </div>

            <a href="javascript:void(0)" class="text-primary mb-2 text-base hover:underline">
                Şifrenizi mi unuttunuz?
            </a>
        </div>

        <button type="submit" class="h-12 w-full rounded-lg bg-primary text-white">Login</button>
    </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<!-- ====== Forms Section End -->

@endsection
