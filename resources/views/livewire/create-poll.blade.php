<div>
    <form wire:submit.prevent="createPoll">
        <label for="">Poll title</label>
        <input type="text" wire:model="title">
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label for="">Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}">
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                    @error('options.' . $index)
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            @endforeach
        </div>

        <div class="mb-4">
            <button type="submit" class="btn">Create Poll</button>
        </div>
    </form>
</div>
