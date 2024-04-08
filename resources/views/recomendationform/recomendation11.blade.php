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
                    <h2>Protection of Food</h2>
                    <h5>( <i>Section 28. and Section 29</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                      <b>Section 28.Dry Storage of Non-Perishable Foods</b>
                      <br>
                      <br>
Non-perishable foods shall be stored in the following manner:
<br>
(a) Designated spaces, lockers, cupboards, racks, shelves and containers shall be used for storage.
<br>
(b) All spaces, lockers and cupboard shall be constructed of materials of the same quality as used for food-preparation and food-serving operations. Containers shall be made of metal fitted with tight covers.
<br>
(c) The recommended temperature range for dry stores is 50-60_C (10-15_C) except where dry foods for immediate use are stored in the preparation and servicing spaces.
<br>
<br>
<b>Section 29. Refrigerated Storage of Perishable FoodsS</b>
<br>
<br>
Perishable foods shall be stored in the following manner:
<br>
(a) They shall be kept at or below 45_F (7_C) except during preparation or when held for immediate serving after preparation.
<br>
(b) When such foods are to be stored for extended periods, a temperature of 40_F (40_C) is recommended.
<br>
(c) Fruits and vegetables shall be stored in cool rooms.
<br>
(d) Recommended temperatures for perishable food storage are:
<br>
1. Frozen foods; not more than 10_F (2_C)
<br>
2. Meat and fish: 32-38_F (0-3_C)
<br>
3. Milk and milk products: 40-45_F (5-7_C)
<br>
4. Fruits and vegetables: 44-50_F (7-10_C)
<br>
(e) All refrigerating compartments and refrigerators must be kept clean, in good repair and free from odours. They shall be provided with thermometers with scale divisions not larger than 2_F (1_C). Sufficient shelving shall be provided to prevent stocking and to permit adequate ventilation and cleaning.
                    </h5>
                </div>
            </div>


            <div id="tagalogContent" style="display: none;">

              <div>
                    <h2>Protection of Food</h2>
                    <h5>( <i>Section 28. and Section 29</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                      <b>Section 28.Dry Storage of Non-Perishable Foods</b>
                      <br>
                      <br>
                      Ang hindi madaling masirang pagkain ay dapat itabi sa mga sumusunod na paraan:
                      <br>
                      (a) Ang mga espasyo, lockers, aparador, rak, estante, at mga lalagyan ay dapat gamitin para sa imbakan.
                      <br>
                      (b) Lahat ng mga espasyo, lockers, at aparador ay dapat gawa sa mga materyales na parehong kalidad ng ginagamit para sa paghahanda at paglilingkod ng pagkain. Ang mga lalagyan ay dapat gawa sa metal na may mahigpit na takip.
                      <br>
                      (c) Ang ini-rekomendang saklaw ng temperatura para sa tuyong imbakan ay 50-60_C (10-15_C) maliban sa mga kaso kung saan ang mga tuyong pagkain para sa agarang paggamit ay iniimbak sa mga espasyong ginagamit para sa paghahanda at paglilingkod.
<br>
<br>
<b>Section 29. Refrigerated Storage of Perishable FoodsS</b>
<br>
<br>
Ang madaling masirang pagkain ay dapat itabi sa mga sumusunod na paraan:
<br>
(a) Dapat itabi ang mga ito sa o mas mababa sa 45_F (7_C) maliban sa panahon ng paghahanda o kapag inihanda na para sa agarang paglilingkod.
<br>
(b) Kapag ang mga pagkain na ito ay itatabi para sa mahabang panahon, ang temperatura na 40_F (40_C) ay ini-rekomenda.
<br>
(c) Ang mga prutas at gulay ay dapat itabi sa mga kuwartong malamig.
<br>
(d) Ang ini-rekomendang temperatura para sa imbakan ng madaling masirang pagkain ay:
<br>
1. Frozen foods: hindi hihigit sa 10_F (2_C)
<br>
2. Karne at isda: 32-38_F (0-3_C)
<br>
3. Gatas at mga produkto ng gatas: 40-45_F (5-7_C)
<br>
4. Prutas at gulay: 44-50_F (7-10_C)
<br>
(e) Ang lahat ng mga compartment at ref na nagrerefrigerate ay dapat panatilihing malinis, nasa mabuting kondisyon, at walang amoy. Dapat silang magkaroon ng mga thermometers na may markang hindi lalampas sa 2_F (1_C). Dapat magkaroon ng sapat na mga estante upang maiwasan ang pagkakatumpok at para magbigay ng sapat na bentilasyon at paglilinis.
                    </h5>
                </div>
            </div>

                    <div class="container">
                      <div class="row">
                          <div class="col">
                              <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                          </div>
                          <div class="col">
                              <a href="/recommendationform/12" class="btn btn-primary float-right">Next</a>
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

