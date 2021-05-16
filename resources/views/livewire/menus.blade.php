<div>
    @include('livewire.menu_create')
    @include('livewire.menu_update')
    <section class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                    <div class="alert alert-succsess">{{session('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Menu Employees
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMenuModal">
                                Add new Menus
                              </button>
                        </h3>
                    </div>
                    <div class="card-body">
                        
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $item)
                                    <tr>
                                        <td>{{$item->menu_name}}</td>
                                        <td>{{$item->menu_link}}</td>
                                        <td>{{$item->menu_desc}}</td>
                                        <td>
                                            @if ($item->menu_status == 1)
                                                Active
                                            @else
                                                UnActive 
                                            @endif
                                        </td>
                                        
                                        <td>
                                            <div class="row">
                                                <button type="button" class="btn btn-info" 
                                                    data-toggle="modal" data-target="#updateMenuModal" wire:click.prevent="editMenu({{$item->id}})">Edit</button>
        
                                                <button type="button" class="btn btn-danger" wire:click.prevent="deleteMenu({{$item->id}})">Delete</button>    
                                            </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


