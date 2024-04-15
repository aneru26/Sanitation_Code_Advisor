@extends('layouts.app')  

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper " >
    <!-- Content Header (Page header) -->
 
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container mt-3 border border-primary">
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 border-primary" style="background-color: rgb(26, 14, 154);">
            <div class="card-body p-3 text-center">
              <p class="card-text h1" style="color: white;">Menu</p>
            </div>
          </div>
        </div>
    
        <div class="col-md-6">
          <div class="card mb-4 border-primary">
            <div class="card-body p-3 text-center">
              <a href="{{ url('customer/registration/list')}}">
                <i class="ion-android-create" style="font-size: 30px;"></i>
                <p class="card-text">Registration Form</p>
              </a>
            </div>
          </div>
        </div>
    
        <div class="col-md-6">
          <div class="card mb-4 border-primary">
            <div class="card-body p-3 text-center">
              <a href="{{ url('customer/inspection/list')}}">
                <i class="ion-document-text ion-4x"  style="font-size: 30px;"></i>
                <p class="card-text">My Records</p>
              </a>
            </div>
          </div>
        </div>
        
      </div>
    
      <div class="row pt-0">
        <div class="col-md-6">
          <div class="card mb-4 border-primary">
            <div class="card-body p-3 text-center">
              <a href="{{ url('customer/inspection/compliance')}}">
                <i class="ion-trophy ion-4x"  style="font-size: 30px;"></i>
                <p class="card-text">Subject for Compliance</p>
              </a>
            </div>
          </div>
        </div>
        
    
        <div class="col-md-6">
          <div class="card mb-4 border-primary">
            <div class="card-body p-3 text-center">
              <a href="{{ url('customer/certificate/list')}}">
                <i class="icon ion-ribbon-b" style="font-size: 30px;"></i>
                <p class="card-text">Attachments</p>
              </a>
            </div>
          </div>
        </div>
        
        
    
        <div class="col-md-4"></div>
      </div>
    </div>
    
  </div>
  <!-- /.content-wrapper -->

@endsection
