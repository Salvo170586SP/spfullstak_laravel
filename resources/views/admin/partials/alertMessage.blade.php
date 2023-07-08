@if(session('message'))
    <div class=" flex justify-center text-center mt-5">
        <div class="font-regular flex justify-between items-center relative border border-midnightblue-700 mb-4 block w-full rounded-lg bg-midnightblue-400 p-4 text-base leading-5 text-white opacity-100">
            {{ session('message') }}
        </div>
    </div>
@endif
