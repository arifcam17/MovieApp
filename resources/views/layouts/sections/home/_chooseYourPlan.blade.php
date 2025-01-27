{{-- choose your plan --}}

    <div class="mx-3">
        <h2 class="font-black md:text-7xl text-5xl text-white py-8 text-center ">
           Planınızı Seçiniz
        </h2>
        <div class="flex justify-between lg:flex-row flex-col gap-6 mt-8 items-center">
           <!-- Monthly Plan -->
           <div class="bg-white p-8 flex flex-col rounded-lg w-full h-96">
              <div>
                 <h2 class="text-lg font-semibold mb-4 text-gray-800">Aylık Plan</h2>
                 <div class="text-4xl font-bold text-gray-800 mb-6">$10</div>
                 <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-700">
                       <i class="icon-Check w-5 h-5 text-green-500 mr-2 text-xl"></i>
                       Sınırsız izleme
                    </li>
                    <li class="flex items-center text-gray-700">
                     <i class="icon-Check w-5 h-5 text-green-500 mr-2 text-xl"></i>
                       Reklamsız deneyim
                    </li>
                    <li class="flex items-center text-gray-700">
                     <i class="icon-Check w-5 h-5 text-green-500 mr-2 text-xl"></i>
                       Çoklu cihaz desteği
                    </li>
                 </ul>
              </div>

              <button onclick="window.location.href='/register'" class="w-full bg-primary mt-auto text-white py-2 rounded-lg hover:bg-gray-900 transition">Hemen
                 Başla</button>
           </div>

           <!-- Yearly Plan -->
           <div class="bg-third text-white flex flex-col p-8 w-full rounded-lg h-96">
              <div>
                 <h2 class="text-lg mb-4 font-semibold">Yıllık Plan</h2>

                 <div class="text-4xl font-bold mb-6">$100</div>
                 <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                     <i class="icon-Check w-5 h-5 text-green-500 mr-2 text-xl"></i>
                       12 aylık kesintisiz erişim
                    </li>
                    <li class="flex items-center">
                     <i class="icon-Check w-5 h-5 text-green-500 mr-2 text-xl"></i>
                       Tüm premium özellikler
                    </li>
                 </ul>
              </div>

              <button onclick="window.location.href='/register'" class="w-full mt-auto bg-white text-primary py-2 rounded-lg hover:bg-gray-200 transition">Hemen
                 Başla</button>
           </div>
        </div>
     </div>

