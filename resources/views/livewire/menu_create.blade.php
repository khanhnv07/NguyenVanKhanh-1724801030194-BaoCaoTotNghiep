<!-- Button trigger modal -->

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" id="form-create">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="menu_name" class="form-control" wire:model='menu_name' >
              </div>
              <div class="form-group">
                <label for="name">Link</label>
                <input type="text" name="menu_link" class="form-control" wire:model='menu_link' >
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <input type="text" name="menu_desc" class="form-control" wire:model='menu_desc' >
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
          <button type="button" class="btn btn-primary" id="addMenu" wire:click.prevent="storeMenu()">Add Menu</button>
        </div>
      </div>
    </div>
  </div>