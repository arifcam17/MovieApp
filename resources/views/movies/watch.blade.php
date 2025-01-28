@extends('layouts.master')

@section('content')
    @push('styles')
        @vite(['resources/css/video.css'])
    @endpush


    @include('layouts.sections.movies._movieWatch')
@endsection

@push('scripts')
    <script>
        // Değişkenler atanıyor
        const video = document.querySelector(".video");
        const toggleButton = document.querySelector(".toggleButton");
        const progress = document.querySelector(".progress");
        const progressBar = document.querySelector(".progress__filled");
        const slider = document.querySelector(".controls__slider");
        const skipBtns = document.querySelectorAll("[data-skip]");
        const time = document.querySelector(".time");
        const time2 = document.querySelector(".time2");
        const video_player = document.querySelector(".video-player");
        const speedDropdown = document.getElementById("speedDropdown");
        const dropdownItems = document.querySelectorAll(".dropdown-item");
        const fullscreenButton = document.getElementById("fullscreen");

        const movieId = {{ $movie->id }};

        // **YENİ: Backend'den gelen progress değerini alıyoruz**
        const startTime = {{ $progress ?? 0 }}; // Eğer progress bilgisi yoksa 0 olarak başlat

        let isPaused = true;
        let isMouseOver = false;
        let hideControlsTimeout;
        let lastCall = 0;


        // Kontrolleri göster
        function showControls() {
            clearTimeout(hideControlsTimeout);

            document.querySelector(".controls").style.visibility = "visible";
            document.querySelector(".toggleButton").style.visibility = "visible";
            document.querySelector(".time_skipL").style.visibility = "visible";
            document.querySelector(".time_skipR").style.visibility = "visible";
        }

        // Kontrolleri gizle
        function hideControls() {
            if (!isPaused && !isMouseOver) {
                document.querySelector(".controls").style.visibility = "hidden";
                document.querySelector(".toggleButton").style.visibility = "hidden";
                document.querySelector(".time_skipL").style.visibility = "hidden";
                document.querySelector(".time_skipR").style.visibility = "hidden";
            }
        }

        // Videoyu başlat ve durdur fonksiyonu
        function togglePlay() {
            if (video.paused || video.ended) {
                video.play();
                isPaused = false;
                hideControls();
            } else {
                video.pause();
                isPaused = true;
                showControls();
            }
        }

        // Video oynatıldığında ve durduğunda kontrolleri gizle
        video.addEventListener("play", () => {
            isPaused = false;
            hideControls();
        });

        // Video durduğunda kontrolleri göster
        video.addEventListener("pause", () => {
            isPaused = true;
            showControls();
        });

        // mouse video player üzerindeyken kontrolleri göster fonksiyonunu çalıştırır
        video_player.addEventListener("mouseover", () => {
            isMouseOver = true;
            showControls();
        });

        // mouse video player üzerinden çıktığında kontrolleri gizle fonksiyonunu çalıştırır
        video_player.addEventListener("mouseout", () => {
            isMouseOver = false;
            hideControls();
        });

        function saveProgress() {
            const progress = Math.floor(video.currentTime); // İzlenilen süre (saniye)

            fetch('/watch-progress', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        movie_id: movieId,
                        progress
                    })
                }).then(response => response.json())
                .then(data => console.log('Progress saved:', data))
                .catch(error => console.error('Error saving progress:', error));
        }

        function throttleSaveProgress() {
            const now = Date.now();
            if (now - lastCall > 5000) { // 5 saniyede bir API çağrısı yap
                saveProgress();
                lastCall = now;
            }
        }


        // Blob URL
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "{{ asset('storage/' . $movie->video) }}");
        xhr.responseType = "arraybuffer";
        xhr.onload = (e) => {
            let blop = new Blob([xhr.response]);
            let url = URL.createObjectURL(blop);
            video.src = url;

            // **YENİ: Videoyu belirli bir süreden başlatıyoruz**
            video.addEventListener('loadedmetadata', () => {
                if (startTime > 0 && startTime <= video.duration) {
                    video.currentTime = startTime; // Videoyu progress'ten başlat
                }
            });
        }
        xhr.send();

        //Zaman update'i
        function timeUpdate() {
            const minutes = Math.floor(video.currentTime / 60); // dakikayı bulmak için olan zamanı 60'a bölüyoruz
            const seconds = Math.floor(video.currentTime % 60); // saniye'yi bulmak için olan zamanı 60'a bölümünden kalanı alıyoruz
            time.innerHTML = `${minutes}:${seconds.toString().padStart(2, '0')}`; //minutes ile seconds değişkenini yazdırıyor seconds değişkenini 2 haneli olana kadar başına 0 yazılıyor

            const remainingTime = video.duration - video.currentTime; // video süresinden geçen süreyi çıkararak kalan süreyi buluyoruz
            const remainingMinutes = Math.floor(remainingTime / 60); // kalan dakikayı bulmak için kalan zamanı 60'a bölüyoruz
            const remainingSeconds = Math.floor(remainingTime % 60); // kalan saniyeyi bulmak için kalan zamanı 60'a bölümünden kalanı alıyoruz
            time2.innerHTML = `${remainingMinutes}:${remainingSeconds.toString().padStart(2, '0')}`; // remainingMinutes ile remainingSeconds değişkenini yazdırıyor remainingSeconds değişkenini 2 haneli olana kadar başına 0 yazılıyor
        }
        video.addEventListener("timeupdate", timeUpdate);

        //Başlatma ve durdurma butonu güncelleme
        function updateToggleButton() {
            toggleButton.innerHTML = video.paused ? '<i class="icon-Play"></i>' : '<i class="icon-Pause"></i>';
        }


        function handleProgress() {
            const progressPercentage = (video.currentTime / video.duration) * 100; // video şu anki süresini kalan süreye bölüp 100 ile çaraparak videonun ne kadar ilerlediğinin yüzdesi bulunur
            progressBar.style.flexBasis = `${progressPercentage}%`; // progress barın genişliğini belirler
        }

        function scrub(e) {
            const scrubTime = (e.offsetX / progress.offsetWidth) * video.duration; // tıklanan yerin genişliğe oranını alıp video süresi ile çarparak tıklanan yerdeki süreyi bulur
            video.currentTime = scrubTime; // videoyu tıklanan yerdeki süreden başlatır
        }

        function handleSliderUpdate() {
            video[this.name] = this.value; // slider'ın ismine göre o slider'ın değerini değiştirir
        }


        // Event Listeners
        toggleButton.addEventListener("click", togglePlay);  // toggle butonuna basınca togglePlay fonksiyonunu çalıştır

        video.addEventListener("click", togglePlay); // video'ya tıklayınca togglePlay fonksiyonunu çalıştır
        video.addEventListener("play", updateToggleButton);  // video başladığında ve durduğunda updateToggleButton fonksiyonunu çalıştır
        video.addEventListener("pause", updateToggleButton);
        video.addEventListener("timeupdate", handleProgress); // video ilerledikçe handleProgress fonksiyonunu çalıştır
        video.addEventListener("pause", saveProgress); // Durdurulduğunda kaydet
        video.addEventListener("timeupdate", throttleSaveProgress); // İzlerken periyodik kaydet
        progress.addEventListener("click", scrub);   // videonun progress barına tıklayınca scrub fonksiyonunu çalıştır

        slider.addEventListener("change", handleSliderUpdate); // her bir slider için handleSliderUpdate fonksiyonunu çalıştır slider her hareket edilip bırakıldığında değeri değişicek


        function handleSkip() {
            video.currentTime += +this.dataset.skip; // tıklanan butonun data-skip değerini alıp video süresine ekler
        }

        skipBtns.forEach((btn) => {
            btn.addEventListener("click", handleSkip); // her bir skipBtns butonuna tıklandığında handleSkip fonksiyonunu çalıştır
        });


        document.addEventListener('keydown', function(event) {
            if (event.code === 'Space') event.preventDefault(); // Space tusuna basıldığında sayfanın aşağıya kaymasını durdurur
        });

        document.addEventListener("keydown", (e) => {
            if (e.code === "Space") togglePlay(); // Space tuşuna basınca togglePlay fonksiyonunu çalıştır
        });


        // Tam Ekran
        function openFullscreen() {
            if (video_player.requestFullscreen)
            {
                // Standart fullscreen chrome
                if (document.fullscreenElement)
                {
                    document.exitFullscreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                }
                else
                {
                    video_player.requestFullscreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                }
            } else if (video_player.webkitRequestFullscreen) {
                // Safari için
                if (document.webkitFullscreenElement)
                {
                    document.webkitExitFullscreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                }
                else
                {
                    video_player.webkitRequestFullscreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                }
            } else if (video_player.msRequestFullscreen) {
                // IE11 için
                if (document.msFullscreenElement)
                {
                    document.msExitFullscreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                }
                else
                {
                    video_player.msRequestFullscreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                }
            } else if (video_player.mozRequestFullScreen) {
                // Firefox için
                if (document.mozRequestFullScreenElement)
                {
                    document.mozCancelFullScreen();
                    fullscreenButton.classList.remove('icon-compress');
                    fullscreenButton.classList.add('icon-expand');
                }
                else
                {
                    video_player.mozRequestFullScreen();
                    fullscreenButton.classList.remove('icon-expand');
                    fullscreenButton.classList.add('icon-compress');
                };
            }
        }

        // Hız ayarı seçme
        dropdownItems.forEach(item => {
            item.addEventListener('click', (e) => {
                const newSpeed = e.target.textContent.replace('x', '');
                const speedValue = parseFloat(newSpeed);

                if (!isNaN(speedValue)) {
                    video.playbackRate = speedValue;
                } else {
                    console.error("Invalid speed value:", newSpeed);
                }

                // Dropdown'u seçtikten sonra kapat
                const dropdown = document.querySelector('.dropdown');
                dropdown.classList.remove('open');

                // Önceki seçiliği sil ve yeni seçeneği seçili yap
                dropdownItems.forEach(i => i.classList.remove('selected'));
                e.target.classList.add('selected');
            });
        });

        function toggleDropdown() {
            const dropdown = document.querySelector('.dropdown');
            dropdown.classList.toggle('open');
        }

        function setSpeed(speed) {
            const items = document.querySelectorAll('.dropdown-item');
            const video = document.querySelector('video');

            if (!isNaN(speed)) {
                video.playbackRate = speed;
            } else {
                console.error("Geçersiz ses değeri:", speed);
            }

            // seçilmiş seçeneği güncelle
            items.forEach(item => item.classList.remove('selected'));
            const targetItem = Array.from(items).find(item => parseFloat(item.getAttribute('data-speed')) === speed);
            if (targetItem) {
                targetItem.classList.add('selected');
            }

            const dropdown = document.querySelector('.dropdown');
            dropdown.classList.remove('open');
        }

          // Altyazıları açma ve kapatma
          function toggleSubtitles() {
          const track = video.textTracks[0]; // videonun İlk altyazı parçasını alır

          if (track.mode === 'showing') // altyazılar gösteriliyorsa gizler
            {
              track.mode = 'hidden';
            }
            else // altyazılar gizliyse gösterir
            {
              track.mode = 'showing';
            }
        }

        // Mouse hareketlerinde controls kısımlarını gizler
            document.addEventListener('mousemove', function() {
            const controls = document.querySelectorAll('.toggleButton, .time_skipL, .time_skipR, .controls');
            controls.forEach(control => {
                control.style.opacity = '1';
            });

            clearTimeout(window.controlsTimeout);
            window.controlsTimeout = setTimeout(function() {
                controls.forEach(control => {
                    control.style.opacity = '0';
                });
            }, 2000); // 2 saniye sonra kontrolleri gizle
            });

   </script>
@endpush
