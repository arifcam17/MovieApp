<section class=" h-screen  bg-gray-900">



    <div class="w-full flex flex-col md:flex-row justify-center gap-8 p-6">
        <!-- Users Card -->
        <a href="{{  route('admin.users') }}" class="bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300 overflow-hidden group w-[90%] mx-auto card">
            <div class="relative flex justify-center">

                <i class="icon-Users1 text-white text-6xl mb-4 group-hover:text-blue-400 transition-colors duration-300"></i> <!-- Users 3 people icon -->
            </div>
            <h2 class="text-2xl font-semibold text-white mb-2 text-center group-hover:text-blue-300 transition-colors duration-300">Kullanıcılar</h2>
            <p class="text-3xl font-bold text-white text-center">{{ $usersCount }}</p>
        </a>
        <!-- Movies Card -->
        <a href="{{  route('admin.movies.index') }}" class="bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300 overflow-hidden group w-[90%] mx-auto card">
            <div class="relative flex justify-center">

                <i class="icon-Movie text-white text-6xl mb-4 group-hover:text-red-400 transition-colors duration-300"></i> <!-- Movies icon -->
            </div>
            <h2 class="text-2xl font-semibold text-white mb-2 text-center group-hover:text-red-300 transition-colors duration-300">Filmler</h2>
            <p class="text-3xl font-bold text-white text-center">{{ $moviesCount }}</p>
        </a>
    </div>
</section>
