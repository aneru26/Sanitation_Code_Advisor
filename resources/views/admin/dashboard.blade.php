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
    
        <div class="col-md-4 mb-4">
          <div class="card mb-4 border-primary h-100">
            <div class="card-body p-3 text-center">
              <a href="{{ url('admin/registration/list')}}">
                <i class="fas fa-search" style="font-size: 30px;"></i>
                <p class="card-text">Subject For Inspection </p>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-4">
          <div class="card mb-4 border-primary h-100">
              <div class="card-body p-3 text-center">
                  <a href="{{ url('admin/inspector/list')}}">
                      <i class="fas fa-user-secret" style="font-size: 30px;"></i> 
                      <p class="card-text">Inspector</p>
                  </a>
              </div>
          </div>
      </div>
      
      
    
      <div class="col-md-4 mb-4">
        <div class="card mb-4 border-primary h-100">
            <div class="card-body p-3 text-center">
                <a href="{{ url('admin/inspection/list')}}">
                    <i class="fas fa-file-alt" style="font-size: 30px;"></i>
                    <p class="card-text">Record Section</p>
                </a>
            </div>
        </div>
    </div>
    
        
      </div>
    
      <div class="row pt-0">
        <div class="col-md-4 mb-4">
          <div class="card mb-4 border-primary h-100">
              <div class="card-body p-3 text-center">
                  <a href="{{ url('admin/inspection/compliance')}}">
                      <i class="fas fa-check-circle" style="font-size: 30px;"></i>
                      <p class="card-text">Subject for Compliance</p>
                  </a>
              </div>
          </div>
      </div>
      

      <div class="col-md-4 mb-4">
        <div class="card mb-4 border-primary h-100">
            <div class="card-body p-3 text-center">
                <a href="{{ url('admin/recomendationForm/list')}}">
                    <i class="fas fa-book" style="font-size: 30px;"></i>
                    <p class="card-text">Section Code Rule Form</p>
                </a>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-4 mb-4">
      <div class="card mb-4 border-primary h-100">
          <div class="card-body p-3 text-center">
              <a href="{{ url('admin/student/list')}}">
                  <i class="fas fa-user-plus" style="font-size: 30px;"></i>
                  <p class="card-text">All User</p>
              </a>
          </div>
      </div>
  </div>
  
        
        
    

      </div>
    </div>
    
  </div>
  <!-- /.content-wrapper -->


@endsection