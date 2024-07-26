@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <div class="card"><br><br>
                    <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Name :  </h4>
                        <hr>
                        <h4 class="card-title">User Email :  </h4>
                        <hr>
                        <h4 class="card-title">User Name : </h4>
                        <hr>
                        <a href="" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
    
    
    
@endsection