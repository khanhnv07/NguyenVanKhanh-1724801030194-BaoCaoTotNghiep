<!-- Button trigger modal -->

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" id="form-create">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" wire:model='name'>
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" wire:model='email'>
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="number" name="phone" class="form-control" wire:model='phone'>
            </div>
            <div class="form-group">
                <label for="name">Salary</label>
                <input type="number" name="salary" class="form-control" wire:model='salary'>
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address" class="form-control" wire:model='address'>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="addEmployee" wire:click.prevent="store()">Add Employee</button>
        </div>
      </div>
    </div>
  </div>