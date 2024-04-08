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
                    <h2>Housekeeping and Management</h2>
                    <h5>( <i>Section 30</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                     <b>These operations should be in accordance with the following requirements</b> :
<br>
<br>
(a) Hand contacts with food or drink shall be avoided; fingers shall not be used to serve butter, ice, or similar items of food. Sugar shall be served in covered dispensers or containers, or in packages wrapped for single service.
<br>
<br>
(b) The surfaces of containers and utensils, including glasses and tablewares, which come in contact with food and drink shall not be handled.
<br>
<br>
(c) Disposable cups, plates, spoons and other single-service containers and utensils shall be purchased in sanitary cartons and stored in a clean, dry place until used. These articles shall be so handled on removal from the carton that the hand does not touch the surface which will be in contact with food or drink.
<br>
<br>
(d) Clean cloths, napkins, spoons, towels, and other cloth equipment shall be stored in clean places designated specifically for them. Soiled linens, including towels, aprons, and coats, shall be stored in a closed bin or locker, suitably marked.
<br>
<br>
(e) Spoons, spatulas, dippers and scopps used intermittently for dispensing frozen desserts shall be kept in running water or in water maintained at 170_F (77_C) and frequently changed, or they may be washed and stored in a dry place after each use. Constant-temperature bottles and other containers used for potable water and other beverages shall be kept clean and given effective bactericidal treatment before and after subsequent use.
                    </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">
             
              <div>
                    <h2>Housekeeping and Management</h2>
                    <h5>( <i>Section 30</i> )</h5>
                </div>
                <div class="mt-4">
              
<h5>
  <b>Ang mga operasyon na ito ay dapat na sumunod sa mga sumusunod na mga kinakailangan:</b> :
  <br>
  <br>
  (a) Dapat iwasan ang pag-contact ng mga kamay sa pagkain o inumin; hindi dapat gamitin ang mga daliri para magserve ng mantikilya, yelo, o katulad na mga item ng pagkain. Ang asukal ay dapat isilbi sa mga nakatampok na dispensers o lalagyan, o nasa mga pakete na nakabalot para sa solong paggamit.
  <br>
  <br>
  (b) Ang mga surface ng mga lalagyan at kagamitan, kabilang ang mga baso at kagamitang panghain, na may contact sa pagkain at inumin ay hindi dapat hawakan.
  <br>
  <br>
  (c) Ang mga disposable cups, plato, kutsara at iba pang mga single-service na mga lalagyan at kagamitan ay dapat binibili sa mga sanitary carton at itinatago sa malinis at tuyo na lugar hanggang sa gamitin. Ang mga artikulong ito ay dapat hawakan sa pagtanggal mula sa carton na hindi hahawakan ng kamay ang surface na magkakaroon ng contact sa pagkain o inumin.
  <br>
  <br>
  (d) Ang mga malilinis na tela, napkin, kutsara, tuwalya, at iba pang kagamitan na tela ay dapat itago sa mga malinis na lugar na espesyal na itinukoy para sa kanila. Ang maruruming linen, kabilang ang mga tuwalya, apron, at coats, ay dapat itago sa isang saradong lata o locker, na angkop na may tatak.
  <br>
  <br>
  (e) Ang mga kutsara, spatula, dippers, at mga scoop na ginagamit nang paminsan-minsan para sa pag-dispense ng mga frozen dessert ay dapat na itago sa umaagos na tubig o sa tubig na itinataguyod sa 170_F (77_C) at madalas na palitan, o maaari silang hugasan at itago sa isang tuyong lugar pagkatapos ng bawat paggamit. Ang mga lalagyan na may constant temperature at iba pang mga kagamitan na ginagamit para sa potable na tubig at iba pang mga inumin ay dapat panatilihin na malinis at bigyan ng epektibong bactericidal treatment bago at pagkatapos ng sunod-sunod na paggamit.
</h5>
                </div>
            </div>

                    <div class="container">
                      <div class="row">
                          <div class="col">
                              <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                          </div>
                          <div class="col">
                              <a href="/recommendationform/16" class="btn btn-primary float-right">Next</a>
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

