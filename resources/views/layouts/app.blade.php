<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
    
    @livewireStyles
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    
    <link href="{{asset('/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    
    {{-- <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}"> --}}

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layout_left')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                @include('layout_top')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div>
                    
                    {{$slot}}
                </div>
    
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('admin.logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    @livewireScripts

    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
     

    <script>
        window.livewire.on('employeeAdded',()=>{
            $('#addEmployeeModal').close();
        })
        window.livewire.on('employeeUpdated',()=>{
            
            $('#updateEmployeeModal').modal('hide');
            
        })

        $("#addEmployee").click(function(){
            
            $('#addEmployeeModal').modal('hide');
           
        })
        
        $("#updateEmployee").click(function(){
            
            $('#updateEmployeeModal').modal('hide');
           
            
        })

    </script>

    <script>
        window.livewire.on('menuAdded',()=>{
            
            $('#addMenuModal').modal('hide');
            
        })
        $("#addMenu").click(function(){
            
            $('#addMenuModal').modal('hide');
           
        })

        window.livewire.on('menuUpdated',()=>{
            
            $('#updateMenuModal').modal('hide');
            
        })
        $("#updateMenu").click(function(){
            
            $('#updateMenuModal').modal('hide');
           
        })
    </script>
    
    

    
</body>

</html>