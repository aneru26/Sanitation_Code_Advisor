@extends('layouts.app')  

@section('content')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-dark" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h4 class="text-center fw-bold">Establishment Subject For Inspection </h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  
   

    <!-- Main content -->
    <section class="content mt-4">
      <div class="container-fluid">
  

          @include(' _message')

            
            <div class="card">
             
              <!-- /.card-header -->
              <div  class="card-body table-responsive border border-primary" style="overflow:auto; border-width: 2px; box-shadow: 0 0 10px blue; ">
              <table class="table responsive " >
                  <thead>
                    <tr class="text-center">
                  
                    
                      <th>INSPECTION OF</th>
                      
                      
                    </tr>

                    <tr>
                  
                    
                      <th>Inspection No: <span class="text-primary">{{ $getRecord ->id }}</span> </th>
                      
                      
                    </tr>

                    <tr>
                  
                    
                      <th>Establishment Name: <span class="text-primary">{{ $getRecord ->name_of_establishment }}</span> </th>
                      
                      
                    </tr>
                    <tr>
                      <th>Address:<span class="text-primary">{{ $getRecord ->address }} </span></th>
                      
                      
                    </tr>
                    <tr>
                      <th>Name of Owner: <span class="text-primary"> {{ $getRecord ->owner_firstname }} {{ $getRecord ->owner_lastname }}</span></th>
                      
                      
                    </tr>
                    <tr>
                      <th>No. Of Personel: <span class="text-primary"> {{ $getRecord ->number_of_personel }}</span> </th>
                      
                      
                    </tr>
                    <tr>
                      <th>Occupancy Classification: <span class="text-primary">{{ $getRecord ->occupancy_classification }}</span> </th>
                      
                      
                    </tr>
                    <tr>
                      <th>Date: <span class="text-primary">{{ $getRecord->created_at->diffforhumans() }}</span> </th>
                      
                      
                    </tr>
                    <tr>
                      <th>Registered By: <span class="text-primary">{{ $getRecord->created_by_name }} {{ $getRecord->created_by_last_name }}</span></th>
                  </tr>
                  
                    <tr>
                      <th class="text-center "><h5 class="font-weight-bold">Certificate </h5>
                        <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  @if(count($getCertificate) > 0)
                                      @foreach($getCertificate as $value)
                                      <div class="col-lg-4 col-md-6 col-sm-12">
                                          <div class="text-center mb-3">
                                              @if(!empty($value->getPhotoDirect()))
                                              <div class="square-container">
                                                  <img src="{{ $value->getPhotoDirect() }}" class="img-fluid rounded square-image" alt="Certificate Image">
                                              </div>
                                              @endif
                                              <div><h4>{{ $value->certificate_name }}</h4></div>
                                          </div>
                                      </div>
                                      @endforeach
                                  @else
                                      <div class="col-12 text-center">
                                          <p>No Certificate found.</p>
                                      </div>
                                  @endif
                              </div>
                          </div>
                      </div>
                      
                      
                      
                     </th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
            
                  </tbody>
                </table>
                <div class="text-center pt-4">

                  <a href="{{ url('inspector/inspection/add/'.$getRecord->id)}}" class="btn btn-primary">Click for Inspection</a>
                  <!-- Buttons at the bottom -->
                
                 
              </div>
               
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        
        </div>
      
        </section> 
  </div>
  <!-- /.content-wrapper -->
    
  
@endsection

