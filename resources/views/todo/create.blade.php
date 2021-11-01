<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="{{ route('todo.store') }}" method="POST">
                    @csrf
                    <div class="w-full">
                        <label for="todo" class="block text-sm font-medium text-gray-700 mb-3">Input Kegiatan</label>
                        <input type="text" name="todo" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


