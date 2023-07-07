<x-app-layout>
    <div class="container mx-auto py-4">
        <div class="flex flex-col">
            <div class="col">
                <h1 class="text-5xl mb-2 font-bold text-white">Chi sono</h1>
                <h3 class="text-2xl font-bold text-white">Biografia</h3>
            </div>
            <div class="col">
                <div class="max-w-xxl dark:bg-gray-600 dark:text-white py-4 px-8 bg-white shadow-lg rounded-lg my-20" style="height: 400px; overflow: auto">
                    <span class="text-1xl font-bold dark:text-white text-black">Modifiche Applicate</span>
                    <hr>
                    <div class="py-5">
                        @foreach($biograpies as $biograpy)
                        {!! $biograpy->description !!}
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="col">
                <form action="{{ route('admin.biograpies.update', $biograpy->id) }}" method="post">
                    @csrf
                    @method('put')
                    <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Modifica</button>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Modifica tua biografia</label>
                    <textarea id="message" name="description" rows="20" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('description', $biograpy->description) }}</textarea>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
