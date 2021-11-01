<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                {{-- <x-jet-welcome /> --}}
                <a href="{{ route('todo.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Todo
                </a>
            </div>
            <table class="table-auto w-full">
                <tr>
                    <th class="border px-4 py-2 width:10%">ID</th>
                    <th class="border px-4 py-2 width:70%">Todo</th>
                    <th class="border px-4 py-2 width:20%">Aksi</th>
                </tr>
            </table>
        </div>
    </div>
</x-app-layout>


