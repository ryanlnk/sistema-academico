<section>
    <h1 class="text-2xl text-blue-500 font-medium">Courses</h1>

    <div class="flex justify-end items-center">
        <input
            class="ml-4 mt-1 block w-1/4 rounded-md border-blue-300 shadown-sm focus:border-blue-300 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
            type="text" wire:model="search">
    </div>

    <x-admin.button-add href='createcourses' />

    <table class="bg-gradient-to-r from-blue-500 to-blue-700 mx-auto m-5 w-5/6 rounded-lg">
        <thead>
            <tr class="text-blue-50 text-left border-b border-blue-300">
                <th class="px-4 py-3">Name</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($courses as $course)
                <tr class="bg-gray-100 border-b border-gray-300 hover:bg-gray-300">
                    <td class="px-4 py-3">{{ $course->name }}</td>
                </tr>
            @empty
                <tr class="text-center bg-gray-100 border-b border-gray-300 hover:bg-gray-300">
                    <td class="px-4 py-3" colspan="5">Sem registros encontrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
