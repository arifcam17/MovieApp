

<style>
   [x-cloak] { display: none; }
</style>


    <footer class="bg-primary relative z-5 overflow-hidden mt-16 pt-10">
        <div class="container mx-auto">
           <div class=" flex flex-wrap">
              <div class="w-full px-4 sm:w-2/3 lg:w-4/12 xl:w-3/12">
                 <div class="mb-10 w-full">
                    <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                       <img src="{{ asset('images/MovieWatchLogo.png') }}" alt="logo" class="max-w-full" />
                    </a>
                    <p class="mb-7 text-base text-white">
                     En iyi filmleri izletmek için buradayız.
                     Keyifli seyirler! 🎬🍿
                    </p>
                   <div class="flex items-center">
                        <a href="https://www.facebook.com/istkaorgtr/" class="px-3 text-[#dddddd] hover:opacity-30">
                            <i class="icon-Facebook text-[18px] leading-none w-[10px] h-[18px] z-[1] text-current"></i>
                            <!-- Facebook SVG -->
                        </a>
                        <a href="https://x.com/istkaorgtr" class="px-3 text-[#dddddd] hover:opacity-30">
                            <i class="icon-Twitter text-[18px] leading-none w-[10px] h-[18px] text-current"></i>
                            <!-- Twitter SVG -->
                        </a>
                        <a href="https://www.instagram.com/istkaorgtr/" class="px-3 text-[#dddddd] hover:opacity-30">
                            <i class="icon-Instagram text-[18px] leading-none w-[10px] h-[18px] text-current"></i>
                            <!-- Instagram SVG -->
                        </a>
                        <a href="https://www.linkedin.com/company/yetenek-i%CC%87stanbul/posts/" class="px-3 text-[#dddddd] hover:opacity-30">
                            <i class="icon-LinkedIn text-[18px] leading-none w-[10px] h-[18px] text-current"></i>
                            <!-- LinkedIn SVG -->
                        </a>
                    </div>

                 </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-3/12 xl:w-2/12">
                 <div class="mb-10 w-full">
                    <h4 class="mb-9 text-lg font-semibold text-white">Kısayollar</h4>
                    <ul>
                       <li>
                          <a href="{{ route('home') }}"
                             class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30">
                             Anasayfa
                          </a>
                       </li>
                       <li>
                          <a href="{{ route('movies.index') }}"
                             class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30">
                             Filmler
                          </a>
                       </li>
                       <li>
                          <a href="{{ route('about_us') }}"
                             class="mb-2 inline-block text-base leading-loose text-white hover:opacity-30">
                             Hakkımızda
                          </a>
                       </li>
                    </ul>
                 </div>
              </div>

           </div>
        </div>

        <div class="mt-12 border-t border-white border-opacity-40  py-8 lg:mt-[60px]">
           <div class="container mx-auto">
             <div class=" flex flex-wrap">
               <div class="w-full px-4 md:w-2/3 lg:w-1/2">
                 <div class="my-1">
                   <div
                     class=" flex flex-wrap items-center justify-center md:justify-start"
                   >
                   <div x-data="{ open: false }" x-cloak>
                     <a
                       href="javascript:void(0)"
                       class="px-3 text-base text-white hover:opacity-30"
                       @click="open = true">
                       Gizlilik Politikası
                     </a>

                     <div x-show="open" @click.away="open = false" @click="open = false"
                     class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
                     <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                        <div class="bg-gray-900 p-4">
                           <button @click="open = false" class="text-white float-right">&times;</button>
                           <h3 class="text-lg leading-6 font-medium text-white">
                             Gizlilik Şartları
                           </h3>
                        </div>

                        <div class=" bg-gray-900 p-4 w-full w-[560px] h-100 lg:w-[560px] lg:h-[555px] overflow-y-scroll   ">

                           <div class="terms-container">
                               <h1 class="text-2xl font-bold text-white">Gizlilik Şartları</h1>

                               <p class="text-sm text-gray-600">Son Güncelleme: 19 Ekim 2023</p>
                               <h2 class="text-lg font-semibold text-white mb-5 mt-5">1. Giriş</h2>
                               <p class="text-white">
                                 Bu Gizlilik Politikası, Movie Watch olarak kullanıcılarımızın kişisel bilgilerini nasıl topladığımızı, kullandığımızı, sakladığımızı ve koruduğumuzu açıklamaktadır.
                                 Bu siteyi kullanarak, Gizlilik Politikamızı kabul etmiş olursunuz.
                             </p>
                               <h2 class="text-lg font-semibold text-white mb-5 mt-5">2. Topladığımız Bilgiler</h2>
                               <p class="text-white">
                                 a. Kişisel Bilgiler: Kullanıcılarımızdan, siteyi kullanabilmeleri için gerekli olabilecek temel kişisel bilgiler toplanabilir. Bu bilgiler şunlar olabilir:
                               </p>
                                 <p class="text-white"> •	Ad ve soyad </p>
                                 <p class="text-white"> •	E-posta adresi </p>
                                 <p class="text-white"> •	Cihaz bilgileri </p>
                                 <p class="text-white"> •	IP adresi </p>
                                 <p class="text-white"> •	Siteye giriş saati ve tarihi </p>
                                 <p class="text-white">
                                     b. Otomatik Olarak Toplanan Bilgiler: Siteyi ziyaret ettiğinizde, sistemimiz otomatik olarak bazı teknik bilgileri toplar. Bu bilgiler şunları içerebilir:
                                 </p>
                                 <p class="text-white"> •	IP adresiniz </p>
                                 <p class="text-white"> •	Tarayıcı türünüz ve sürümünüz </p>
                                 <p class="text-white">  •	Ziyaret ettiğiniz sayfalar </p>
                                 <p class="text-white">  •	Cihaz türünüz (mobil, masaüstü vb.) </p>
                                 <p class="text-white"> •	Siteye giriş saati ve tarihi </p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">3. Bilgilerin Kullanımı</h2>
                                 <p class="text-white"> Topladığımız bilgiler, aşağıdaki amaçlarla kullanılacaktır: </p>
                                 <p class="text-white"> •	Hizmetlerimizi sağlamak ve geliştirmek  </p>
                                 <p class="text-white"> •	Kullanıcı deneyimini kişiselleştirmek  </p>
                                 <p class="text-white"> •	Destek sağlamak ve soruları yanıtlamak  </p>
                                 <p class="text-white"> •	Siteyi analiz etmek ve kullanıcı davranışlarını incelemek  </p>
                                 <p class="text-white"> •	Yasal yükümlülükleri yerine getirmek   </p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">4. Bilgilerin Paylaşımı</h2>
                                 <p class="text-white">Kişisel bilgileriniz, üçüncü şahıslarla yalnızca aşağıdaki durumlarda paylaşılabilir: </p>
                                 <p class="text-white"> •	Yasal yükümlülükler dogrultusunda</p>
                                 <p class="text-white"> •	Yasal yükümlülükler doğrultusunda</p>
                                 <p class="text-white">  •	Kullanıcı onayı ile</p>
                                 <p class="text-white"> •	İhtiyaç duyulması halinde, hizmet sağlayıcılarımızla (örneğin, sunucu sağlayıcıları veya analiz araçları)</p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">5. Çerezler (Cookies)</h2>
                                 <p class="text-white">Web sitemizde, kullanıcı deneyimini geliştirmek amacıyla çerezler kullanılabilir. </p>
                                 <p class="text-white">    Çerezler, cihazınıza yerleştirilen küçük veri dosyalarıdır. </p>
                                 <p class="text-white">    Çerezler, siteyi tekrar ziyaret ettiğinizde sizi tanımamıza ve tercihlerinize göre içeriği özelleştirmemize yardımcı olur. </p>
                                 <p class="text-white">   Çerezleri tarayıcı ayarlarınızdan kontrol edebilir veya silebilirsiniz. </p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">6. Bilgilerin Güvenliği</h2>
                                 <p class="text-white"> Kişisel bilgilerinizin güvenliği bizim için önemlidir. </p>
                                 <p class="text-white"> Bu bilgilerin korunması için endüstri standardı güvenlik önlemleri ve şifreleme teknolojileri kullanmaktayız. </p>
                                 <p class="text-white"> Ancak, internet üzerinden veri iletiminin tamamen güvenli olacağını garanti edemeyiz. </p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">7. Üçüncü Taraf Bağlantıları</h2>
                                 <p class="text-white"> Web sitemiz, üçüncü taraf web sitelerine bağlantılar içerebilir. </p>
                                 <p class="text-white"> Bu sitelerin gizlilik uygulamaları bizim denetimimiz dışında olup, biz herhangi bir sorumluluk kabul etmiyoruz.  </p>
                                 <p class="text-white"> Lütfen bu sitelerin gizlilik politikalarını inceleyin. </p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">8. Çocukların Gizliliği</h2>
                                 <p class="text-white"> Web sitemiz, 13 yaşın altındaki çocuklara yönelik değildir ve bu yaş grubundan herhangi bir kişisel bilgi toplamamaktadır. </p>
                                 <p class="text-white"> Eğer böyle bir bilgi toplandığı fark edilirse, derhal silinecektir.  </p>

                                 <h2 class="text-lg font-semibold text-white mb-5 mt-5">9. Gizlilik Politikasındaki Değişiklikler</h2>
                                 <p class="text-white"> Bu Gizlilik Politikası zaman zaman güncellenebilir. </p>
                                 <p class="text-white"> Herhangi bir değişiklik yapıldığında, güncellenmiş politika sitemizde yayımlanacaktır.   </p>
                                 <p class="text-white"> Değişiklikler yayınlandığı anda yürürlüğe girer.  </p>

                             </div>

                       </div>
                     </div>
                  </div>

               </div>


               <div x-data="{ open: false }" x-cloak>
                 <a
                   href="javascript:void(0)"
                   class="px-3 text-base text-white hover:opacity-30"
                   @click="open = true">
                   Yasal uyarı
                 </a>

                 <div x-show="open" @click.away="open = false" @click="open = false"
                 class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
                 <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                    <div class="bg-gray-900 p-4">
                       <button @click="open = false" class="text-white float-right">&times;</button>
                       <h3 class="text-lg leading-6 font-medium text-white">
                         Yasal Uyarı
                       </h3>
                    </div>

                    <div class="bg-gray-900 p-4 w-full w-[560px] h-100 lg:w-[560px] lg:h-[555px] overflow-y-scroll   ">

                       <div class="terms-container">
                           <h1 class="text-2xl font-bold text-white">Yasal Uyarı</h1>

                           <p class="text-sm text-gray-600">Son Güncelleme: 19 Ekim 2023</p>
                           <p class="text-white">
                             Bu platformda sunulan içeriklerin çoğu telif hakkı ile korunmaktadır ve izinsiz olarak paylaşılamaz.
                             Film, dizi ve diğer medya içeriği, yasal olmayan yollarla sunulması halinde, telif hakkı ihlali teşkil eder.
                             Bu tür içerikleri izlemek, indirmek veya paylaşmak, yasal sonuçlar doğurabilir.
                             Lütfen içerikleri sadece yasal ve lisanslı platformlardan izleyiniz.
                             Telif hakkı sahiplerinin haklarına saygı göstermek, hem yasal hem de etik açıdan önemlidir.
                           </p>
                           <p class="text-white mt-5">
                             Eğer bu platformdaki içeriklerin yasal olmayan bir şekilde paylaşıldığını düşünüyorsanız, lütfen bizimle iletişime geçin.
                             İçeriklerin kaldırılması talebiyle ilgili gerekli işlemleri başlatacağız.
                           </p>
                         </div>

                   </div>
                 </div>
              </div>

           </div>
           <div x-data="{ open: false }" x-cloak>
             <a
               href="javascript:void(0)"
               class="px-3 text-base text-white hover:opacity-30"
               @click="open = true">
               Hizmet Şartları
             </a>

             <div x-show="open" @click.away="open = false" @click="open = false"
             class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-75 " >
             <div @click.stop class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all ">
                <div class="bg-gray-900 p-4">
                   <button @click="open = false" class="text-white float-right">&times;</button>
                   <h3 class="text-lg leading-6 font-medium text-white">
                     Hizmet Şartları
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
                         <p class="text-white"> Mavie watch, bu Şartlar ve Koşulları zaman zaman güncelleyebilir. Herhangi bir değişiklik yapıldığında, güncel metin Site üzerinde yayınlanacaktır. </p>
                     </div>

               </div>
             </div>
          </div>

       </div>
                   </div>
                 </div>
              </div>
           </div>


           <div>
              <span class="absolute left-0 top-0 z-[0] pointer-events-none">
                 <svg width="419" height="492" viewBox="0 0 419 492" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="55.0003" cy="350" rx="364" ry="364"
                       transform="rotate(-45 55.0003 350)" fill="url(#paint0_linear)" />
                    <defs>
                       <linearGradient id="paint0_linear" x1="55.0003" y1="-14" x2="55.0003" y2="714"
                          gradientUnits="userSpaceOnUse">
                          <stop stop-color="#ff5757" stop-opacity="0.4" />
                          <stop offset="1" stop-opacity="0" />
                       </linearGradient>
                    </defs>
                 </svg>
              </span>

              <span class="absolute bottom-0 right-0 z-[0] pointer-events-none">
                <div class="w-[327px] h-[220px] bg-gradient-to-b from-secondary/30 to-transparent rounded-full rotate-[-75deg]"></div>

              </span>

              <span class="absolute top-0 right-0 z-[1]">
                 <i class="icon-Dot text-[102px] text-gray-500 leading-none"></i>
              </span>
           </div>
     </footer>
     <!-- ====== Footer Section End -->
