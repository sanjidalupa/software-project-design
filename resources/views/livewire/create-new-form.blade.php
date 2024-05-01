<div>
    <h1>Create a New Survey</h1>
    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <label for="name" class="form-label">Survey Name</label>
            <input type="text" class="form-control" id="name" wire:model.defer="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Create Form</button>
    </form>
    
</div>
