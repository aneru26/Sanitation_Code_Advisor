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
                    <h2>Cleanliness of Appliance & Utensils</h2>
                    <h5>( <i>Section 24 and Section 25</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                      <b>Washing of Utensils</b>
<br>
(a) They shall be scraped and pre-rinsed to remove food articles.
<br>
<br>
(b) They shall be thoroughly cleansed in warm water at 120_F (49_C) with soap or detergent.
<br>
<br>
(c) If running water is not used, the wash-water shall be changed frequently.
<br>
<br>
<b>Section 25. Bactericidal Treatment</b>
<br>
Eating and drinking utensils and equipment, after thoroughly cleaned, shall be subjected to one of the following bactericidal treatments:
<br>
<br>
(a) Immersion for at least half a minute in clean hot water at a temperature of at least 170_F (77_C);
<br>
<br>
(b) Immersion for at least one minute in a lukewarm chlorine solution 50 ppm;
<br>
<br>
(c) Exposure in a steam cabinet at a temperature of at least 170_F (77_C) for at least 15 minutes at a temperature of 200_F (90_C) for at least 5 minutes;
<br>
<br>
(d) Exposure in an oven or hot-air cabinet at a temperature of at least 180_F (82_C) for at least 20 minutes; or
<br>
<br>
(e) Any other method approved by the local health authority.


                    </h5>
                
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">

              <div>
                    <h2>Cleanliness of Appliance & Utensils</h2>
                    <h5>( <i>Section 24 and Section 25</i> )</h5>
                </div>
                <div class="mt-4">
                   
<h5>
  <b>Paghuhugas ng mga Kagamitan</b>
  <br>
  (a) Dapat itong iscrap at prerinsed upang alisin ang mga tirang pagkain.
  <br>
  <br>
  (b) Dapat itong mabuti na linisin sa mainit na tubig sa 120_F (49_C) na may sabon o detergent.
  <br>
  <br>
  (c) Kung hindi ginagamit ang umaagos na tubig, ang tubig sa paghuhugas ay dapat palitan nang madalas.
  <br>
  <br>
  <b>Seksyon 25. Bactericidal Treatment</b>
  <br>
  Ang mga gamit na pangkain at panginom, pagkatapos na mabuti na linisin, ay dapat sumailalim sa isa sa mga sumusunod na bactericidal treatments:
  <br>
  <br>
  (a) Pagbababad ng hindi bababa sa kalahating minuto sa malinis na mainit na tubig sa isang temperatura na hindi bababa sa 170_F (77_C);
  <br>
  <br>
  (b) Pagbababad ng hindi bababa sa isang minuto sa isang lukewarm na chlorine solution na may 50 ppm;
  <br>
  <br>
  (c) Paglantad sa isang steam cabinet sa isang temperatura na hindi bababa sa 170_F (77_C) nang hindi bababa sa 15 minuto sa isang temperatura na 200_F (90_C) nang hindi bababa sa 5 minuto;
  <br>
  <br>
  (d) Paglantad sa isang oven o hot-air cabinet sa isang temperatura na hindi bababa sa 180_F (82_C) nang hindi bababa sa 20 minuto; o
  <br>
  <br>
  (e) Anumang iba pang pamamaraan na aprubado ng lokal na otoridad sa kalusugan.
</h5>
                
                </div>
            </div>


                  <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                        </div>
                        <div class="col">
                            <a href="/recommendationform/18" class="btn btn-primary float-right">Next</a>
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

