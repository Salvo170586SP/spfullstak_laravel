<x-app-layout>
    <div class="container mx-auto py-4">
        <div class="flex flex-col">
            <div class="col">
                <h1 class="text-5xl mb-2 font-bold text-white">Modifica File</h1>
            </div>
          
            <div class="col">
                <form action="{{ route('admin.files.update', $file->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.files.index') }}" class="font-bold text-white rounded my-5 p-2 bg-gray-500">Torna indietro  <i class="fa-solid fa-house"></i></a>    
                    </div>
                    <div>
                        
                        <label for="title_file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Titolo</label>
                        <input id="title_file" type="text" name="title_file" value="{{ old('title_file',$file->title_file) }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                                
                        <label for="url_file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 mt-3">File</label>
                        <input id="url_file" type="file" name="url_file" class=" p-2.5  text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    
                    <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Modifica  <i class="fa-solid fa-pencil ms-1"></i></button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>