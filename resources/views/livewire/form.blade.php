<div>

    <!-- FORMULAIRE COMPONENT -->
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-3">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h5 class="text-lg font-medium leading-6 text-gray-900"> Talking as </h5>
                    <h3 class="text-lg font-medium leading-6 text-gray-900"><b> {{ $user->name }} </b></h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

                @error('body')
                    <span class="invalid-feedback"> {{ $message }}</span>
                @enderror

                <form method="POST" wire:submit.prevent="createPost">
                    @csrf
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <div>
                                <label for="body" class="block text-sm font-medium text-gray-700">
                                    Your message
                                </label>
                                <div class="mt-1">
                                    <textarea id="body" name="body" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                              placeholder="Your content ..." wire:model="body"></textarea>
                                </div>
                            </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
