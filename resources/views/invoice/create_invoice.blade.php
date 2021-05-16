@extends('admin_layout')
@section('content')
    
      <div class="container-fluid" >
        <div class="row justify-content-center">
            <div class="col-12  text-center">
                <div class="card ">
                    <h2><strong>Create Invoice</strong></h2>
                    <p>Fill all form field to go to next step</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form id="msform" action="{{route('save.invoice')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Customer</strong></li>
                                    <li id="personal"><strong>Employee</strong></li>
                                    <li id="payment"><strong>Payment</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Customer Information</h2> 
                                        <input type="text" name="customer_name" value="{{$order->customer_name}}" readonly /> 
                                        <input type="email" name="customer_email" value="{{$order->customer_email}}" readonly /> 
                                        <input type="text" name="customer_phone" value="{{$order->customer_phone}}" readonly/> 
                                        <input type="text" name="customer_address" value="{{$order->customer_address}}" /> 
                                        <input type="hidden" name="order_id" value="{{$order->order_id}}" /> 
                                        
                                        <h2 class="fs-title">Service</h2>
                                            @foreach ($service as $item)
                                                <?php
                                                
                                                    $a = explode(',',$order->service);
                                                        for($i=0; $i<count($a); $i++)
                                                        {
                                                            if($a[$i] == $item->id){
                                                            ?>
                                                                <input type="text" value="{{$item->service_name}}" readonly/>
                                                                <input type="hidden" name="service_select[]" value="{{$a[$i]}}" readonly/>
                                                                <br>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                @endforeach
                                        
                                    </div> 
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Employee Action</h2>
                                        @foreach ($majobs as $item)
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" 
                                                        data-target="#collapseOne-{{$item->id}}" aria-expanded="false" aria-controls="collapseOne-{{$item->id}}">
                                                        {{$item->name}}
                                                    </button>
                                                    </h2>
                                                </div>
                                            
                                                <div id="collapseOne-{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        @foreach ($employees as $employee)
                                                            <?php
                                                                $a = explode(',',$employee->majobId);
                                                                for($i=0; $i<count($a); $i++)
                                                                {
                                                                    if($a[$i] == $item->id){
                                                                ?>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="{{$employee->id}}" name="employee_id[]" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                            {{$employee->name}}
                                                                        </label>
                                                                    </div> <br>
                                                                <?php
                                                                    }
                                                                }
                                                            ?>
                                                        @endforeach
                                                        
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        

                                        
                                          
                                          
                                    </div> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        {{-- <h2 class="fs-title">Total Information</h2> --}}
                                         
                                        <h2 class="fs-title">Service Price</h2>
                                            <div class="ml-4">
                                                @foreach ($service as $item)
                                                    <?php
                                                    
                                                        $a = explode(',',$order->service);
                                                            for($i=0; $i<count($a); $i++)
                                                            {
                                                                if($a[$i] == $item->id){
                                                                ?>  
                                                                    <div class="row">
                                                                        <div class="col-m-6">
                                                                            <input type="text" name="service[]" value="{{$item->service_name}}" readonly/> 
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <input type="number" name="service_price[]" placeholder="Price">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    <br>
                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                    @endforeach 
                                            </div>
                                            <h2 class="fs-title">Invoice Status</h2>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input mr-12" type="radio" name="invoice_status" id="exampleRadios5" value="1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Finish
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="invoice_status" id="exampleRadios6" value="2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Unfinished 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> <hr>

                                            <h2 class="fs-title">Payments</h2>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input mr-12" type="radio" name="payment_type" id="exampleRadios1" value="1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Online Payment 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_type" id="exampleRadios2" value="2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Direct Payment 
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input mr-12" type="radio" name="paid_status"  value="1" checked>
                                                        <label class="form-check-label" for="paid_status">
                                                            Paid 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="paid_status"  value="2">
                                                        <label class="form-check-label" for="exampleRadios4">
                                                            Unpaid  
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <input type="hidden" name="admin_id" value="{{Session::get('admin_id')}}">
                                            
                                    </div> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                    <input type="submit" name="make_payment" class="next action-button" value="Confirm" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
@endsection

