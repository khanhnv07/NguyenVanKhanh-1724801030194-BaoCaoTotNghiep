<!-- Button trigger modal -->
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateMenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" >
              <input type="hidden" wire:model="ide" name="id">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="menu_name" class="form-control" wire:model='menu_name'>
                  @error('menu_name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">
                <label for="name">Link</label>
                <input type="tetx" name="menu_link" class="form-control" wire:model='menu_link'>
                @error('menu_link') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">Desc</label>
                <input type="text" name="menu_desc" class="form-control" wire:model='menu_desc'>
                @error('menu_desc') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">Status</label>
                <select name="menu_status" class="form-control" id="" wire:model='menu_status'>
                    <option selected value="1">Active</option>
                    <option value="0">Unactive</option>
                </select>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateMenu" wire:click.prevent="updateMenu()">Update Menu</button>
        </div>
      </div>
    </div>
  </div>