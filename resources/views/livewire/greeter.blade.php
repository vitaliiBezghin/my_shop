<div>
    <div>
        {{$greeting}} , {{$name}}
    </div>
    <div class="mt-2">
        <form wire:submit="changeName()">
            <div>
                <select
                    class="p-4 border rounded-md bg-gray-700"
                    wire:model.fill="greeting"
                >
                    <option value="Hello">Hello</option>
                    <option selected value="Hi">Hi</option>
                </select>
                <input
                    type="text"
                    class="block w-full p-4 border rounded-md bg-gray-700"
                    wire:model="name"
                >
            </div>
            <button
                class="block text-white font-medium rounded-md px-4 py-2 bg-indigo-500">
                Push
            </button>
        </form>
    </div>
</div>
