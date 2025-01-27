<div class="bg-third rounded-md w-full p-4 lg:w-3/4 md:w-2/3">
    <h3 class="mb-4 text-lg font-semibold bg-h text-white">Yorumlar</h3>
    <div class="h-96 overflow-y-auto">
        @if ($movie->comments->isEmpty())
            <p class="text-white">İlk yorumu siz yapın!</p>
        @else
            @foreach ($movie->comments as $comment)
                <div class="flex space-y-4">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-2 rounded-full w-8 h-8 object-cover sm:w-10 sm:h-10"
                             src="{{ $comment->user->profile_photo ? asset('avatars/' . $comment->user->profile_photo) : 'https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80' }}"
                             alt="{{ $comment->user->name }}" loading="lazy">
                    </div>
                    <div class="flex-1 border bg-white text-gray-900 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <div class="flex justify-between">
                            <div>
                                <strong>{{ $comment->user->name }}</strong>
                                <span class="text-xs text-gray-400">{{ $comment->created_at }}</span>
                            </div>
                            @auth
                                @if (auth()->user()->id === $comment->user_id || auth()->user()->isAdmin())
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex rounded-md px-4 py-2 text-sm hover:bg-red-100 active:bg-red-200 cursor-pointer text-red-700">
                                            Sil
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                        <p class="text-sm">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="mt-10">
        @auth
            <form action="{{ route('movies.comment', $movie->id) }}" method="POST" style="margin-top: 20px;">
                @csrf
                <textarea name="content" rows="3" placeholder="Yorumunuzu yazın..." required class="w-100 border rounded-md mb-4 w-full p-3"></textarea>
                <button type="submit" class="px-4 py-2 bg-[#ffffff33] text-white hover:text-primary hover:bg-white flex rounded">
                    Yorum Ekle
                </button>
            </form>
        @endauth
    </div>
</div>
