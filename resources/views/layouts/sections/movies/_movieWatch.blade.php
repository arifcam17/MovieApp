<div class="video-player flex items-center justify-center min-h-screen bg-black" oncontextmenu="return false;">
        <!-- Video Player -->
        <video class="video" id="myVideo" ondblclick="openFullscreen()" width="100%" height="100%" poster="{{ asset('storage/' . $movie->poster) }}">
            <source src="{{ asset('storage/' . $movie->video) }}" type="video/mp4" />
            <track src="{{ asset('subtitle/sample.vtt') }}" kind="subtitles" srclang="en" label="English">
            <p>İnternet tarayıcınız HTML5 video oynatıcısını desteklemiyor.</p>
        </video>
        <button class="controls__button toggleButton" title="Toggle Play" style="opacity: 0;"> <i class="icon-Play"></i> </button>
        <i class="icon-rotate_left controls__button time_skipL" data-skip="-10" style="opacity: 0;"></i>
        <i class="icon-rotate_right controls__button time_skipR" data-skip="10" style="opacity: 0;"></i>
        <div class="controls " style="opacity: 0;">
            <div class="progress">
                <div class="progress__filled"></div>
            </div>
            <label class="time mx-2 text-white px-4" style="margin-top: 8px" >0:00</label>
            <i class="icon-volume_high text-xl mx-2 text-white" style="max-width: 25px; margin-top: 10px; margin-left: 15px;"> </i>
            <input type="range" name="volume" class="controls__slider sounds" min="0" max="1" step="0.05" value="1" width="10px" style="margin-top: 5px" />
            <div class="flex items-center justify-end space-x-2 ml-auto" style="margin-left: auto;">
                <i class="icon-subtitle text-white text-xl cursor-pointer hover:text-gray-400" id="subtitleToggle" onclick="toggleSubtitles()"> </i>
                <div class="dropdown relative">
                    <button onclick="toggleDropdown()" class="dropdown-toggle cursor-pointer bg-transparent-200 p-2 rounded">
                        <i class="icon-speed text-white"></i>
                    </button>
                    <div class="dropdown-menu">
                        <div class="dropdown-item" data-speed="2">2x</div>
                        <div class="dropdown-item" data-speed="1.5">1.5x</div>
                        <div class="dropdown-item selected" data-speed="1">1x</div>
                        <div class="dropdown-item" data-speed="0.5">0.5x</div>
                        <div class="dropdown-item" data-speed="0.25">0.25x</div>
                    </div>
                </div>
                <label class="time2 text-white" style="margin-top:0; margin-left 10px">0:00</label>
                <i id="fullscreen" class="icon-expand text-xl px-2 text-white" onclick="openFullscreen();" title="Fullscreen"> </i>
            </div>
        </div>
    </div>
