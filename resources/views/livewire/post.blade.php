<div>

    <div class="flex items-start px-4 py-6">
        <div class="">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900 -mt-1"> {{ $post->user->name }} </h2>
                <small class="text-sm text-gray-700"> HEURE HUMAIN </small>
            </div>

            <p class="mt-3 text-gray-700 text-sm">
                {{ $post->body }}
            </p>
            <div class="mt-4 flex items-center">
                <div class="flex mr-2 text-gray-700 text-sm mr-3">
                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span>12</span>
                </div>
            </div>
        </div>
    </div>

</div>
