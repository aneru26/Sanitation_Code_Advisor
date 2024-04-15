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

  
    <section class="content mt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="dropdown float-right">
              <button class="btn btn-primary dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Section Code
              </button>
              <div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="/recommendationform/1" >Sanitary Permit</a>
                <a class="dropdown-item" href="/recommendationform/2" >Health Certificate</a>
                <a class="dropdown-item" href="/recommendationform/3" >Storage Protection of flour & ingredients</a>
                <a class="dropdown-item" href="/recommendationform/4" >Construction of Premises</a>
                <a class="dropdown-item" href="/recommendationform/5" >Maintenance of Premise</a>
                <a class="dropdown-item" href="/recommendationform/6" >Toilet Provision</a>
                <a class="dropdown-item" href="/recommendationform/7" >Hand washing facilities</a>
                <a class="dropdown-item" href="/recommendationform/8" >Water Supply</a>
                <a class="dropdown-item" href="/recommendationform/9" >Liquid Waste Management</a>
                <a class="dropdown-item" href="/recommendationform/10" >Wholesomeness of Food</a>
                <a class="dropdown-item" href="/recommendationform/11" >Protection of Food</a>
                <a class="dropdown-item" href="/recommendationform/12" >Vermin Control</a>
                <a class="dropdown-item" href="/recommendationform/13" > Cleanliness and Tidiness</a>
                <a class="dropdown-item" href="/recommendationform/14" >Personal Cleanliness</a>
                <a class="dropdown-item" href="/recommendationform/15" >Housekeeping and Management</a>
                <a class="dropdown-item" href="/recommendationform/16" >Conditions of Appliance & Utensils</a>
                <a class="dropdown-item" href="/recommendationform/17" >Cleanliness of Appliance & Utensils</a>
                <a class="dropdown-item" href="/recommendationform/18" >Disease Control</a>
                <a class="dropdown-item" href="/recommendationform/19" >Disposal of Garbage</a>
                <a class="dropdown-item" href="/recommendationform/20" >Miscellaneous Training (FHC)</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                    <h2>Disposal of Garbage</h2>
                    <h5>( <i>Section 22. Disposal of Refuse</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                     <b>Disposal of Refuse</b> 
<br>
(a) Refuse cans may be used in food-preparation areas for immediate use only.
<br>
<br>
(b) Storage refuse cans, filled and empty, shall be in a designated space separate from food-handling operations.
<br>
<br>
(c) These cans shall be constructed and maintained as to be vermin-proof and easily cleaned.
<br>
<br>
(d) Cans containing refuse shall be tightly covered at all times, except during actual use in food-handling areas.
<br>
<br>
(e) Holding bins may likewise be used, provided they are constructed of impervious, readily-cleaned materials, and fitted with tight-fitting covers.
<br>
<br>
(f) Where refuse cans are used, a space separated from the food-handling spaces and adjacent to the refuse-can storage space shall be provided for cleaning them. This space shall be equipped with scrubbing-brushes, cleansing agents, steam or hot water under pressure, and a hose fitted with adjustable nozzle.
                    </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">
              
              <div>
                    <h2>Disposal of Garbage</h2>
                    <h5>( <i>Section 22. Disposal of Refuse</i> )</h5>
                </div>
                <div class="mt-4">
                    
<h5>
  <b>Pagtatapon ng Basura</b> 
  <br>
  (a) Maaaring gamitin ang mga lata ng basura sa mga lugar kung saan nagaganap ang paghahanda ng pagkain lamang para sa agaran paggamit.
  <br>
  <br>
  (b) Ang mga lata ng basura sa imbakan, kahit puno o walang laman, ay dapat nasa isang itinakdang lugar na hiwalay mula sa mga operasyon ng paghahanda ng pagkain.
  <br>
  <br>
  (c) Ang mga lata na ito ay dapat na gawing hindi madaling pasukin ng mga daga at madaling linisin.
  <br>
  <br>
  (d) Ang mga lata na may laman ng basura ay dapat na maigting na nakatakpan sa lahat ng oras, maliban sa panahon ng aktuwal na paggamit sa mga lugar kung saan inihahanda ang pagkain.
  <br>
  <br>
  (e) Maaari ring gamitin ang mga holding bin, as long as ang mga ito ay gawa sa hindi madaling pasukin, madaling linisin na mga materyal, at may maigting na takip.
  <br>
  <br>
  (f) Kung ang mga lata ng basura ay ginagamit, dapat magkaroon ng espasyo na hiwalay mula sa mga lugar kung saan inihahanda ang pagkain at katabi ng lugar para sa imbakan ng mga lata ng basura para sa paglilinis nila. Ang espasyong ito ay dapat mayroong mga brush para sa pag-scrub, mga panlinis, steam o mainit na tubig na may pressure, at isang hose na may adjustable nozzle.
</h5>
                </div>
            </div>


                    <div class="container">
                      <div class="row">
                          <div class="col">
                              <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                          </div>
                          <div class="col">
                              <a href="/recommendationform/20" class="btn btn-primary float-right">Next</a>
                          </div>
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

