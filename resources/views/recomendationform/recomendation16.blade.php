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
                    <h2>Conditions of Appliance & Utensils</h2>
                    <h5>( <i>Section 23</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                      Equipment and Utensils
                      <br>
                      <br>

(a) They shall be so designed, fabricated and installed so that cleaning is easy and they do not pose health hazards.
<br>
<br>
(b) Lead-soldered containers and cadium-lined piping and fixtures shall not be used.
<br>
<br>
(c) Surfaces that come into contact with food or drinks shall be constructed of materials that are impervious, corrosion-resistant, non-toxic, easily cleanable, durable and resistant to chipping.
<br>
<br>
(d) Sliding doors on cabinets shall be easily cleanable and removable. Runners shall be allotted at the ends to permit removal of dust and debris. The bottom shelves of open-based fixtures shall be removable to facilitate inspection, cleaning and maintenance.
                    </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">
             

              <div>
                    <h2>Conditions of Appliance & Utensils</h2>
                    <h5>( <i>Section 23</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                      Kagamitan at Kagamitan
                      <br>
                      <br>
                 
                  (a) Dapat itong gawing disenyo, gawin, at i-install nang ganoon kadali ang paglilinis at hindi magdulot ng mga panganib sa kalusugan.
                  <br>
                  <br>
                  (b) Hindi dapat gamitin ang mga kagamitan na nakasolder na may lead at mga piping at fixture na may cadium lining.
                  <br>
                  <br>
                  (c) Ang mga surface na may contact sa pagkain o inumin ay dapat gawin sa mga materyales na hindi nagtutunaw, hindi nakakalasong, hindi nakakalason, madaling linisin, matibay at hindi madaling mabasag.
                  <br>
                  <br>
                  (d) Ang mga sliding door sa mga aparador ay dapat madaling linisin at tanggalin. Dapat maglaan ng mga runners sa mga dulo upang payagan ang pagtanggal ng alikabok at kalat. Ang mga ibabang shelves ng mga open-based fixture ay dapat tanggalin upang mapadali ang pagsusuri, paglilinis, at pag-aalaga.
                  </h5>
                </div>
            </div>


                <div class="mt-4">
              

                  <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                        </div>
                        <div class="col">
                            <a href="/recommendationform/17" class="btn btn-primary float-right">Next</a>
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

