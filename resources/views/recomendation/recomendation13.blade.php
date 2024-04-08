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
            <h1 class="text-center fw-bold">SANITATION CODE RECOMMENDATION</h1>
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
            <div class="card-body border border-primary" style="overflow:auto; border-width: 2px; box-shadow: 0 0 10px blue;">
              <label class="switch float-right">
                <input id="languageSwitch" class="switch-input" type="checkbox" />
                <span class="switch-label" data-on="Tagalog" data-off="English"></span>
                <span class="switch-handle"></span>
            </label> 

            <div id="englishContent"> 

              
              <div>
                    <h2>Cleanliness and Tidiness</h2>
                    <h5>( <i>Section 18</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>(a) Food-service spaces shall not be used as living or sleeping quarters.
                      <br>
                      <br>
                      (b) Clothing or personal effects shall be kept in lockers or in designated places away from food service spaces.
                      <br>
                      <br>
                      (c) No animal or live fowls shall be allowed in such spaces.
                      <br>
                      <br>
                      (d) Persons not directly connected with food preparation and serving shall not be allowed to stay in food-serving spaces.
                      <br>
                      <br>
                      (e)Foods in storage or in preparation must not be handled by anyone other than the preparation and serving staff.</h5>
                </div>

            </div>

            <div id="tagalogContent" style="display: none;">

              
              <div>
                    <h2>Cleanliness and Tidiness</h2>
                    <h5>( <i>Section 18</i> )</h5>
                </div>
                <div class="mt-4">
                  <h5>(a) Ang mga espasyo para sa paglilingkod ng pagkain ay hindi dapat gamitin bilang tirahan o lugar ng pagtulog.
                    <br>
                    <br>
                    (b) Ang mga kasuotan o personal na gamit ay dapat itabi sa mga aparador o sa itinakdang lugar na malayo sa mga espasyo para sa paglilingkod ng pagkain.
                    <br>
                    <br>
                    (c) Wala dapat na hayop o mga buhay na manok na pinapayagan sa mga ganitong espasyo.
                    <br>
                    <br>
                    (d) Ang mga taong hindi direktang konektado sa paghahanda at paglilingkod ng pagkain ay hindi dapat pinapayagan na manatili sa mga espasyong para sa paglilingkod ng pagkain.
                    <br>
                    <br>
                    (e) Ang mga pagkain na naka-imbak o nasa proseso ng paghahanda ay hindi dapat hawakan ng sinuman maliban sa mga tauhan sa paghahanda at paglilingkod.
                </h5>
                </div>

            </div>


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

