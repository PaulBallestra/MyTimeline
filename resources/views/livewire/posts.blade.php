<div>

    <!-- Affichage des validations -->
    @if( session()->has('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
             role="alert">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($posts as $post)

        <!-- Appel du component post -->
        <livewire:post :post="$post" :key="$post->id" />

    @endforeach

</div>
