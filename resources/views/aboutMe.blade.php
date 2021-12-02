<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="height: 500px">
                    <div>
                        <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
                            <div class="flex-shrink-0">
                              <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
                            </div>
                            <div>
                              <div class="text-xl font-medium text-black">ChitChat</div>
                              <p class="text-gray-500">You have a new message!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>