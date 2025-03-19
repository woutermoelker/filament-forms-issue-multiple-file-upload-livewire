<div class="max-w-2xl mx-auto p-4 bg-white m-4">
    <h2 class="text-2xl font-semibold mb-4">{{ __('Edit Location') }}</h2>

    <form wire:submit="update">
        {{ $this->form }}

        <div class="mt-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                {{ __('Update Location') }}
            </button>
        </div>
    </form>
</div>
