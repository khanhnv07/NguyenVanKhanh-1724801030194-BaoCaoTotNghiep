
<div>
    @include('livewire.create')
    @include('livewire.update')
    <section class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                    <div class="alert alert-succsess">{{session('message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>All Employees
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployeeModal">
                                Add new Employee
                              </button>
                        </h3>
                    </div>
                    <div class="card-body">
                        
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Salary</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->salary}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>
                                            <div class="row">
                                                <button type="button" class="btn btn-info" 
                                                    data-toggle="modal" data-target="#updateEmployeeModal" wire:click.prevent="edit({{$item->id}})">Edit</button>
        
                                                <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$item->id}})">Delete</button>    
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

