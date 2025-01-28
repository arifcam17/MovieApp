<div class="relative">
    <div class="ml-auto mr-auto">
        <div>
            <!-- Video -->
            <video class="object-contain w-full" src="{{ asset('storage/' . $movie->video) }}"
                poster="{{ asset('storage/' . $movie->poster) }}"></video>
        </div>
    </div>

    <!-- Radial Gradient Overlay -->

    <!-- Content Wrapper -->
    <div class="relative">
        <!-- Content -->
        <div class="absolute bottom-10 left-10 z-20">
            <h1 class="text-md lg:text-4xl text-white cursor-pointer font-bold">{{ $movie->title }}</h1>
            <p class="mt-2 text-sm md:text-md lg:text-lg text-white max-w-[500px]">
                {{ $movie->description }}
            </p>

            <div class="flex gap-4 mt-4">
                <a href="{{ route('movies.watch', ['movie' => $movie->id]) }}"
                    class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex px-6 py-3 rounded">
                    <div>
                        <i class="icon-Play2 text-2xl"></i>
                    </div>
                    Şimdi İzle
                </a>

                <div x-data="{ open: false }" class="group relative">
                    <button @click="open = true"
                        class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                        <i class="icon-Movie text-2xl"></i>
                    </button>

                    <div
                        class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                        <span
                            class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                        Fragman İzle
                    </div>

                    <!-- Modal -->
                    <div x-show="open" @click.away="open = false; pauseVideo()" @click="open = false; pauseVideo()"
                        class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75">
                        <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all">
                            <div class="bg-gray-900 p-4">
                                <button @click="open = false; pauseVideo()" class="text-white float-right">&times;</button>
                                <h3 class="text-lg leading-6 font-medium text-white">
                                    Fragman İzle
                                </h3>
                            </div>
                            <div class="bg-gray-900 p-4 w-full">
                                <iframe id="youtube-iframe" class="w-[560px] h-100 lg:w-[560px] lg:h-[315px]"
                                    src="https://www.youtube.com/embed/{{ str_replace('https://www.youtube.com/watch?v=', '', $movie->youtube_link) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group relative" x-data="{ isFavorite: {{ $movie->isFavorite() ? 'true' : 'false' }} }">
                    <button @click="toggleFavorite({{ $movie->id }}, '{{ $movie->poster }}', $event); isFavorite = !isFavorite"
                            class="bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex p-3 rounded-full">
                        <i :class="isFavorite ? 'icon-Check' : 'icon-Plus'" class="text-2xl"></i>
                    </button>

                    <div
                        class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded bg-third py-[6px] px-4 text-sm font-semibold text-white opacity-0 group-hover:opacity-100">
                        <span
                            class="absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm bg-third"></span>
                        İzleme Listesi
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function pauseVideo() {
        var iframe = document.getElementById('youtube-iframe');
        var iframeSrc = iframe.src;
        iframe.src = iframeSrc; // This will pause the video
    }
</script>
