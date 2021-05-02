<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MyTimeline') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="p-6 bg-gray-200 border-b border-gray-200">
                    <livewire:form></livewire:form>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">

                    <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center mb-3">
                        Old posts
                    </h1>

                    <livewire:posts></livewire:posts>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
