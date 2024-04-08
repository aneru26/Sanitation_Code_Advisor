<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitation Code Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
     

        body {
            margin: 0;
            font-size: 12px; /* Adjust font size */
        }

 
    </style>
</head>

<body>
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="overflow:auto; border-width: 2px; box-shadow: 0 0 10px blue; ">
    <!-- Content Header (Page header) -->

    <section style="background-color: #00287B;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h5 class="text-center fw-bold text-white" style="margin-top: 0px;">SANITATION CODE RESULT</h5>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

      <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-8 mt-1 ml-0"> 
        
            <h6 class="text-left fw-bold" style="font-size: 10px"> SANITATION CODE RESULT </h6>
            <h6 class="text-left fw-bold" style="font-size: 10px">CITY GOVERNMENT OF OFFICE</h6>
            <h6 class="text-left fw-bold" style="font-size: 10px">OFFICE OF THE CTY HEALTH OFFICER</h6>
            <h6 class="text-left fw-bold" style="font-size: 10px">BMC Compound,Brgy. Tiniwisan, Butuan City</h6>
        
          </div>
          <div class="col-sm-2"> 
            <img src="public\assets\img\butuan-city-health-logo.png" class="img-fluid d-none d-md-inline float-right" alt="AdminLTE Logo" style="max-height: 150px; width: auto;">
        
          </div>
          <div class="col-12"> 
           <div class="card " style="height: 20px; background-color: #00287B; "></div>
          </div>
          <div class="col-12 "> 
           

             
            <h5 class="text-left fw-bold text-center"> INSPECTION FORM</h5>
            <h6 class="text-left fw-bold text-center"> (Food Establishment)</h6>
            
          
          </div>
          
        </div>

        <div class="container">
    
     
          <div class="row mb-2">
            <div class="col-sm-6">
                <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-right: 50px;">ESTABLISHMENT NAME: <span class="text-decoration-underline">{{ $getRecord->register->name_of_establishment }}</span></h6>
                <h6 class="text-right fw-bold" style="font-size: 12px; display: inline-block; padding-left: 70px;">CLASSIFICATION: <span class="text-decoration-underline">{{ $getRecord->register->occupancy_classification }}</span></h6>
            </div>
        </div>

        <div class="row mb-2">
          <div class="col-sm-6">
              <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-right: 90px;">OWNER/MANAGER: <span class="text-decoration-underline">{{ $getRecord->register->owner_firstname }} 
                {{ $getRecord->register->owner_lastname }}</span></h6>
              <h6 class="text-right fw-bold" style="font-size: 12px; display: inline-block; padding-left: 50px;">DATE: <span class="text-decoration-underline">{{ $getRecord->created_at->format('F j, Y') }}</span></h6>
          </div>
      </div>

      <div class="row mb-2">
        <div class="col-sm-6">
            <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-right: 90px;">ADDRESS: <span class="text-decoration-underline">{{ $getRecord->register->address }}</span></h6>

            <h6 class="text-right fw-bold" style="font-size: 12px; display: inline-block; padding-left: 80px;">CELLPHONE NO.: <span class="text-decoration-underline">{{ $getRecord->register->cp_number }}</span></h6>
            
        </div>

        
    </div>

    <div class="row mb-2">
      <div class="col-sm-6">
          <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-right: 90px;"> NO. OF PERSONEL: <span class="text-decoration-underline">{{$getRecord->register->number_of_personel }}</span></h6>
          <h6 class="text-right fw-bold" style="font-size: 12px; display: inline-block; padding-left: 120px;">SANITARY PERMIT NO.: <span class="text-decoration-underline">{{$getRecord->register->id }}</span></h6>
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
                      <th style="font-size: 12px;">ITEMS</th>
                      <th style="font-size: 12px;">DEMERIT(X)</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <th style="font-size: 12px;">1. Sanitary Permit</th>
                      <th class="text-center">{{ $getRecord->sanitary_permit === 'No' ? 'X' : '' }}</th>
                    
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">2. Health Certificate</th>
                      <th class="text-center">{{ $getRecord->health_certificate === 'No' ? 'X' : ''  }}</th>
                     
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">3. Storage Protection of flour & ingredients</th>
                      <th class="text-center">{{ $getRecord->storage_protection === 'No' ? 'X' : '' }}</th>
                   
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">4. Construction of Premises</th>
                      <th class="text-center">{{ $getRecord->construction_premises === 'No' ? 'X' : '' }}</th>
                    
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">5. Maintenance of Premises</th>
                      <th class="text-center">{{ $getRecord->maintenance_premises === 'No' ? 'X' : '' }}</th>
                    
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">6. Toilet Provision</th>
                      <th class="text-center">{{ $getRecord->toilet_provison === 'No' ? 'X' : '' }}</th>
                   
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">7. Hand washing facilities</th>
                      <th class="text-center">{{ $getRecord->hand_facilities === 'No' ? 'X' : '' }}</th>
                 
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">8. Water Supply</th>
                      <th class="text-center">{{ $getRecord->water_supply === 'No' ? 'X' : '' }}</th>
                     
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">9. Liquid Waste Management</th>
                      <th class="text-center">{{ $getRecord->liquid_waste === 'No' ? 'X' : '' }}</th>
                 
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">10. Wholesomeness of Food</th>
                      <th class="text-center">{{ $getRecord->wholesomeness_food === 'No' ? 'X' : '' }}</th>
                
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">11. Protection of Food</th>
                      <th class="text-center">{{ $getRecord->protection_food === 'No' ? 'X' : '' }}</th>
                  
                    </tr>
                    <tr>
                      <th style="font-size: 12px;"> 12. Vermin Control</th>
                      <th class="text-center">{{ $getRecord->vermin_control === 'No' ? 'X' : '' }}</th>
               
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">13. Cleanliness and Tidiness</th>
                      <th class="text-center">{{ $getRecord->cleanliness_tideness === 'No' ? 'X' : '' }}</th>
                  
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">14. Personal Cleanliness</th>
                      <th class="text-center">{{ $getRecord->personal_cleanliness === 'No' ? 'X' : '' }}</th>
                   
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">15. Housekeeping and Management</th>
                      <th class="text-center">{{ $getRecord->housekeeping_management === 'No' ? 'X' : '' }}</th>
                   
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">16. Conditions of Appliance & Utensils</th>
                      <th class="text-center">{{ $getRecord->condition_appliance === 'No' ? 'X' : '' }}</th>
                    
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">17. Cleanliness of Appliance & Utensils</th>
                      <th class="text-center">{{ $getRecord->cleanliness_appliance === 'No' ? 'X' : '' }}</th>
                     
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">18. Disease Control</th>
                      <th class="text-center">{{ $getRecord->disease_control === 'No' ? 'X' : '' }}</th>
                  
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">19. Disposal of Garbage</th>
                      <th class="text-center">{{ $getRecord->disposal_garbage === 'No' ? 'X' : '' }}</th>
                    
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">20. Miscellaneous Training (FHC)</th>
                      <th class="text-center">{{ $getRecord->misellaneous_training === 'No' ? 'X' : '' }}</th>
                 
                    </tr>
                    <tr>
                      <th style="font-size: 12px;">TOTAL DEMERITS: </th>
                      <th class="text-center"> {{ $totalDemerit  }} </th>
                    </tr>
                  </tbody>
                </table>
                
  
               
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <section class="content-header">
              <div class="container">

          
              <div class="row mb-2">
                <div class="col-sm-6">
                    <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-right: 70px;">PERCENTAGE RATING:<span id="percentageRating" class="text-decoration-underline">{{ $totalDemeritScore > 0 ? 100 - ($totalDemeritScore) : 100 }}%</span></h6>
                    <h6 class="text-right fw-bold" style="font-size: 10px; display: inline-block; padding-top:30px ">NOTE: Non-complying item are indicating with an (x).
                      <br> Every such item is weighed with a demerit of 5.
                      <br>The rating of the establishment is therefore <br> 100 (no. of demerit x 5) The result is expresser as a percentage (%).:</h6>
                </div>
            </div>
            
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block;">Received by:<span class="text-decoration-underline">__________</span></h6>
                  <h6 class="text-right fw-bold" style="font-size: 12px; display: inline-block; padding-left: 50px; padding-top: 70px; ">SANITATION STANDARD <br> EXCELLENT <br> VERY SATISFACTORY <br> SATISFACTORY</h6>
                  <h6 class="text-right fw-bold" style="font-size: 12px; display: inline-block;  padding-left: 50px; padding-top: 70px;">PERCENTAGE RATING <br> 90-100% <br> 70-80% <br> 50-60%</h6>
              </div>
          </div>

          <div class="row mb-2">
            <div class="col-sm-6">
                <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-right: 90px; padding-top:50px"> <span class="text-decoration-underline">________________________</span><br> Owner/Operator/Manager </h6>
                <h6 class="text-left fw-bold" style="font-size: 12px; display: inline-block; padding-left: 110px; padding-top:50px"><span class="text-decoration-underline">___________________</span><br> Sanitation Inspector </h6>
            </div>
        </div>



      
          
              </div><!-- /.container-fluid -->
          </section>
          
          
        <div class="col-sm-8 mt-1 ml-0"> 
        
          <h6 class="text-left fw-bold" style="font-size: 12px">Phone: (085) 816-3731 </h6>
          <h6 class="text-left fw-bold" style="font-size: 12px">Email: butuancityhealthtyahoo.com</h6>
          <h6 class="text-left fw-bold" style="font-size: 12px">OWebsite: <a href="http://www.butuan.gov.ph">http://www.butuan.gov.ph</a></h6>
      
      
        </div>
          </div>
        
        </div>
      
        </section> 
  </div>
  <!-- /.content-wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>