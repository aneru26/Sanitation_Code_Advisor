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
                    <h2>Miscellaneous Training (FHC)</h2>
                    <h5>( <i>Section 8. Miscellaneous Provisions
                    </i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                     <b>Miscellaneous Provisions</b> 
                     <br>
<br>
                      (a) International treaties, agreements and conventions The Republic of the Philippines recognizes international treaties, agreements and conventions on public health. Their provisions may be considered parts of this Code provided they do not contravene the Constitution, existing laws or any provision of this Code.
    <br>   
    <br>               
                      (b) Rights and proceedings Any proceeding which has commenced or any right which has accrued upon the effectivity of this Code shall not be affected by any of its provisions. However, matters of procedure and rights arising after the date of effectivity of this Code shall conform to the provisions hereof.
        <br>
        <br>              
                      (c) Delegation of power and assignment of duty Whenever a power is granted or a duty is assigned to any public health officer in this Code, the power may be exercised by a deputy or agent of the official pursuant to law, unless it is expressly provided otherwise in this Code.
            <br>  
            <br>        
                      (d) Language required Any notice, report, statement or record required or authorized by this Code, shall be written in English or Pilipino.
                <br> 
                <br>     
                      (e) Mailing of notices Unless otherwise expressly provided, any notice required to be sent to any person by any provision of this Code, shall be sent through the postal service. The affidavit of the official or employee who mailed the notice is prima facie evidence that the notice was sent as prescribed herein.
                    <br>
                    <br>  
                      (f) Condemnation and seizure of property When any property is officially condemned or seized by government authorities in the interest of public health, the owner thereof shall not be entitled to compensation.
                      <br>
                      <br>
                      (g) Command responsibility When a duty is expressly vested in a health officer as provided in this Code, it shall be understood that it shall likewise be the concern of the superiors of the health office under the principle of command responsibility.
                    </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">
              
              <div>
                    <h2>Miscellaneous Training (FHC)</h2>
                    <h5>( <i>Section 8. Miscellaneous Provisions
                    </i> )</h5>
                </div>
                <div class="mt-4">
                  <h5>
                    <b>Mga Diversong Mga Probisyon</b> 
                    <br>
                    <br>
                    (a) Internasyonal na mga kasunduan at kumbensyon Kinikilala ng Republika ng Pilipinas ang internasyonal na mga kasunduan at kumbensyon sa pampublikong kalusugan. Ang kanilang mga probisyon ay maaaring ituring na bahagi ng Kodigo na ito ngunit hindi dapat labag sa Saligang Batas, mga umiiral na batas, o anumang probisyon ng Kodigo na ito.
                    <br>  
                    <br>                
                    (b) Mga Karapatan at Proseso Anumang proseso na nagsimula o anumang karapatan na nakuha sa bisa ng Kodigo na ito ay hindi apektado ng anumang mga probisyon nito. Gayunpaman, ang mga bagay na may kinalaman sa proseso at mga karapatan na nabuo pagkatapos ng petsa ng bisa ng Kodigo na ito ay dapat sumunod sa mga probisyon nito.
                    <br>
                    <br>              
                    (c) Pagpapamahala ng kapangyarihan at pagtatalaga ng tungkulin Kapag ibinigay ang kapangyarihan o itinalaga ang isang tungkulin sa anumang opisyal ng kalusugan ng publiko sa ilalim ng Kodigo na ito, ang kapangyarihan ay maaaring gampanan ng isang deputy o ahente ng opisyal alinsunod sa batas, maliban na lamang kung ito ay malinaw na iba ang itinadhana ng Kodigo na ito.
                    <br>
                    <br>          
                    (d) Wika na Kinakailangan Anumang abiso, ulat, pahayag, o tala na kinakailangan o pinapayagan ng Kodigo na ito ay dapat isulat sa Ingles o sa Pilipino.
                    <br>
                    <br>      
                    (e) Pagpapadala ng mga Abiso Maliban na lamang kung itinadhana ng malinaw, ang anumang abiso na kinakailangang ipadala sa sinumang tao alinsunod sa anumang probisyon ng Kodigo na ito, ay dapat ipadala sa pamamagitan ng postal service. Ang salaysay ng opisyal o empleyado na nagpadala ng abiso ay malakas na ebidensya na ang abiso ay ipinadala alinsunod sa itinadhana rito.
                    <br>
                    <br>  
                    (f) Pagsapi at Pagkuha ng Ari-arian Kapag ang anumang ari-arian ay opisyal na isinapi o kinuha ng mga awtoridad ng pamahalaan sa interes ng pampublikong kalusugan, ang may-ari nito ay hindi karapat-dapat sa kompensasyon.
                    <br>
                    <br>
                    (g) Pananagutan sa Utos Kapag isang tungkulin ay espesyal na ipinagkatiwala sa isang opisyal ng kalusugan tulad ng itinadhana sa Kodigo na ito, dapat unawain na ito rin ay tungkol sa mga pinuno ng tanggapan ng kalusugan sa ilalim ng prinsipyong pananagutan sa utos.
                </h5>
                </div>
            </div>

                    <div class="container">
                      <div class="row">
                          <div class="col">
                              <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
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

