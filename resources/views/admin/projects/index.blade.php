<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex flex-col">
            <div class="col">
                <h1 class="text-5xl mb-2 font-bold text-white">Progetti</h1>
            </div>
            <div class="col">
                @include('admin.partials.alertMessage')
            </div>


            <div class="col mx-auto lg:w-5/6">
                <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Aggiungi <i class="fa-solid fa-plus ms-1"></i></button>

                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Titolo</label>
                    <input id="title" required type="text" name="title" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 mt-3">URL</label>
                    <input id="url" type="text" name="url" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    <label for="img_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 mt-3">Immagine</label>
                    <input id="img_url" type="file" name="img_url" class=" p-2.5  text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                </form>
            </div>

            <div class="col block md:hidden my-10 mx-auto w-full">
                <form action="{{ route('admin.projects.index') }}" method="post" class="flex items-center">
                    @csrf
                    <input class="block mr-2  text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="search">
                    <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Cerca</button>
                    <a href="{{ route('admin.projects.index') }}" class="font-bold text-white rounded my-5 p-2 bg-red-500 ms-2" type="submit">Reset</a>
                </form>
                <div class="max-w-xxl dark:bg-gray-600 dark:text-white py-4 px-8 bg-white shadow-lg rounded-lg" style=" overflow: auto">
                    <div class="py-5">
                        @foreach($projects as $proj)
                        <div class="flex justify-between items-center py-3">
                            <div>
                                <form action="{{ route('admin.projects.updatePosition', $proj->id) }}" method="post" class=" flex items-center">
                                    @csrf

                                    <input value="{{ old('position',  $proj->position) }}" name="position" type="number" min="1" max="{{ count($projects) }}" style="width: 20%" class="block me-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Salva posizione</button>
                                </form>
                                @if($proj->img_url)
                                <img class="rounded-md my-3" width="90" src="{{ asset('storage/'. $proj->img_url) }}" alt="{{$proj->title }}">
                                @else
                                <div class="rounded-md my-3 border border-gray-300 flex items-center justify-center" style="width: 100px; height: 100px">
                                    <h4 class="dark:text-gray-400">NO IMAGE</h4>
                                </div>
                                @endif
                                <div class="text-2mdmb-2 font-bold text-white">Nome: {{ $proj->title }}</div>
                                <div class="text-2md mb-2 font-bold text-white">Url: {{ $proj->url }}</div>
                            </div>
                            <div class="flex item-center justify-center">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <a href="{{ route('admin.projects.edit', $proj->id) }}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <form class="delete-form" action="{{ route('admin.projects.destroy', $proj->id) }}" method="post" data-title="{{$proj->title}}">
                                        @csrf
                                        @method('delete')

                                        <button class=" ">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>

                </div>
            </div>


            <div class="col hidden md:block">
                <div class="overflow-x-auto">
                    <div class="min-w-screen  my-9 flex items-center justify-center  font-sans overflow-hidden">
                        <div class="w-full lg:w-5/6">
                            <form action="{{ route('admin.projects.index') }}" method="get" class="flex items-center">
                                <input id="search-input" class="block mr-2  text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="search">
                                <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Cerca</button>
                                <a href="{{ route('admin.projects.index') }}" class="font-bold text-white rounded my-5 p-2 bg-red-500 ms-2" type="submit">Reset</a>
                            </form>
                            <div class="shadow-lg rounded my-6">
                                <table class="min-w-max w-full dark:bg-gray-700 dark:text-white-800 rounded-md overflow-hidden  table-auto">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-800 text-white uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">Posizione</th>
                                            <th class="py-3 px-6 text-left">Image</th>
                                            <th class="py-3 px-6 text-left">Titolo</th>
                                            <th class="py-3 px-6 text-center">Url</th>
                                            <th class="py-3 px-6 text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white text-sm font-light">
                                        @foreach($projects as $proj)
                                        <tr class="border-b border-gray-600 hover:bg-gray-600">
                                            <td class="w-50">
                                                <form action="{{ route('admin.projects.updatePosition', $proj->id) }}" method="post" class=" flex items-center">
                                                    @csrf

                                                    <input value="{{ old('position',  $proj->position) }}" name="position" type="number" min="1" max="{{ count($projects) }}" style="width: 20%" class="block mx-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <button class="font-bold text-white rounded my-5 p-2 bg-gray-500">Salva posizione</button>
                                                </form>
                                            </td>
                                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                                @if($proj->img_url)
                                                <img class="rounded-md my-3" width="90" src="{{ asset('storage/'. $proj->img_url) }}" alt="{{$proj->title }}">
                                                @else
                                                <div class="rounded-md my-3 border border-gray-300 flex items-center justify-center" style="width: 100px; height: 70px">
                                                    <h4 class="dark:text-gray-400">NO IMAGE</h4>
                                                </div>
                                                @endif
                                            </td>
                                            <td class="py-3 px-6 text-left">
                                                {{ $proj->title }}
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                {{ $proj->url }}
                                            </td>
                                            <td class="py-3 px-6 text-center">
                                                <div class="flex item-center justify-center">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <a href="{{ route('admin.projects.edit', $proj->id) }}">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <form class="delete-form" action="{{ route('admin.projects.destroy', $proj->id) }}" method="post" data-title="{{$proj->title}}">
                                                            @csrf
                                                            @method('delete')

                                                            <button class=" ">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if(count($projects) == 0)
                            <div class="col text-center">
                                <h1 class="text-2xl mb-2 font-bold text-white">Inserisci un progetto</h1>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<script>
    const deleteForm = document.querySelectorAll('.delete-form');

    deleteForm.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const title = form.getAttribute('data-title');
            const accept = confirm(`Sei sicuro di eliminare ${title}?`);

            if (accept) e.target.submit();
        })
    });

</script>
