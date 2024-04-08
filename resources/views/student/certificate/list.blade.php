@extends('layouts.app')  

@section('content')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h1 class="text-center fw-bold">My Certificate(Total : {{ $getRecord->total() }})</h1>
          </div>
  
        </div>
        
      </div><!-- /.container-fluid -->
    </section>


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="text-align:right;">
            <a href="{{ url('customer/certificate/add')}}" class="btn btn-outline-primary btn-sm">Add New Certificate</a>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">

          </div>

          @include(' _message')

          <div class="row">
              @if(count($getRecord) > 0)
                  @foreach ($getRecord as $certificate)
                      <div class="col-md-6 col-xl-4">
                        
                          <div class="card  shadow-lg mb-5  rounded">
                            <div class="col-sm-12 pt-3" style="text-align:right;">
                              <a href="{{ url('customer/certificate/delete/'.$certificate->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
                            </div>
                              @if(!empty($certificate->getPhotoDirect()))
                                  <img src="{{ $certificate->getPhotoDirect() }}" style="height: 200px; width:300px; border-radius: 20px;" class="mx-auto">
                              @endif

                        
                              <div class="card-body">
                                  <h5 class="card-title "><span class="text-danger">Certifcate Name:</span>{{ $certificate->certificate_name}}</h5>
                                 
                                  <p class="card-text text-capitalize"> 
                                      </p>
                                  <div class="d-flex justify-content-between align-items-center">
                                      {{-- <p class="card-text">
                                          <small class="text-muted"><span class="text-danger">Submitted By:</span></small>
                                      </p> --}}
                                      <p class="card-text">
                                          <small class="text-muted">Last updated {{ $certificate->updated_at->diffforhumans() }}</small>
                                      </p>
                                  </div>
                                 
                              </div>
                          </div>
                      </div>
                  @endforeach
              @else
                  <div class="col-12 text-center">
                      <p>No records found.</p>
                  </div>
              @endif
          </div>
          <!-- /.card -->
      </div>
      <!-- /.col -->
      </div>
      <!-- /.row -->
  </section>
  </div>
  <!-- /.content-wrapper -->
    
  
@endsection

