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
                    <h2>Vermin Control</h2>
                    <h5>(<i>Section 20.
                    </i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>Vermin A group of insects or small animals such as flies, mosquitoes, cockroaches, fleas, lice, bedbugs, mice, and rats which are vectors of diseases.
                      <br>
                      (a) Spaces where food and drinks are stored, prepared and served shall be so constructed and maintained as to exclude vermin.
                      <br>
                      <br>
                      (b) All opening which connects spaces to the outer air shall be effectively protected with screen of non-corrosive wire 16-mesh or finer. Door screens shall be tight-fitting.
                      <br>
                      <br>
                      (c) A vermin abatement program shall be maintained in the establishments by their owners, operators, or administrators. If they fail, neglect or refuse to maintain a vermin abatement programs, the local health agency will undertake the work at their expense.
                      <br>
                      <br>
                      (d) During deratting or disinfecting operations, all foodstuffs, utensils, food preparation and cleaning equipment shall be covered to protect them from toxic chemical substances.
                      <br>
                      <br>
                      (e) Vermin control in public places shall be the responsibility of the provincial, city or municipal governments which have jurisdiction over them.
                      <br>
                      <br>
                      (f) The procedure and frequency of vermin abatement program shall be determined and approved by the local health authority.</h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">

              <div>
                    <h2>Vermin Control</h2>
                    <h5>(<i>Section 20.
                    </i> )</h5>
                </div>
                <div class="mt-4">
                    
<h5>Mga Daga Isang grupo ng mga insekto o maliit na hayop tulad ng langaw, lamok, ipis, pulgas, kuto, bedbugs, daga, at mga alupihan na nagiging banta sa kalusugan.
  <br>
  (a) Ang mga espasyo kung saan iniimbak, inihahanda, at iniilagay ang pagkain at inumin ay dapat na gawing ganap at panatilihing malinis upang maiwasan ang mga daga.
  <br>
  <br>
  (b) Lahat ng mga pagbukas na nag-uugnay sa mga espasyo sa labas na hangin ay dapat na mahusay na protektado gamit ang screen ng hindi nagkakalasong alambre na may 16 mesh o mas maliit pa. Ang mga screen sa pinto ay dapat mahigpit na sumasakop.
  <br>
  <br>
  (c) Dapat panatilihin ng mga may-ari, operator, o tagapamahala ng mga establisyamento ang isang programa para sa pagsugpo ng mga daga. Kung sila ay magpapabaya, magpapalampas, o tatalikod sa pagsasaayos ng programa para sa pagsugpo ng mga daga, ang lokal na ahensya sa kalusugan ay gagawa ng gawain sa kanilang gastos.
  <br>
  <br>
  (d) Sa panahon ng operasyon para sa pagsugpo sa mga daga o pagdidisimpekta, dapat takpan ang lahat ng pagkain, kagamitan, kagamitan sa paghahanda ng pagkain, at kagamitan sa paglilinis upang protektahan ang mga ito mula sa nakalalasong kemikal.
  <br>
  <br>
  (e) Ang kontrol sa mga daga sa mga pampublikong lugar ay dapat na responsibilidad ng mga pamahalaang panlalawigan, lungsod, o munisipalidad na may hurisdiksyon sa kanila.
  <br>
  <br>
  (f) Ang paraan at kadalasang pagsasagawa ng programa para sa pagsugpo sa mga daga ay dapat tukuyin at aprubahan ng lokal na awtoridad sa kalusugan.
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

