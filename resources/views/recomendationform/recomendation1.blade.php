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
              <div >
                    <h2>Sanitary Permit</h2>
                </div>
                <div>
                  <h5> <i>(Section 14. Sanitary Permit)</i> 
                  </h5>
              </div>
                <div class="mt-4">
                    <h5>(a) No person or entity shall operate a food establishment for public patronage without securing a permit from the local health office. The term "food establishment" as used in this chapter means an establishment where food or drinks are manufactured, processed, stored, sold or served.</h5>
                </div>
                <div class="mt-4">
                    <h5>(b) Every Sanitary Permit shall be posted in a conspicuous place of the establishment.</h5>
                </div>
                <div class="mt-4">
                  <h5>(c) Fees The fees payable on application for permits and upon the issuances, renewal and noting of such certificates shall be in such amounts as the City of Municipal Authority may by resolution impose.</h5>
              </div>
              <div class="mt-4">
                <h5>(d) Noting of Permit Within 14 days after any change in the ownership or occupancy of any establishment, the new occupant shall apply to the City or Municipal Health Officer to have such change noted in the records and on the permit certificate which he shall produce for the purpose and shall pay the corresponding fee in respect of such noting.</h5>
            </div>
            <div class="mt-4">
              <h5>(e) Record of Permit Certificates
                <br>
                1. Every City or Municipality shall keep a record of all establishments in respect of which permits have been issued and of all permit certificates and renewals thereof.</h5>
          </div>
          <div class="mt-4">
            <h5>(f) The record shall in every case show the following:
              <br>
              i. The name and address of the holder of the permit who in every case shall be the actual occupier of the establishment;
              <br>
              ii. The location of the establishment;
              <br>
              iii. The purpose or purposes for which the permit has been issued;
              <br>
              iv. The date the first permit was issued and the dates of any renewal thereof;
              <br>
              v. Every change of occupation and management of the establishment since the first permit was issued; and
              <br>
              vi. Conditions under which the permit was issued or any renewal thereof granted.</h5>
        </div>

        <div class="mt-4">
          <h5>The record shall be available at all reasonable times for inspection by any officer of the Department of Health.</h5>
      </div>
    </div>
            <div id="tagalogContent" style="display: none;">
      <div>
        <h2>Sanitary Permit</h2>
    </div>
    <div>
        <h5> <i>(Seksyon 14. Sanitary Permit)</i> </h5>
    </div>
    <div class="mt-4">
        <h5>(a) Walang tao o entidad ang maaaring mag-operate ng isang establisyamento ng pagkain para sa publikong patronahe nang hindi nakakakuha ng permiso mula sa lokal na tanggapan ng kalusugan. Ang terminong "establisyamento ng pagkain" ay ginagamit sa kabanatang ito ay nangangahulugang isang establisyamento kung saan ang pagkain o inumin ay ginagawa, ini-process, iniimbak, ibinebenta o ini-serve.</h5>
    </div>
    <div class="mt-4">
        <h5>(b) Ang bawat Sanitary Permit ay dapat ipaskil sa isang maliwanag na lugar ng establisyamento.</h5>
    </div>
    <div class="mt-4">
        <h5>(c) Mga Bayarin Ang mga bayaring dapat bayaran sa aplikasyon para sa mga permiso at sa pag-iisyu, pagpaparehistro at pagsasabuhay ng gayong mga sertipiko ay dapat sa gayong halaga kung ano ang maaaring ipataw ng Lungsod o Pamahalaang Bayan sa pamamagitan ng resolusyon.</h5>
    </div>
    <div class="mt-4">
        <h5>(d) Pagsasabuhay ng Permit Sa loob ng 14 na araw pagkatapos ng anumang pagbabago sa pag-aari o occupancy ng anumang establisyamento, ang bagong occupant ay dapat mag-apply sa City o Municipal Health Officer upang magkaroon ng ganitong pagbabago na naka-note sa mga rekord at sa permit certificate na kanyang ipakikita para sa layunin at dapat magbayad ng karampatang bayad sa pagtingin sa gayong pagsasabuhay.</h5>
    </div>
    <div class="mt-4">
        <h5>(e) Talaan ng Mga Sertipiko ng Permit
            <br>
            1. Ang bawat Lungsod o Bayan ay dapat magtago ng talaan ng lahat ng mga establisyamento na may kinalaman sa mga permit na ipinagkaloob at ng lahat ng mga sertipiko ng permit at pagpaparehistro nito.</h5>
    </div>
    <div class="mt-4">
        <h5>(f) Ang talaan ay dapat sa bawat kaso ay nagpapakita ng mga sumusunod:
            <br>
            i. Ang pangalan at address ng may-ari ng permit na sa bawat kaso ay dapat ang tunay na occupier ng establisyamento;
            <br>
            ii. Ang lokasyon ng establisyamento;
            <br>
            iii. Ang layunin o mga layunin para saan ibinigay ang permit;
            <br>
            iv. Ang petsa kung kailan unang ibinigay ang permit at ang mga petsa ng anumang pagpaparehistro nito;
            <br>
            v. Bawat pagbabago ng pag-ooccupy at pamamahala ng establisyamento mula nang unang ibinigay ang permit;
            <br>
            vi. Mga kondisyon kung saan ibinigay ang permit o anumang pagpaparehistro nito.</h5>
    </div>
    <div class="mt-4">
        <h5>Ang talaan ay dapat na magagamit sa lahat ng mga makatwirang oras para sa pagsusuri ng alinmang opisyal ng Kagawaran ng Kalusugan.</h5>
    </div>
            </div>
      <div class="container">
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col">
                <a href="/recommendationform/2" class="btn btn-primary float-right">Next</a>
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

