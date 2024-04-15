@extends('layouts.app')  

@section('content')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header bg-primary" >
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn-sm btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h4 class="text-center fw-bold">Establishment Subject For Inspection </h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2 ">
          
      

          <div class="col-12">
            <div class="row justify-content-end">
            </div>
            <h2 class="text-left fw-bold text-center">INSPECTION OF</h2>
            <h6 class="text-left fw-bold text-center">(Food Establishment)</h6>
          </div>
          
        </div>
        
        <div class="row mb-2">
          <div class="col-sm-6 "> 
        
            <h5 class="text-center fw-bold "> ESTABLISHMENT NAME: <span class="text-decoration-underline"> {{ $getRecord ->name_of_establishment }}</span>
              </h5>
          
        
          </div>
          <div class="col-sm-6 pt-4"> 
        
            <h5 class="text-center fw-bold text-right"> CLASSIFICATION: <span class="text-decoration-underline">{{ $getRecord ->occupancy_classification }}</span> </h5>
          
        
          </div>
          </div>
          <div class="row mb-2 pt-4">
            <div class="col-sm-6 "> 
          
              <h5 class="text-center fw-bold "> OWNER/MANAGER: <span class="text-decoration-underline"> {{ $getRecord ->owner_firstname }} {{ $getRecord ->owner_lastname }} </span> </h5>
            
          
            </div>
            <div class="col-sm-6 pt-4"> 
          
              <h5 class="text-center fw-bold text-right"> DATE: <span class="text-decoration-underline"> {{ $getRecord->created_at->format('F j, Y') }}</span> </h5>

            
          
            </div>
            </div>
            <div class="row mb-2 pt-4">
              <div class="col-sm-6 "> 
            
                <h5 class="text-center fw-bold "> ADDRESS: <span class="text-decoration-underline"> {{ $getRecord ->address }}  </span></h5>
              
            
              </div>
            
              <div class="col-sm-6 pt-4"> 
            
                <h5 class="text-center fw-bold "> CELLPHONE NO. <span class="text-decoration-underline">{{ $getRecord ->cp_number }} </span></h5>
              
            
              </div>

              </div>
              <div class="row mb-2 pt-4">
                <div class="col-sm-6 "> 
              
                  <h5 class="text-center fw-bold"> NO. OF PERSONEL: <span class="text-decoration-underline"> {{ $getRecord ->number_of_personel }}</span></h5>
                
              
                </div>
                <div class="col-sm-6 pt-4"> 
              
                  <h5 class="text-center fw-bold"> INSPECTION NO. {{ $getRecord ->id }}</h5>
                
              
                </div>
                </div>

                <div class="row mb-2 pt-4">
                  <div class="col-sm-6 "> 
                
                    <h5 class="text-center fw-bold"> REGISTER BY: <span class="text-decoration-underline">{{ $getRecord->created_by_name }} {{ $getRecord->created_by_last_name }}</span></h5>
                  
                
                  </div>

                  </div>

                  <div class="col-12 pt-5">
                    <div class="row justify-content-end">
                    </div>
                    <h2 class="text-left fw-bold text-center">ATTACHMENTS</h2>
                    
                  </div>

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
                                    <p>No Attachments found.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">

                  <a href="{{ url('inspector/inspection/add/'.$getRecord->id)}}" class="btn btn-primary">Click for Inspection</a>
                  <!-- Buttons at the bottom -->
                
                 
              </div>
               
      </div><!-- /.container-fluid -->
    </section>
   

    
    <!-- Main content -->

  </div>
  <!-- /.content-wrapper -->
    
  
@endsection

