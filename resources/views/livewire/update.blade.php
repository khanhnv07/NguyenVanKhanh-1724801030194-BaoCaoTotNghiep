<!-- Button trigger modal -->
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" >
              <input type="hidden" wire:model="ide" name="id">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" wire:model='name'>
                  @error('name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" wire:model='email'>
                @error('email') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="number" name="phone" class="form-control" wire:model='phone'>
                @error('phone') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">Salary</label>
                <input type="number" name="salary" class="form-control" wire:model='salary'>
                @error('salary') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address" class="form-control" wire:model='address'>
                @error('address') <span class="text-danger">{{$message}}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateEmployee" wire:click.prevent="update()">Update Employee</button>
        </div>
      </div>
    </div>
  </div>