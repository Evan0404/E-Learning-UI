<div>
    {{-- In work, do what you enjoy. --}}
    <h2 class="mb-2">Class List</h2>
    <button class="btn btn-sm btn-primary" wire:click="formControl(1)">[+] Add Class </button>
    <br><br>
    @if ($formStatus == 1)
        <div class="card shadow w-100 p-2">
            <center>
                <input type="text" class="form-control w-100" wire:model="className" placeholder="Class Name">
                <button class="btn btn-primary mt-2" wire:click="addClass">Add Your Class</button>
                <button class="btn btn-secondary mt-2" wire:click="formControl(0)">Close</button>
            </center>
        </div>
        <br>
    @endif
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow p-2">
                <h4>Class Name</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow p-2">
                <h4>Class Name</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow p-2">
                <h4>Class Name</h4>
            </div>
        </div>
    </div>
</div>
