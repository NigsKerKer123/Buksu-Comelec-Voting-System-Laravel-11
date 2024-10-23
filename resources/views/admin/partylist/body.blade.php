<div class="h-full bg-gray-50 ml-2 mt-[4.5rem] mb-10 md:ml-64">
    <!-- buttons -->
    <div class="flex justify-between items-center h-auto mb-4 rounded bg-white dark:bg-gray-800 mr-4 ml-4 p-4">
        <p class="ms-3 bebas-neue-regular text-[25px]">PARTY LIST</p>

        <button data-modal-target="Add-modal" data-modal-toggle="Add-modal" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            + Add Party
        </button>
    </div>

    @if(session('success'))
    <div class="flex justify-start items-center h-auto mb-4 rounded bg-white dark:bg-gray-800 mr-4 ml-4 p-4">
        <div class="flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success alert!</span> {{session('success')}}
            </div>
        </div>
    </div>
    @elseif($errors->any())
        <div class="flex justify-start items-center h-auto mb-4 rounded bg-white dark:bg-gray-800 mr-4 ml-4 p-4">
            @foreach ($errors->all() as $error)
                <div class="flex items-center p-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Danger alert!</span> {{$error}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Party List -->
    <div class="mr-4 ml-4 p-4 flex flex-wrap gap-4">
        @foreach($parties as $party)
        <div class="max-w-[20rem] max-h-[20rem]  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="h-[10rem] overflow-hidden">
                <img class="w-full h-full object-cover rounded-t-lg" src="{{asset('images/party_profile.jpg')}}" alt="org profile" />
            </div>

            <div class="p-5">
                <div class="text-center">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $party->name}}</h5>
                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $party->description }}</p>

                <div class="flex justify-end">
                    <!-- view -->
                    <button class="m-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">View</button>

                    <!-- Edit -->
                    <button type="button" class="m-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-modal-target="edit-modal" data-modal-toggle="edit-modal" onclick="openEditModal({{ $party->id }}, '{{ $party->name }}', '{{ $party->description }}')">Edit</button>
                    <!-- Edit -->

                    <!-- Delete -->
                     <button type="button" class="m-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-modal-target="delete-modal" data-modal-toggle="delete-modal" onclick="openDeleteModal({{ $party->id }}, '{{ $party->name }}', )">Delete</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>