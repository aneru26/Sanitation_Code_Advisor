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
                    <h2>Storage Protection of Flour & Ingredients</h2>
                </div>
                <div>
                  <h5>(<i>Section 16. Quality and Protection of Food</i>)</h5>
              </div>
                <div class="mt-4">
                    <h5>Quality and Protection of Food All food must be obtained from sources approved by the local health authority. In this regard, the following requirements are applicable:</h5>
                </div>
                <div class="mt-4">
                  <h5>(a) Meats, meat products and fish shall be procured from sources under sanitary or veterinary supervision.
                    <br> 
                    <br> 
                    (b) All meat and fish shall be properly cooked before serving.
                    <br>
                    <br>
                    (c) No meat products, fish, vegetables and other food sources shall be procured from sources or areas known to have been affected by radioactivity as for example, areas contaminated with a very large amount of radioactive fallout.
                    <br>
                    <br>
                    (d) Milk and fluid milk products shall be obtained from sources approved by the local health authority. Milk obtained from other sources must be sterilized, pasteurized or otherwise heated.
                    <br>
                    <br>
                    (e) Milk shall be stored in a refrigerator. Canned or package milk, other than dry milk powders, shall be refrigerated after the container has been opened.
                    <br>
                    <br>
                    (f) All perishable and potentially hazardous foods shall be stored at 45_F (7_C) or below.</h5>
              </div>
              <div class="mt-4">
                <h5>Cooked food intended to be served hot shall be kept at a temperature not lower than 140_F (60_C).</h5>
            </div>
            <div class="mt-4">
              <h5>Raw fruits and vegetables shall be thoroughly washed before they are used.</h5>
          </div>
            </div>

            <div id="tagalogContent" style="display: none;">
              <div >
                    <h2>Storage Protection of Flour & Ingredients</h2>
                </div>
                <div>
                  <h5>(<i>Section 16. Quality and Protection of Food</i>)</h5>
              </div>
              <div class="mt-4">
                <h5>Kalidad at Pag-iingat sa Pagkain Lahat ng pagkain ay dapat mula sa mga pinayagan ng lokal na awtoridad sa kalusugan. Sa bagay na ito, ang mga sumusunod na pangangailangan ay maikakapit:</h5>
            </div>
            <div class="mt-4">
                <h5>(a) Ang karne, mga produktong karne, at isda ay dapat mula sa mga pinagkukunan na nasa ilalim ng pagsusuri ng sanitary o beterinaryo.
                    <br>
                    <br>
                    (b) Lahat ng karne at isda ay dapat nang maayos na nilutong mabuti bago isilbi.
                    <br>
                    <br>
                    (c) Walang mga produktong karne, isda, gulay, at iba pang pinagkukunan ng pagkain ang dapat mula sa mga pinagkukunang kilala na naapektuhan ng radiyoaktibidad tulad ng mga lugar na kontaminado ng napakalaking dami ng radioactive fallout.
                    <br>
                    <br>
                    (d) Ang gatas at mga produktong gatas na may likido ay dapat mula sa mga pinayagan ng lokal na awtoridad sa kalusugan. Ang gatas na mula sa iba pang pinagkukunan ay dapat sterilized, pasteurized, o kung paanuman ay ininit.
                    <br>
                    <br>
                    (e) Ang gatas ay dapat iimbak sa isang refrigerator. Ang mga lata o package ng gatas, maliban sa mga pulbos na gatas, ay dapat ilagay sa refrigerator pagkatapos buksan ang lalagyan.
                    <br>
                    <br>
                    (f) Lahat ng pagkain na perishable at may potensyal na mapanganib ay dapat iimbak sa 45_F (7_C) o mas mababa.</h5>
            </div>
            <div class="mt-4">
                <h5>Ang lutong pagkain na dapat isilbi ng mainit ay dapat mapanatili sa isang temperatura hindi bababa sa 140_F (60_C).</h5>
            </div>
            <div class="mt-4">
                <h5>Ang mga hilaw na prutas at gulay ay dapat na mabuting hugasan bago gamitin.</h5>
            </div>
            </div>
          <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                </div>
                <div class="col">
                    <a href="/recommendationform/4" class="btn btn-primary float-right">Next</a>
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

