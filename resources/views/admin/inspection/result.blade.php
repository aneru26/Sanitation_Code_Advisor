@extends('layouts.app')  

@section('content')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="overflow:auto; border-width: 2px; box-shadow: 0 0 10px blue; ">
    <!-- Content Header (Page header) -->

    <section class="content-header " style="background-color: #00287B;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <button type="button" class="btn-sm btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->

            <h3 class="text-center fw-bold text-white">SANITATION CODE RESULT </h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-2"> 
            <img src="{{ asset('assets/img/butuan-logo.webp') }}" class="img-fluid d-none d-md-inline" alt="AdminLTE Logo" style="max-height: 150px; width: auto;">
        
          </div>
          <div class="col-sm-8 mt-4 ml-0"> 
        
            <h5 class="text-left fw-bold"> SANITATION CODE RESULT </h5>
            <h5 class="text-left fw-bold">CITY GOVERNMENT OF OFFICE</h5>
            <h5 class="text-left fw-bold">OFFICE OF THE CTY HEALTH OFFICER</h5>
            <h5 class="text-left fw-bold">BMC Compound,Brgy. Tiniwisan, Butuan City</h5>
        
          </div>

          <div class="col-sm-2"> 
            <img src="{{ asset('assets/img/butuan-city-health-logo.png') }}" class="img-fluid d-none d-md-inline float-right" alt="AdminLTE Logo" style="max-height: 150px; width: auto;">
        
          </div>
          <div class="col-12"> 
           <div class="card " style="height: 20px; background-color: #00287B; "></div>
          </div>
          <div class="col-12">
            <div class="row justify-content-end">
              <div class="col-auto">
                <a href="{{ url('generate-pdf/'.$getRecord->id) }}" class="text-decoration-none">
                  <i class="fas fa-print"></i> Print
                </a>
              </div>
            </div>
            <h2 class="text-left fw-bold text-center">INSPECTION FORM</h2>
            <h6 class="text-left fw-bold text-center">(Food Establishment)</h6>
          </div>
          
          
        </div>
        
        <div class="row mb-2">
          <div class="col-sm-6 "> 
        
            <h5 class="text-center fw-bold "> ESTABLISHMENT NAME: <span class="text-decoration-underline">{{ $getRecord->register->name_of_establishment }}</span>
              </h5>
          
        
          </div>
          <div class="col-sm-6 pt-4"> 
        
            <h5 class="text-center fw-bold text-right"> CLASSIFICATION: <span class="text-decoration-underline">{{ $getRecord->register->occupancy_classification }}</span> </h5>
          
        
          </div>
          </div>
          <div class="row mb-2 pt-4">
            <div class="col-sm-6 "> 
          
              <h5 class="text-center fw-bold "> OWNER/MANAGER: <span class="text-decoration-underline">{{ $getRecord->register->owner_firstname }} 
              {{ $getRecord->register->owner_lastname }} </span> </h5>
            
          
            </div>
            <div class="col-sm-6 pt-4"> 
          
              <h5 class="text-center fw-bold text-right"> DATE: <span class="text-decoration-underline">{{ $getRecord->created_at->format('M d, Y') }}</span> </h5>
            
          
            </div>
            </div>
            <div class="row mb-2 pt-4">
              <div class="col-sm-6 "> 
            
                <h5 class="text-center fw-bold "> ADDRESS: <span class="text-decoration-underline"> {{ $getRecord->register->address }}</span></h5>
              
            
              </div>

              <div class="col-sm-6 pt-4"> 
            
                <h5 class="text-center fw-bold "> CELLPHONE NO.: <span class="text-decoration-underline"> {{ $getRecord->register->cp_number }}</span></h5>
              
            
              </div>
            
              </div>
              <div class="row mb-2 pt-4">
                <div class="col-sm-6 "> 
              
                  <h5 class="text-center fw-bold"> NO. OF PERSONEL: <span class="text-decoration-underline">{{$getRecord->register->number_of_personel }}</span></h5>
                
              
                </div>
                <div class="col-sm-6 pt-4"> 
              
                  <h5 class="text-center fw-bold text-right"> SANITARY PERMIT NO.: <span class="text-decoration-underline">{{$getRecord->register->id }}</span></h5>
                
              
                </div>
                </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  

          @include(' _message')

            
            <div class="card">
             
              <!-- /.card-header -->
              <div  class="card-body table-responsive" >
                <table class="table table-bordered table-hover responsive">
                  
                  <thead>
                    <tr class="text-center">
                      <th>ITEMS</th>
                      <th>DEMERIT(X)</th>
                      <th>RECOMMENDATION CORRECTIVE MEASURES</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <th>1. Sanitary Permit</th>
                      <th class="text-center">{{ $getRecord->sanitary_permit === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->sanitary_permit === 'No')
                        <div class="text-center"><a href="/recommendation/1">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>2. Health Certificate</th>
                      <th class="text-center">{{ $getRecord->health_certificate === 'No' ? 'X' : ''  }}</th>
                      <th >
                        
                        @if ($getRecord->health_certificate === 'No')
                        <div class="text-center"><a href="/recommendation/2">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>3. Storage Protection of flour & ingredients</th>
                      <th class="text-center">{{ $getRecord->storage_protection === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->storage_protection === 'No')
                        <div class="text-center"><a href="/recommendation/3">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>4. Construction of Premises</th>
                      <th class="text-center">{{ $getRecord->construction_premises === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->construction_premises === 'No')
                        <div class="text-center"><a href="/recommendation/4">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>5. Maintenance of Premises</th>
                      <th class="text-center">{{ $getRecord->maintenance_premises === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->maintenance_premises === 'No')
                        <div class="text-center"><a href="/recommendation/5">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>6. Toilet Provision</th>
                      <th class="text-center">{{ $getRecord->toilet_provison === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->toilet_provison === 'No')
                        <div class="text-center"><a href="/recommendation/6">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>7. Hand washing facilities</th>
                      <th class="text-center">{{ $getRecord->hand_facilities === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->hand_facilities === 'No')
                        <div class="text-center"><a href="/recommendation/7">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>8. Water Supply</th>
                      <th class="text-center">{{ $getRecord->water_supply === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->water_supply === 'No')
                        <div class="text-center"><a href="/recommendation/8">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>9. Liquid Waste Management</th>
                      <th class="text-center">{{ $getRecord->liquid_waste === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->liquid_waste === 'No')
                        <div class="text-center"><a href="/recommendation/9">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>10. Wholesomeness of Food</th>
                      <th class="text-center">{{ $getRecord->wholesomeness_food === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->wholesomeness_food === 'No')
                        <div class="text-center"><a href="/recommendation/10">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>11. Protection of Food</th>
                      <th class="text-center">{{ $getRecord->protection_food === 'No' ? 'X' : '' }}</th>
                     <th >
                        
                        @if ($getRecord->protection_food === 'No')
                        <div class="text-center"><a href="/recommendation/11">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th> 12. Vermin Control</th>
                      <th class="text-center">{{ $getRecord->vermin_control === 'No' ? 'X' : '' }}</th>
                     <th >
                        
                        @if ($getRecord->vermin_control === 'No')
                        <div class="text-center"><a href="/recommendation/12">Click to see recommendation</a></div>
                        @endif
                  
                    </th>
                    </tr>
                    <tr>
                      <th>13. Cleanliness and Tidiness</th>
                      <th class="text-center">{{ $getRecord->cleanliness_tideness === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->cleanliness_tideness === 'No')
                        <div class="text-center"><a href="/recommendation/13">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>14. Personal Cleanliness</th>
                      <th class="text-center">{{ $getRecord->personal_cleanliness === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->personal_cleanliness === 'No')
                        <div class="text-center"><a href="/recommendation/14">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>15. Housekeeping and Management</th>
                      <th class="text-center">{{ $getRecord->housekeeping_management === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->housekeeping_management === 'No')
                        <div class="text-center"><a href="/recommendation/15">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>16. Conditions of Appliance & Utensils</th>
                      <th class="text-center">{{ $getRecord->condition_appliance === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->condition_appliance === 'No')
                        <div class="text-center"><a href="/recommendation/16">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>17. Cleanliness of Appliance & Utensils</th>
                      <th class="text-center">{{ $getRecord->cleanliness_appliance === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->cleanliness_appliance === 'No')
                        <div class="text-center"><a href="/recommendation/17">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>18. Disease Control</th>
                      <th class="text-center">{{ $getRecord->disease_control === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->disease_control === 'No')
                        <div class="text-center"><a href="/recommendation/18">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>19. Disposal of Garbage</th>
                      <th class="text-center">{{ $getRecord->disposal_garbage === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->disposal_garbage === 'No')
                        <div class="text-center"><a href="/recommendation/19">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>20. Miscellaneous Training (FHC)</th>
                      <th class="text-center">{{ $getRecord->misellaneous_training === 'No' ? 'X' : '' }}</th>
                      <th >
                        
                        @if ($getRecord->misellaneous_training === 'No')
                        <div class="text-center"><a href="/recommendation/20">Click to see recommendation</a></div>
                        @endif
                      </th>
                    </tr>
                    <tr>
                      <th>TOTAL DEMERITS: </th>
                      <th class="text-center"> {{ $totalDemerit  }} </th>
                    </tr>
                  </tbody>
                </table>
                
  
               
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <section class="content-header t-5">
              <div class="container-fluid">
               
                
                <div class="row mb-2">
                  <div class="col-sm-6"> 
                    <h5 class="text-center fw-bold pt-5">PERCENTAGE RATING: <span id="percentageRating" class="border border-dark px-3 py-4 pl-4">
                        {{ $totalDemeritScore > 0 ? 100 - ($totalDemeritScore) : 100 }}%</span>
                    </h5>
                    <h6 class="text-center fw-bold "> (100% LESS Demerit Score)
                    </h6>
                </div>
                
                  <div class="col-sm-6 "> 
                
                    <h5 class="text-left fw-bold text-center pt-5"> NOTE: Non-complying item are indicating with an (x). 
                      Every such item is weighed with a demerit of 5. The rating of the
                       establishment is therefore 100 (no. of demerit x 5) The result is 
                      expresser as a percentage (%). </h5>
                  
                
                  </div>
                  </div>
                      
                <div class="row mb-2 mt-5">
                  <div class="col-sm-4 mt-5"> 
                
                    <h5 class="text-left fw-bold mt-5">Received by:______________</h5>

                     
                  
                
                  </div>
                  <div class="col-sm-4 mt-5"> 
                
                    <h5 class="text-left fw-bold text-center"> SANITATION STANDARD </h5>
                    <h5 class="text-left fw-bold text-center"> EXCELLENT </h5>
                    <h5 class="text-left fw-bold text-center"> VERY SATISFACTORY </h5>
                    <h5 class="text-left fw-bold text-center"> SATISFACTORY </h5>
                  
                
                  </div>
                  <div class="col-sm-4 mt-5"> 
                
                  <h5 class="text-left fw-bold text-center"> PERCENTAGE RATING </h5>
                  <h5 class="text-left fw-bold text-center"> 90-100% </h5>
                  <h5 class="text-left fw-bold text-center"> 70-80% </h5>
                  <h5 class="text-left fw-bold text-center"> 50-60% </h5>
                
                  </div>
                
                </div>

                <div class="row mb-2 pt-5">
                  <div class="col-sm-6 pt-5"> 
                
                    <h5 class="text-center fw-bold pt-5">______________________</h5>

                    <h5 class="text-center fw-bold">Owner/Operator/Manager</h5>

                   
                  
                
                  </div>
                  <div class="col-sm-6 pt-5"> 
                
                    <h5 class="text-center fw-bold pt-5">______________________</h5>

                    <h5 class="text-center fw-bold">Sanitation Inspector</h5>

                  
                
                  </div>
                  </div>
                  <div class="row mb-2 mt-5">
                    <div class="col-sm-12 mt-5"> 
                  
                      <h5 class="text-left fw-bold mt-5">Phone: (085) 816-3731</h5>
  
                      <h5 class="text-left fw-bold">Email: butuancityhealthtyahoo.com</h5>
                      <h5 class="text-left fw-bold">Website: http://www.butuan.gov.ph</h5>
  
                     
                    
                  
                    </div>
                  
                    </div>
                    <div class="row mb-2 mt-5">
                      <div class="col-sm-12 mt-5"> 
                    
                        <img src="{{ asset('assets/img/butuan-on-logo (1).png') }}" class="img-fluid d-none d-md-inline float-right" alt="AdminLTE Logo" style="max-height: 150px; width: auto;">
    
                       
                      
                    
                      </div>
                    
                      </div>
                  </div>
              
              
              </div><!-- /.container-fluid -->
            </section>
          </div>
        
        </div>
      
        </section> 
  </div>
  <!-- /.content-wrapper -->
    



@endsection


