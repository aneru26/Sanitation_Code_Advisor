@extends('layouts.app')  

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h1 class="text-center fw-bold">SANITATION CODE REQUIRMENTS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content pt-2">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
           
            <div class="card card-primary">
              
             
              <form method="post" action="" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card">
             
                <!-- /.card-header -->
                <div  class="card-body table-responsive" >
                <table class="table table-bordered" >
                    <thead>
                      <tr class="text-center">
                    
                        <th class="col-5">Sanitation Code</th>
                        <th class="col-2"></th>
                       
                        
                      </tr>
                      <tr>
                        <th>1. Sanitary Permit</th>
                        <th class="text-center ">
                            <div class="row">
                                <div class="col-6">
                                    <input type="radio" id="yes1" name="sanitary_permit" value="Yes" onchange="clearRecommendation(1)" required>
                                    <label for="yes1" style="margin-right: 5px;">Yes</label>
                                </div>
                                <div class="col-6">
                                    <input type="radio" id="no1" name="sanitary_permit" value="No" onchange="showRecommendation(1)" required>
                                    <label for="no1" style="margin-left: 5px;">No</label>
                                </div>
                            </div>
                        </th>
                    </tr>
                    
                    
                    <tr>
                      <th>2. Health Certificate</th>
                      <th class="text-center">
                        <div class="row">
                          <div class="col-6">
                          <input type="radio" id="yes2" name="health_certificate" value="Yes" onchange="clearRecommendation(2)" required>
                          <label for="yes2">Yes</label>
                          </div>
                          <div class="col-6">
                          <input type="radio" id="no2" name="health_certificate" value="No" onchange="showRecommendation(2)" required>
                          <label for="no2">No</label>
                          </div>
                        </div>
                      </th>
                     
                  </tr>
                  <tr>
                    <th>3. Storage Protection of Flour & Ingredients</th>
                    <th class="text-center">
                      <div class="row">
                        <div class="col-6">
                        <input type="radio" id="yes3" name="storage_protection" value="Yes" onchange="clearRecommendation(3)" required>
                        <label for="yes3">Yes</label>
                        </div>
                      <div class="col-6">
                        <input type="radio" id="no3" name="storage_protection" value="No" onchange="showRecommendation(3)" required>
                        <label for="no3">No</label>
                      </div>
                      </div>
                    </th>
                   
                </tr>
                <tr>
                  <th>4.Construction of Premises</th>
                  <th class="text-center">
                    <div class="row">
                      <div class="col-6">
                      <input type="radio" id="yes4" name="construction_premises" value="Yes" onchange="clearRecommendation(4)" required>
                      <label for="yes4">Yes</label>
                    </div>
                    <div class="col-6">
                      <input type="radio" id="no4" name="construction_premises" value="No" onchange="showRecommendation(4)" required>
                      <label for="no4">No</label>
                    </div>
                    </div>
                  </th>
                 
              </tr> 
              <tr>
                <th>  5.Maintenance of Premises</th>
                <th class="text-center">
                  <div class="row">
                    <div class="col-6">
                    <input type="radio" id="yes5" name="maintenance_premises" value="Yes" onchange="clearRecommendation(5)" required>
                    <label for="yes5">Yes</label>
                  </div>
                    <div class="col-6">
                    <input type="radio" id="no5" name="maintenance_premises" value="No" onchange="showRecommendation(5)" required>
                    <label for="no">No</label>
                    </div>
                  </div>
                </th>
               
            </tr> 

            <tr>
              <th>6.Toilet Provison</th>
              <th class="text-center">
                <div class="row">
                  <div class="col-6">
                  <input type="radio" id="yes6" name="toilet_provison" value="Yes" onchange="clearRecommendation(6)" required>
                  <label for="yes6">Yes</label>
                </div>
                  <div class="col-6">
                  <input type="radio" id="no6" name="toilet_provison" value="No" onchange="showRecommendation(6)" required>
                  <label for="no6">No</label>
                </div>
                </div>
              </th>
              
          </tr> 

          <tr>
            <th> 7.Hand washing Facilities</th>
            <th class="text-center">
              <div class="row">
                <div class="col-6">
                <input type="radio" id="yes7" name="hand_facilities" value="Yes" onchange="clearRecommendation(7)" required>
                <label for="yes7">Yes</label>
              </div>
              <div class="col-6">
                <input type="radio" id="no7" name="hand_facilities" value="No" onchange="showRecommendation(7)" required>
                <label for="no7">No</label>
              </div>
              </div>
            </th>
           
        </tr> 

        
        <tr>
          <th> 8.Water Supply</th>
          <th class="text-center">
            <div class="row">
              <div class="col-6">
              <input type="radio" id="yes8" name="water_supply" value="Yes" onchange="clearRecommendation(8)" required>
              <label for="yes8">Yes</label>
            </div>
              <div class="col-6">
              <input type="radio" id="no8" name="water_supply" value="No" onchange="showRecommendation(8)" required>
              <label for="no8">No</label>
            </div>
            </div>
          </th>
         
      </tr> 

           
      <tr>
        <th> 9.Liquid waste management</th>
        <th class="text-center">
          <div class="row">
            <div class="col-6">
            <input type="radio" id="yes9" name="liquid_waste" value="Yes" onchange="clearRecommendation(9)" required>
            <label for="yes9">Yes</label>
          </div>
          <div class="col-6">
            <input type="radio" id="no9" name="liquid_waste" value="No" onchange="showRecommendation(9)" required>
            <label for="no9">No</label>
          </div>
          </div>
        </th>
        
    </tr> 

    <tr>
      <th>  10.Wholesomeness of Food </th>
      <th class="text-center">
        <div class="row">
          <div class="col-6">
          <input type="radio" id="yes10" name="wholesomeness_food" value="Yes" onchange="clearRecommendation(10)" required>
          <label for="yes10">Yes</label>
        </div>
        <div class="col-6">
          <input type="radio" id="no10" name="wholesomeness_food" value="No" onchange="showRecommendation(10)" required>
          <label for="no10">No</label>
        </div>
        </div>
      </th>
      
  </tr> 

  
  <tr>
    <th> 11.Protection of Food</th>
    <th class="text-center">
      <div class="row">
        <div class="col-6">
        <input type="radio" id="yes11" name="protection_food" value="Yes" onchange="clearRecommendation(11)" required>
        <label for="yes">Yes</label>
      </div>
      <div class="col-6">
        <input type="radio" id="no11" name="protection_food" value="No" onchange="showRecommendation(11)" required>
        <label for="no11">No</label>
      </div>
      </div>
    </th>
    
</tr> 

<tr>
  <th>  12.Vermin Control</th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes12" name="vermin_control" value="Yes" onchange="clearRecommendation(12)" required>
      <label for="yes12">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no12" name="vermin_control" value="No" onchange="showRecommendation(12)" required>
      <label for="no12">No</label>
    </div>
    </div>
  </th>
  
</tr> 

<tr>
  <th>  13.Cleanliness and Tideness</th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes13" name="cleanliness_tideness" value="Yes" onchange="clearRecommendation(13)" required>
      <label for="yes13">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no13" name="cleanliness_tideness" value="No" onchange="showRecommendation(13)" required>
      <label for="no13">No</label>
    </div>
    </div>
  </th>
  
</tr> 

<tr>
  <th> 14.Personal Cleanliness</th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes14" name="personal_cleanliness" value="Yes" onchange="clearRecommendation(14)" required>
      <label for="yes14">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no14" name="personal_cleanliness" value="No" onchange="showRecommendation(14)" required>
      <label for="no14">No</label>
    </div>
    </div>
  </th>
 
</tr> 

<tr>
  <th> 15.Housekeeping and Management</th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes15" name="housekeeping_management" value="Yes" onchange="clearRecommendation(15)" required>
      <label for="yes15">Yes</label>
    </div>
      <div class="col-6">
      <input type="radio" id="no15" name="housekeeping_management" value="No" onchange="showRecommendation(15)" required>
      <label for="no15">No</label>
    </div>
    </div>
  </th>
  
</tr>


<tr>
  <th>  16.Conditions of Appliance & Utensils </th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes16" name="condition_appliance" value="Yes" onchange="clearRecommendation(16)" required>
      <label for="yes16">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no16" name="condition_appliance" value="No" onchange="showRecommendation(16)" required>
      <label for="no16">No</label>
    </div>
    </div>
  </th>
 
</tr>

<tr>
  <th> 17.Cleanliness of Appliance & Utensils </th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes17" name="cleanliness_appliance" value="Yes" onchange="clearRecommendation(17)" required>
      <label for="yes17">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no17" name="cleanliness_appliance" value="No" onchange="showRecommendation(17)" required>
      <label for="no17">No</label>
    </div>
    </div>
  </th>
 
</tr>

<tr>
  <th>  18.Disease Control  </th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes18" name="disease_control" value="Yes" onchange="clearRecommendation(18)" required>
      <label for="yes18">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no18" name="disease_control" value="No" onchange="showRecommendation(18)" required> 
      <label for="no18">No</label>
    </div>
    </div>
  </th>
  
</tr>


<tr>
  <th>  19.Disposal of Garbage</th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes19" name="disposal_garbage" value="Yes" onchange="clearRecommendation(19)" required>
      <label for="yes19">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no19" name="disposal_garbage" value="No" onchange="showRecommendation(19)" required>
      <label for="no19">No</label>
    </div>
    </div>
  </th>
 
</tr>


<tr>
  <th>  20.Misellaneous Training (FHC)</th>
  <th class="text-center">
    <div class="row">
      <div class="col-6">
      <input type="radio" id="yes20" name="misellaneous_training" value="Yes" onchange="clearRecommendation(20)" required>
      <label for="yes20">Yes</label>
    </div>
    <div class="col-6">
      <input type="radio" id="no20" name="misellaneous_training" value="No" onchange="showRecommendation(20)" required >
      <label for="no20">No</label>
    </div>
    </div>
  </th>
  
</tr>





                    </thead>
                    <tbody>
                     
              
                    </tbody>
                  </table>
                  <div class="text-center pt-4">

                    <button type="submit" class="btn btn-primary">
                      <i class="nav-icon ion-pricetag"></i> Show Result
                    </button>
                    <!-- Buttons at the bottom -->
                  
                   
                </div>
                </div>
                <!-- /.card-body -->
              </div>
                <!-- /.card-body -->

                
                @include(' _message')
              </form>
             </div>
         
          </div>
        </div>
        </div>
        
      </div>
    </section>
  
</div>

@endsection





