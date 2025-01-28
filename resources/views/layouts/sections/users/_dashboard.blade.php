<section class="relative flex min-h-screen w-full items-start ">

    <div class="p-[30px]">

        <div
            class="flex flex-wrap items-end justify-between sm:flex-nowrap sm:space-x-4 md:mb-6">
            <div class="mb-6">
                <h2 class="mb-2 text-2xl font-semibold text-white">
                    Profil Bilgileri
                </h2>
            </div>


            @if (session('success'))
            <div style="color: white; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
            @endif

        </div>

        <div class=" flex flex-wrap">
            <div class="w-full px-4 lg:w-7/12 2xl:w-2/3">
                <div
                    class="mb-8 rounded-lg border border-stroke bg-white lg:mb-0">
                    <h3
                        class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Kişisel Bilgiler
                    </h3>
                    <div class="p-7">

                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif


                        <form action="{{ route('dashboard.update') }}" method="POST">
                            @csrf
                            <div class="flex flex-wrap">

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="full_name"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Ad Soyad
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                placeholder="Full Name"
                                                value="{{ old('name', auth()->user()->name) }}"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" required />
                                            @error('name')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                            <span
                                                class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                                    <i class="icon-Users text-[#637381]"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>



                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="email"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Email Adresi
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                placeholder="Email Address"
                                                value="{{ old('email', auth()->user()->email) }}"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" required />
                                            @error('email')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                            <span
                                                class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                       <i class="icon-Email text-2xl text-[#637381]"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="current_password"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Mevcut Şifre
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                id="current_password"
                                                name="current_password"
                                                placeholder="Current Password"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] px-5 text-base text-black outline-none focus:border-primary" required />
                                            @error('current_password')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="password"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Yeni Şifre
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                id="password"
                                                name="password"
                                                placeholder="Enter your new password"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] px-5 text-base text-black outline-none focus:border-primary" />
                                            @error('password')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-3">
                                    <div class="mb-[30px]">
                                        <label
                                            for="password_confirmation"
                                            class="mb-[10px] block text-base font-medium text-black">
                                            Yeni Şifre Tekrar
                                        </label>
                                        <div class="relative">
                                            <input
                                                type="password"
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                placeholder="Re-type your new password"
                                                class="h-[46px] w-full rounded-md border border-[#E0E0E0] px-5 text-base text-black outline-none focus:border-primary" />
                                        </div>
                                    </div>
                                </div>


                                <div class="w-full px-3 flex justify-center items-center">
                                    <button type="submit"
                                        class="flex h-11 items-center justify-center rounded border border-transparent bg-primary px-6 text-base font-medium text-white hover:bg-opacity-90">
                                        Değişiklikleri Kaydet
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Photo ve Account delete bölümleri için kapsayıcı start-->
            <div class="w-full px-4 lg:w-5/12 2xl:w-1/3 space-y-6">


                <!-- Photo start -->
                <div class="w-full rounded-lg border border-stroke bg-white lg:w-auto">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Fotoğrafınız
                    </h3>
                    <div class="p-7 grid place-items-center">
                        <div class="mb-4 flex flex-col items-center gap-6">
                            <div class="h-[55px] w-[55px]">
                                @if(Auth::check() &&   Auth::user()->profile_photo)
                                <img
                                    src="{{ asset('avatars/' . Auth::user()->profile_photo) }}"
                                    id="profileImage"
                                    alt="photo"
                                     loading="lazy"
                                    class="h-full w-full rounded-full object-cover object-center" />
                                @else
                                <img
                                    src="{{ asset('images/smile-icon.jpg') }}"
                                    id="profileImage"
                                    alt="Smile Icon"
                                     loading="lazy"
                                    class="h-full w-full rounded-full object-cover object-center" />
                                @endif
                            </div>

                            <!-- Fotoğraf güncelleme formu -->
                            <form action="{{ route('photo.update') }}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center gap-4">
                                @csrf
                                <label for="profile_photo" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Fotoğrafı Değiştir
                                    <input type="file" class="sr-only" name="profile_photo" id="profile_photo" accept="image/*" onchange="previewImage(event)" />
                                </label>
                                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Fotoğraf Güncelle
                                </button>
                            </form>

                            <!-- Fotoğraf silme formu -->
                            <form action="{{ route('photo.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Fotoğraf Silme
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Photo end -->


                <!-- Account delete start -->
                <div class="w-full rounded-lg border border-stroke bg-white lg:w-auto">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black text-center">
                        Hesap Sil
                    </h3>

                    <div class="p-7 place-items-center">
                        <div class="mb-4 flex items-center">
                            <div class="mr-3 h-[55px] w-full ">
                                <form action="{{ route('dashboard.delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-6 py-4  rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-1">
                                        Hesap Sil
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Account delete end -->

            </div>
            <!-- Photo ve Account delete bölümleri için kapsayıcı end-->

        </div>
    </div>





</section>
