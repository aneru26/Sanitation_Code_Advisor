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
                    <h2>Liquid Waste Management</h2>
                    <h5>( <i>Section 71.
                    </i> )</h5>
                </div>
                <div class="mt-4">
                    <h5> (a) Public sewerage system A system serving twenty-five persons or more.
                      <br>
                      <br>
                      (b) Septic tank A watertight receptacle which receives the discharge of a plumbing system or part thereof, and is designed to accomplish the partial removal and digestion of the suspended solid matter in the sewage through a period of detention. Its construction shall be in accordance with specifications prescribed in this Chapter.
                      <br>
                      <br>
                      (c) House sewer The pipeline conveying sewage from the house or building to the septic tank or to any point of discharge.
                      <br>
                      <br>
                      (d) Septic tank absorption bed or drain field An underground system of pipes leading from the outlet of the septic tank, consisting of open-jointed or perforated pipes so distributed that the effluent from a septic tank is oxidized and absorbed by the soil.
                      <br>
                      <br>
                      (e) Effective capacity of a septic tank The actual liquid capacity of a septic tank as contained below the liquid level line of the tank.
                      <br>
                      <br>
                      (f) Effective depth of a septic tank The actual liquid depth of a septic tank as measured from the inside bottom of the septic tank to the liquid level line.
                      <br>
                      <br>
                      (g) Freeboard or air space of a septic tank The distance as measured from the liquid level line to the inside top of the septic tank.
                      <br>
                      <br>
                      (h) Distribution box A small concrete receptacle between the septic tank and the drain field from which lines of drain tile extends and which acts as a surge tank to distribute the flow of sewage equally to each line of drain tile.
                      <br>
                      <br>
                      (i) Approved excreta disposal facilities shall mean any of the following:
                      <p class="pl-4">1. Flush toilets properly connected to a community sewer;</p>
                      <p class="pl-4"> 2. Flush toilets connected to a septic tank constructed in accordance with this Chapter;</p>
                      <p class="pl-4"> 3. Any approved type pit privy built in accordance with this Chapter; and</p>
                      <p class="pl-4">4. Any disposal device approved by the Secretary or his duly authorized representative.</p>
                     
                      <br>
                      <br>
                      (j) Privy A structure which is not connected to a sewerage system and is used for the reception, disposition and storage of feces or other excreta from the human body.
                      <br>
                      <br>
                      (k) Septic privy where the fecal matter is placed in a septic tank containing water and connected to a drain field but which is not served by a water supply under pressure.
                      <br>
                      <br>
                      (l) Box and can privy A privy where fecal matter is deposited in a can bucket which is removed for emptying and cleaning.
                      <br>
                      <br>
                      (m) Concrete vault privy A pity privy with the pit line with concrete in such a manner as to make it watertight.
                      <br>
                      <br>
                      (n) Chemical privy A privy where fecal matter is deposited into a tank containing a caustic chemical solution to prevent septic action while the organic matter is decomposed.
                      </h5>
                </div>
            </div> 

            <div id="tagalogContent" style="display: none;">

              <div >
                    <h2>Liquid Waste Management</h2>
                    <h5>( <i>Section 71.
                    </i> )</h5>
                </div>
                <div class="mt-4">
                  <h5> (a) Pampublikong sistema ng kanal Ang isang sistema na naglilingkod sa dalawampu't limang (25) katao o higit pa.
                    <br>
                    <br>
                    (b) Septic tank Isang tumpok na may panlabas na proteksiyon na tumatanggap ng paglabas ng isang sistema ng pagtutubig o bahagi nito, at ito ay dinisenyo upang gawing bahagya ang pagtanggal at pagtunaw ng suspensiyon ng solidong bagay sa kanal sa pamamagitan ng isang panahon ng pag-detensyon. Ang konstruksyon nito ay dapat na ayon sa mga tadhana sa kabanata na ito.
                    <br>
                    <br>
                    (c) Bahay kanal Ang linya ng pagtatapon na nagdadala ng kanal mula sa bahay o gusali patungo sa septic tank o sa anumang punto ng pagtatapon.
                    <br>
                    <br>
                    (d) Septic tank absorption bed o drain field Isang sistema ng mga tubo na nakabaon sa lupa na nangunguna mula sa labas ng septic tank, binubuo ng mga bukas na mga joint o perforated na mga tubo na isinasaayos na ang likido mula sa isang septic tank ay oxinadize at isinasabsorb ng lupa.
                    <br>
                    <br>
                    (e) Epektibong kapasidad ng septic tank Ang aktwal na kapasidad ng likido ng isang septic tank na matatagpuan sa ibaba ng linya ng likido ng septic tank.
                    <br>
                    <br>
                    (f) Epektibong lalim ng septic tank Ang aktwal na lalim ng likido ng isang septic tank na sinusukat mula sa loob na ibaba ng septic tank hanggang sa linya ng likido.
                    <br>
                    <br>
                    (g) Freeboard o espasyo ng hangin ng septic tank Ang distansya na sinusukat mula sa linya ng likido patungo sa loob na itaas ng septic tank.
                    <br>
                    <br>
                    (h) Distribution box Isang maliit na semento na tanggap sa pagitan ng septic tank at ng drain field kung saan ang mga linya ng drain tile ay nagtatayo at gumaganap bilang surge tank upang ipamahagi ang daloy ng kanal nang pantay-pantay sa bawat linya ng drain tile.
                    <br>
                    <br>
                    (i) Pinatibay na pasilidad ng pagtatapon ng dumi Ang anumang sumusunod:
                    <p class="pl-4">1. Mga flush toilet na wastong nakakonekta sa isang pampublikong kanal;</p>
                    <p class="pl-4">2. Mga flush toilet na nakakonekta sa isang septic tank na itinayo ayon sa kabanatang ito;</p>
                    <p class="pl-4">3. Anumang uri ng pit privy na naaprubahan na itinayo ayon sa kabanatang ito; at</p>
                    <p class="pl-4">4. Anumang aparato ng pagtatapon na naaprubahan ng Kalihim o kanyang duly authorized representative.</p>
                    <br>
                    <br>
                    (j) Banyo Ang isang istraktura na hindi nakakonekta sa sistema ng kanal at ginagamit para sa pagtanggap, pagtatapon, at pag-iimbak ng dumi o iba pang excreta mula sa katawan ng tao.
                    <br>
                    <br>
                    (k) Septic privy kung saan inilalagay ang dumi sa isang septic tank na naglalaman ng tubig at nakakonekta sa isang drain field ngunit hindi nai-serbisyo ng isang suplay ng tubig na may presyon.
                    <br>
                    <br>
                    (l) Box at lata ng banyo Ang isang banyo kung saan inilalagay ang dumi sa isang lata na lata na tinatanggal para sa paglilinis at paglilinis.
                    <br>
                    <br>
                    (m) Concrete vault privy Isang uri ng banyo na may lagayan na nakaline sa beton sa isang paraan na ginagawang waterproof ito.
                    <br>
                    <br>
                    (n) Chemical privy Isang banyo kung saan inilalagay ang dumi sa isang tangke na naglalaman ng isang kaustikong solusyon upang pigilan ang septic na aksyon habang ang organikong materyal ay nagpapatunaw.
                </h5>
                </div>
            </div> 

                      <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                            </div>
                            <div class="col">
                                <a href="/recommendationform/10" class="btn btn-primary float-right">Next</a>
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

