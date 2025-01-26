


<div class="mb-4 mt-4 flex justify-self-start ml-6">
    @if(session('success'))
    <div class="bg-green-500  text-white p-4 mt-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif
</div>

    <div class="flex flex-col md:flex-row mx-6 mb-4 justify-between items-center mt-4">


            <div class="text-white ">
            <h1 class="font-bold  text-xl">Kategoriler</h2>

            </div>

            <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 mt-4 rounded-md md:w-auto w-full text-white bg-secondary">Kategori Ekle</a>
        </div>


        <div class="mt-10 grid grid-cols-1 gap-4 mx-6 sm:grid-cols-w md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($categories as $category)
            <div class="relative flex items-center space-x-3 rounded-lg bg-white px-6 py-5 shadow ring-1 ring-black ring-opacity-5">
            <div class="min-w-0 flex-1">
                <div class="flex items-center space-x-3">
                <p class="truncate text-sm font-medium text-gray-900">{{ $category->name }}</p>
                <span class="inline-block flex-shirink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800"></span>
                </div>
                <p class="mt-1 truncate text-sm text-900">aktif</p>
            </div>
            <div>

            </div>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900">Güncelle</a>
            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Sil</button>
            </form>
            </div>
            @endforeach
      </div>


