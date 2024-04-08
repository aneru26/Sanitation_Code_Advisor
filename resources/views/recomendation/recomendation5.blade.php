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
                    <h2>Maintenance of Premises</h2>
                </div>
                <div>
                  <h5>( <i>Section 17.  Paragraph(2)
                  </i> )</h5>
              </div>
                <div class="mt-4">
                    <h5>Structural Requirements Food establishments shall be constructed in accordance with the following requirements:</h5>
                </div>
              <div class="mt-4">
                <h5> <b>2. No sanitary permit shall be issued for any premises to be used for the preparation, handling and sale of food unless it is constructed in accordance with the following requirements:</b>
                  <br>
                  <br>
                 <b>(a) FLOORS The Floors shall be</b> 
                  <br>
                  <p class="pl-4"> i. Constructed of concrete or other impervious and easily cleaned material that is resistant to wear and corrosion and shall be adequately graded and drained; all angles between the floors and walls shall be rounded off to a height of not less than 3 inches (7.62 cm.) from the floor; or</p>
                  <br>
                  <p class="pl-4"> ii. Constructed of wood with dovetailed or tongue and grooved floor boards laid on a firm foundation and tightly clamped together with all angles between the floor and walls rounded off to a height of 3 inches (7.62 cm.); or</p>
                 
                  <br>
                  <p class="pl-4">   iii. Constructed in accordance with the requirements of sub-clause (i) and (ii) of this clause and covered with linoleum, smooth surfaced rubber or similar material fixed to the floor with cement or suitable adhesive: Provided, That with the approval in writing of the local authority, floors may be covered with carpets or other floor covering in those parts of the premises where such carpets or coverings can be satisfactorily cleaned and maintained.</p>

                  <br>
                 <b>(b) WALLS</b> 
                  <br>
                  <p class="pl-4"> i. The internal surface of walls shall have a smooth, even, non-absorbent surface capable of being readily cleaned without damage to the surface and constructed of dust-proof materials;</p>
                  
                  <br>
                  <p class="pl-4">  ii. The walls, where subject to wetting or splashing, shall be constructed of impervious, non-absorbent materials to a height of not less than 79 inches (2 meters) from the floor;</p>
                  
              
                  <br>
                  <p class="pl-4">  iii. The internal walls shall be painted in light colors or treated with such other wall finish as the health authority may prescribe.</p>
                  
                  <br>
                  (c) CEILINGS
                  <br>
                  <p class="pl-4">   i. All ceilings or, if no ceiling is provided, the entire under-surface of the roof shall be dust-proof and washable.</p>
                 
                  <br>
                  <p class="pl-4">ii. The ceiling or undersurface of the roof of rooms in which food is prepared or packed or in which utensils or hands are washed shall be smooth, non-absorbent and light.</p>
                  
                  <br>
                  (d) LIGHTING
                  <br>
                  <p class="pl-4"> i. The general standards of illumination provided shall permit effective inspection and cleaning and shall be of sufficient intensity appropriate to the purpose for which any room or place is used;</p>
                 
                  <br>
                  <p class="pl-4">  ii. In rooms where food is prepared or packed or in which utensils or hands are washed there shall be a minimum illumination intensity of 20 foot-candles; in premises where food is consumed, there shall be a minimum illumination intensity of 5 foot-candles. Intensities of illumination shall be measured at a point 30 inches (76.20 cm.) above the floor;</p>
                 
                  <br>
                  <p class="pl-4">  iii. All lighting shall be reasonably free from glare and distributed so as to avoid shadows;</p>
                 
                 
                  <br>
                  <p class="pl-4"> iv. At other areas or working surfaces, the illumination shall be of such intensity as may be required by the health authority.</p>
                 
                  <br>
                  (e) VENTILATION
                  <br>
                  <p class="pl-4">  i. Ventilation shall be provided which shall be effective and suitable to maintain comfortable condition;</p>
                 
                  <br>
                   <p class="pl-4">ii. The ventilation shall be adequate to prevent the air from becoming excessively heated, prevent condensation and the formation of excess moisture on walls, ceilings and for the removal of objectionable odors, fumes and impurities;</p>
            
                  <br>
                  <p class="pl-4">iii. In the absence of effective natural ventilation, mechanical ventilation with airflow from a clean area, and discharging in such a manner as not to create a nuisance, shall be provided;</p>
            
                  
                  <br>
                  <p class="pl-4">iv. Canopies, air ducts, fans or other appliances shall be provided as required by the health authority in particular circumstances;</p>
                  <br>
                  <p class="pl-4">v. Effective provision shall be made for securing and maintaining a reasonable temperature;</p>
                  <br>
                  (f) OVERCROWDING
                  <br>
                  <p class="pl-4">There shall be sufficient floor space to enable every person working thereon to carry out his duties efficiently and to permit easy access for cleaning. Working spaces, aisles or passageways and areas to which customers have access shall be unobstructed and sufficient to permit movement of employees and customers without contamination of food by clothing or personal contact.</p>
                  <br>
                  (g) CHANGEROOMS
                  <br>
                  <p class="pl-4">1. There shall be provided adequate and suitable lockers or other facilities for the orderly storage of clothing and personal belongings of employees or persons engaged or employed in the premises. Such facilities shall be so situated and arranged so that there is no contamination of food by contact with clothing, and where the number of persons engaged or employed is four or more of either sex, there shall be provided separate changing rooms for each sex.</p>
                  <br>
                  (h) WASH-HAND BASINS
                  <br>
                 <p class="pl-4"> i. Wash-hand basins shall be installed in convenient places and as near as practicable to where the person for whose use they are provided are working while handling food for sale or in such locations as may be otherwise prescribed in any particular case.</p>
                  <br>
                 <p class="pl-4"> ii. If required in writing by the local health authority an additional wash-hand basin shall be installed as near as practicable to the toilet facilities: Provided, that the wash-hand basins specified in this Code need not be installed in premises where only food in sealed containers is sold: and, Provided, further, that wash-hand basins specified in this regulation shall be installed under specifications of the National Plumbing Code of the Philippines.</p>
                  <br>
                  (i) WASH-HAND BASIN MAINTENANCE
                  <br>
                  <p class="pl-4">i. An adequate supply of soap, clean towels, roller towels presenting a clean surface to each user from a continuous roller towel dispenser or other hand drying services approved by health authorities.</p>
                  <br>
                 <p class="pl-4"> ii. The wash-hand basin and all hand washing facilities shall, at all times, be maintained in good repair and in a clean condition.</p>
                  <br>
                  <p class="pl-4">iii. All wash-hand basins shall, at all times, while the premises are being used, be supplied with hot and cold or tempered running water at a minimum temperature of 100_F (37.8_C).</p>
                  <br>
                </h5>
            </div>
            </div>

            <div id="tagalogContent" style="display: none;">

              <div>
                <h2>Maintenance of Premises</h2>
                </div>
                <div>
                  <h5>( <i>Section 17.  Paragraph(2)
                  </i> )</h5>
              </div>
              <div class="mt-4">
                <h5>Mga Kinakailangang Panuntunan sa Estructura Ang mga establisyamento ng pagkain ay dapat itayo alinsunod sa mga sumusunod na kinakailangan:</h5>
            </div>
            <div class="mt-4">
                <h5><b>2. Walang sanitary permit na ibibigay para sa anumang pangkapaligiran na gagamitin para sa paghahanda, paghawak, at pagbebenta ng pagkain maliban kung ito ay itinayo alinsunod sa mga sumusunod na kinakailangan:</b>
                    <br>
                    <br>
                    <b>(a) SAHIG</b>
                    <br>
                    <p class="pl-4">i. Ang mga sahig ay dapat:</p>
                    <p class="pl-4">  i. Itayo mula sa konkreto o iba pang hindi nag-iimbak ng tubig at madaling linisin na materyal na matibay laban sa pagkasira at korosyon at dapat ay maayos na nakaangat at may tamang pagbabalak ng tubig; lahat ng anggulo sa pagitan ng sahig at pader ay dapat may hugis bilog na hindi bababa sa taas na 3 pulgada (7.62 cm.) mula sa sahig; o</p>
                    <br>
                    <p class="pl-4">  ii. Itayo mula sa kahoy na may mga dovetailed o tongue at groove na mga floor board na inilagay sa isang matibay na pundasyon at mahigpit na pinagsama-sama na may lahat ng anggulo sa pagitan ng sahig at pader ay hugis bilog na may taas na 3 pulgada (7.62 cm.); o</p>
                    <br>
                    <p class="pl-4">  iii. Itayo alinsunod sa mga kinakailangan ng sub-clause (i) at (ii) ng klausulang ito at takpan ng linoleum, makinis na goma, o katulad na materyal na nakakabit sa sahig gamit ang semento o angkop na adhesive: Sa ilalim ng pahintulot na nakasulat ng lokal na awtoridad, maaaring takpan ng mga alpombra o iba pang panlabas na takip ang mga sahig sa mga bahagi ng pangkapaligiran kung saan maayos na malilinis at mapanatili ang mga alpombra o takip.</p>
                    <br>
                    <b>(b) PADER</b>
                    <br>
                    <p class="pl-4">i. Ang internal na sukat ng mga pader ay dapat may makinis, pantay, hindi nag-aabsorb na sukat na kayang madaling linisin nang walang pinsala sa sukat at itayo mula sa mga materyal na hindi nag-iimbak ng alikabok;</p>
                    <br>
                    <p class="pl-4">ii. Ang mga pader, kung saan maaaring magbaha o mag-splashing, ay dapat itayo mula sa mga hindi nag-iimbak ng tubig na materyal hanggang sa taas na hindi bababa sa 79 pulgada (2 metro) mula sa sahig;</p>
                    <br>
                    <p class="pl-4">iii. Ang mga internal na pader ay dapat pinturahan ng mga kulay na magaan o tratuhin ng ibang pang finish ng pader tulad ng ipinapayo ng awtoridad sa kalusugan.</p>
                    <br>
                    (c) BUBONG
                    <br>
                    <p class="pl-4">i. Lahat ng bubong o, kung walang bubong, ang buong ibabaw ng ilalim ng bubong ay dapat hindi nag-aabsorb at kayang hugasan.</p>
                    <br>
                    <p class="pl-4">ii. Ang ibabaw ng bubong o sa mga silid kung saan inihahanda o inilalagay ang pagkain o sa mga silid kung saan hinuhugasan ang mga kagamitan o kamay ay dapat makinis, hindi nag-aabsorb, at magaan.</p>
                    <br>
                    (d) ILAW
                    <br>
                    <p class="pl-4">i. Ang pangkalahatang pamantayan ng pag-iilaw na ibinigay ay dapat nagpapahintulot ng epektibong pagsusuri at paglilinis at dapat may sapat na kalakasan na angkop sa layunin ng anumang silid o lugar na ginagamit;</p>
                    <br>
                    <p class="pl-4">ii. Sa mga silid kung saan inihahanda o inilalagay ang pagkain o sa mga silid kung saan hinuhugasan ang mga kagamitan o kamay, dapat may minimum na kalakasan ng pag-iilaw na 20 foot-candles; sa mga lugar kung saan kinakain ang pagkain, dapat may minimum na kalakasan ng pag-iilaw na 5 foot-candles. Ang intensidad ng pag-iilaw ay dapat sukatin sa isang punto na 30 pulgada (76.20 cm.) mula sa sahig;</p>
                    <br>
                    <p class="pl-4">iii. Ang lahat ng ilaw ay dapat medyo malaya mula sa silaw at ipamahagi nang ganap upang maiwasan ang mga anino;</p>
                    <br>
                    <p class="pl-4">iv. Sa ibang mga lugar o sa mga panggagawaing sukat, dapat ang kalakasan ng pag-iilaw ay gaya ng maaaring kinakailangan ng awtoridad sa kalusugan.</p>
                    <br>
                    (e) BENTILASYON
                    <br>
                    <p class="pl-4">i. Dapat magkaroon ng bentilasyon na epektibo at angkop upang mapanatili ang komportableng kalagayan;</p>
                    <br>
                    <p class="pl-4">ii. Ang bentilasyon ay dapat sapat upang maiwasan ang pag-init ng hangin, maiwasan ang kondensasyon at ang pagkakaroon ng labis na kahalumigmigan sa mga pader, bubong, at para sa pagtanggal ng nakapipinsalang amoy, usok, at dumi;</p>
                    <br>
                    <p class="pl-4">iii. Sa kawalan ng epektibong natural na bentilasyon, dapat magkaroon ng mekanikal na bentilasyon na may airflow mula sa isang malinis na lugar, at pag-discharge nang hindi nagiging sagabal;</p>
                    <br>
                    <p class="pl-4">iv. Ang mga kanya, air ducts, mga fan, o iba pang kagamitan ay dapat ibigay kung kinakailangan ng awtoridad sa kalusugan sa partikular na mga kalagayan;</p>
                    <br>
                    <p class="pl-4">v. Dapat magkaroon ng epektibong provision para sa pagpapanatili ng makatwirang temperatura;</p>
                    <br>
                    (f) SOBRANG DAMI NG TAO
                    <br>
                    <p class="pl-4">Dapat magkaroon ng sapat na espasyo sa sahig upang ang bawat taong gumagawa ay makapagbuo ng kanyang mga tungkulin nang maayos at para payagan ang madaling pag-access para sa paglilinis. Ang mga espasyo ng paggawa, aisle o mga daan at mga lugar na may access ang mga customer ay dapat hindi hadlangan at sapat para payagan ang paggalaw ng mga empleyado at customer nang hindi naapektuhan ang pagkain sa pamamagitan ng kasuotan o personal na kontaktong tao.</p>
                    <br>
                    (g) MGA KUWARTO NG PAGPALITAN NG DAMIT
                    <br>
                    <p class="pl-4">1. Dapat magkaroon ng mga sapat at angkop na lockers o iba pang pasilidad para sa maayos na pag-iimbak ng mga kasuotan at personal na gamit ng mga empleyado o mga taong sangkot o nagtatrabaho sa mga pangkapaligiran. Ang mga pasilidad na ito ay dapat na nakalagay at naayos nang hindi nagkakaroon ng kontaminasyon ng pagkain sa pamamagitan ng pakikipag-ugnayan sa kasuotan, at kung ang bilang ng mga taong sangkot o nagtatrabaho ay apat o higit pa ng parehong kasarian, dapat magkaroon ng mga hiwalay na kuwarto ng pagpalitan ng damit para sa bawat kasarian.</p>
                    <br>
                    (h) MGA LABABO
                    <br>
                    <p class="pl-4">i. Dapat magkaroon ng mga lababo sa mga pambihirang lugar at kung gaano man kalapit maaaring maabot sa lugar kung saan ang taong para sa kanilang gamit ay nagtatrabaho habang hinahawakan ang pagkain para sa pagbebenta o sa mga lokasyon na maaaring iba pa ang itinakda sa anumang partikular na kaso.</p>
                    <br>
                    <p class="pl-4">ii. Kung kinakailangan sa pagsusulat ng lokal na awtoridad sa kalusugan, dapat magkaroon ng karagdagang lababo na kung gaano man kalapit sa mga pasilidad ng banyo: Binibigyan ng Pahintulot na ang mga lababong itinakda sa Kodigo na ito ay hindi kinakailangang ikabit sa mga pangkapaligiran kung saan ang tanging pagkain na nasa mga saradong lalagyan lamang ang ibinebenta: at, Binibigyan pa, ang mga lababong itinakda sa regulasyong ito ay dapat ikabit sa ilalim ng mga tukoy ng Pambansang Kodigo ng Tubig sa Pilipinas.</p>
                    <br>
                    (i) PAGPAPANATILI NG MGA LABABO
                    <br>
                    <p class="pl-4">i. Dapat magkaroon ng sapat na suplay ng sabon, malinis na tuwalya, mga roller towel na nagpapakita ng malinis na surface sa bawat gumagamit mula sa isang patuloy na roller towel dispenser o iba pang mga serbisyo ng pagpapadali ng kamay na aprubado ng mga awtoridad sa kalusugan.</p>
                    <br>
                    <p class="pl-4">ii. Ang mga lababo at lahat ng pasilidad sa paghuhugas ng kamay ay dapat, sa lahat ng oras, ay panatilihin sa maayos na kundisyon at malinis na kalagayan.</p>
                    <br>
                    <p class="pl-4">iii. Ang lahat ng mga lababo ay, sa lahat ng oras habang ginagamit ang mga pangkapaligiran, ay dapat mayroong mainit at malamig o naayos na takbo ng tubig na may minimum na temperatura ng 100_F (37.8_C).</p>
                    <br>
                </h5>
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

