@extends('layouts.master')
@section('title', 'Anasayfa')
@section('description', 'test.')
@section('keywords', 'test, test, test')
@section('content')
<section class="relative z-10 ">

 <div class="container mx-auto">
  <div class="bg-white">
   <div class="flex flex-wrap items-stretch">
    <div class="w-full lg:w-1/2">
     <div class="relative hidden h-full w-full overflow-hidden lg:flex">
      <div class="flex h-full items-end">
       <img src="{{asset('./images/registers.jpg')}}" alt="image"  loading="lazy" class="h-full w-full object-cover object-center" />
      </div>
     </div>
    </div>
    <div class="w-full lg:w-1/2">
     <div class="w-full py-14 px-8 sm:p-[70px] lg:px-14 xl:px-[90px]">
      <h2 class="text-dark mb-3 text-[32px] font-bold">
       Yeni hesap oluşturun
      </h2>
      <p class="mb-14 text-base text-[#8F8F8F] xl:mb-20">
        Herkesin hesabına erişmesini <br class="hidden sm:block" />
        kolaylaştırıyoruz
      </p>
      <form id="register-form" action="{{route('register')}}" method="post">
       @csrf
       {{-- Input Fields --}}
       <div class="mb-4">
        <input value="{{old('name')}}" type="text" name="name" placeholder="Kullanıcı Adı" class="@error('name') !ring-red-500 @enderror focus:border-primary h-12 w-full border rounded-lg border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('name')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-4">
        <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail Adresini giriniz" class="@error('email') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-4">
        <input type="password" name="password" placeholder="Şifrenizi giriniz" class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
       </div>
       <div class="mb-8">
        <input type="password" name="password_confirmation" placeholder="Şifreyi Onayla" class="@error('password') !ring-red-500 @enderror focus:border-primary h-12 w-full rounded-lg border border-transparent bg-[#F6F6F6] px-5 outline-none focus-visible:shadow-none" />
       </div>

       {{-- Terms and Conditions --}}
       <div class="mb-8 flex flex-wrap justify-between">
        <div class="inline-flex items-center">
            <input type="checkbox" id="check-with-link" class="peer h-5 w-5 cursor-pointer rounded border border-slate-300 checked:bg-slate-800 checked:border-slate-800" />
            <label class="cursor-pointer ml-2 text-[#adadad] text-sm" for="check-with-link">
                    <div x-data="{ open: false }" x-cloak>
                          <p>

                            <a id="terms-link" class="font-medium hover:text-slate-800 underline" @click="open = true">Şartlar ve koşullar</a>
                            'ı kabul ediyorum.
                          </p>

                          <div x-show="open" @click.away="open = false" @click="open = false"
                          class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
                          <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                             <div class="bg-gray-900 p-4">
                                <button @click="open = false" class="text-white float-right">&times;</button>
                                <h3 class="text-lg leading-6 font-medium text-white">
                                    Movie Video Kullanım Şartları
                                </h3>
                             </div>

                             <div class=" bg-gray-900 p-4 w-full w-[560px] h-100 lg:w-[560px] lg:h-[555px] overflow-y-scroll   ">

                                <div class="terms-container">
                                    <h1 class="text-2xl font-bold text-white"> Hizmet Tanımı:</h1>

                                    <p class="text-sm text-gray-600">Son Güncelleme: 19 Ekim 2023</p>
                                    <h2 class="text-lg font-semibold text-white mb-5 mt-5">1. Giriş</h2>
                                    <p class="text-white">
                                      Bu Şartlar ve Koşullar, Movie watch tarafından sağlanan film izleme hizmetlerini kullanmanız için geçerli olan hüküm ve koşulları belirler.
                                      Siteyi ziyaret ederek veya kullanarak, bu şartları kabul etmiş olursunuz.
                                      Eğer şartları kabul etmiyorsanız, Siteyi kullanmamayı kabul etmiş sayılırsınız.
                                  </p>
                                    <h2 class="text-lg font-semibold text-white mb-5 mt-5">2. Hizmet Tanımı</h2>
                                      <p class="text-white"> Movie watch, kullanıcılara çevrimiçi film izleme imkanı sunan bir platformdur. </p>
                                      <p class="text-white"> Bu platform, çeşitli film ve video içeriklerini izleyicilere sunmak için tasarlanmıştır. </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">3. Kullanıcı Sorumlulukları</h2>
                                      <p class="text-white"> •	Kullanıcılar, Siteyi yalnızca yasal amaçlarla kullanmakla yükümlüdür.  </p>
                                      <p class="text-white"> •	Site üzerinden sunulan içeriklerin telif hakları ile korunduğunu ve kullanıcıların bu içerikleri izinsiz çoğaltamayacağını, dağıtamayacağını veya ticari amaçla kullanamayacağını kabul eder.  </p>
                                      <p class="text-white"> •	Hesap açan kullanıcılar, hesaplarının güvenliğinden ve gizliliğinden sorumludur.  </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">4. İçerik ve Telif Hakları</h2>
                                      <p class="text-white"> •	Site üzerindeki tüm içerikler, Movie watch veya içerik sağlayıcılarına ait telif haklarına tabidir. Hiçbir içerik, önceden izin alınmaksızın çoğaltılamaz veya dağıtılamaz.. </p>
                                      <p class="text-white"> •	Movie watch, kullanıcıların Siteye yüklediği içerikleri denetlemek zorunda değildir ancak yasal gerekliliklere uygun şekilde gerekli müdahaleyi yapabilir. </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">5. Üyelik ve Abonelik</h2>
                                      <p class="text-white"> •   Siteye erişim, ücretsiz veya ücretli üyelik seçenekleriyle sağlanabilir. Ücretli üyelikler için belirli ödeme koşulları geçerli olacaktır. </p>
                                      <p class="text-white"> •   Kullanıcılar, üyelik bilgilerini doğru ve güncel tutmakla yükümlüdür. </p>
                                      <p class="text-white"> •   Site, hizmetlerini önceden bildirimde bulunmaksızın değiştirme veya sonlandırma hakkına sahiptir. </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">6. Gizlilik ve Veri Koruma</h2>
                                      <p class="text-white"> •   Site, kullanıcıların kişisel bilgilerini yalnızca yasal gerekliliklere uygun olarak toplar ve işler. </p>
                                      <p class="text-white"> •   Kullanıcılar, gizlilik politikasını inceleyerek hangi bilgilerin toplandığı ve nasıl kullanıldığı hakkında bilgi sahibi olmalıdır. </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">7. Hizmetin Değiştirilmesi ve Kesilmesi </h2>
                                      <p class="text-white"> Movie watch, herhangi bir zaman, hizmeti değiştirme, askıya alma veya sonlandırma hakkını saklı tutar. Bu durum, kullanıcılara önceden bildirilmeksizin yapılabilir. </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">8. Sorumluluk Sınırı</h2>
                                      <p class="text-white"> Mavie watch, platformun kullanımından doğabilecek doğrudan veya dolaylı zararlar, kayıplar, kesintiler, virüsler veya diğer yazılımlar nedeniyle meydana gelen zararlardan sorumlu tutulamaz. </p>
                                      <p class="text-white"> Site, içeriklerin doğruluğu, güvenliği veya kullanıcı deneyimi ile ilgili hiçbir garanti vermez.  </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">9. Yasal Uygulamalar</h2>
                                      <p class="text-white"> Bu Şartlar ve Koşullar, Türkiye yasalarına tabi olup, herhangi bir ihtilaf durumunda [şehir adı] mahkemeleri yetkilidir. </p>

                                      <h2 class="text-lg font-semibold text-white mb-5 mt-5">10. Değişiklikler</h2>
                                      <p class="text-white"> Mavie Watch, bu Şartlar ve Koşulları zaman zaman güncelleyebilir. Herhangi bir değişiklik yapıldığında, güncel metin Site üzerinde yayınlanacaktır. </p>
                                  </div>

                            </div>
                          </div>
                       </div>

                    </div>

                        </label>
          </div>
       </div>
       <div class="flex flex-wrap">
        <div class="w-full">
         <button id="submit-button" class="bg-secondary mb-3 py-4 rounded-lg w-full cursor-pointer px-5 text-white transition hover:bg-opacity-90">
          Hesap Oluştur
         </button>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>


@endsection



@push('scripts')
@vite('resources/js/register.js')
@endpush
