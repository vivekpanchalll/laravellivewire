<div class="card offset-3 col-6">
    <div class="card-header">
      Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div>
                    @error('name')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="text" class="form-control" wire:model="email" id="exampleInputPassword1">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="exampleCheck1">phone</label>
                <input type="text" class="form-control" wire:model="phone" id="exampleCheck1">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:navigate href="/customers" class="btn btn-secondary btn-sm">Back</button>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
          </form>
    </div>
  </div>
