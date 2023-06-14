<div>
    <h1 class="text-2xl text-blue-500 font-medium">Create Courses</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="save">
        <label>
            <span class="text-gray-700">Name</span>

            <input class="mt-1 block w-full rounded-md border-blue-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-500 focus:ring-opacity-50" type="text" wire:model="course.name">

            @error('course.name')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <div class="self-end">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 text-blue-50 h-12 px-3 flex items-center rounded-md drop-shadow-lg hover:scale-105 active:scale-95">
                Save
            </button>
        </div>
    </form>
</div>
