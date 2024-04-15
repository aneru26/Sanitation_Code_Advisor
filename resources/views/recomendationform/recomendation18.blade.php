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
                    <h2>Disease Control</h2>
                    <h5>( <i>	Section 58 ( Paragraph b)</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5><b>(b) Correct Sanitary Practices. The following sanitary practices shall be observed.</b>
                      <br>
                      <br>
                      1. Working personnel shall wash their hands with soap and water before servicing customers.
                      <br>
                      <br>
                      2. They shall wear clean working garments.
                      <br>
                      <br>
                      3. They shall not smoke nor eat while working.
                      <br>
                      <br>
                      4. Implements of their trade shall be cleaned and disinfected before and after their use.
                      <br>
                      <br>
                      5. Customers shall be supplied with clean and fresh towels, drapes and other linen necessary.
                      <br>
                      <br>
                      6. Precautionary measures to prevent disease transmission shall be observed when serving customers showing any form of dermatoses.
                      </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">
  
              
              <div>
                    <h2>Disease Control</h2>
                    <h5>( <i>	Section 58 ( Paragraph b)</i> )</h5>
                </div>
                <div class="mt-4">
                  <h5><b>(b) Tamang mga Pamamaraan sa Sanitasyon. Dapat sundin ang mga sumusunod na pamantayang sanitasyon.</b>
                    <br>
                    <br>
                    1. Ang mga tauhan sa serbisyo ay dapat maghugas ng kanilang mga kamay gamit ang sabon at tubig bago maglingkod sa mga customer.
                    <br>
                    <br>
                    2. Dapat silang magsuot ng malinis na mga uniporme sa trabaho.
                    <br>
                    <br>
                    3. Hindi sila dapat manigarilyo o kumain habang nagtatrabaho.
                    <br>
                    <br>
                    4. Dapat linisin at disimpektahin ang mga kagamitan ng kanilang trabaho bago at pagkatapos gamitin.
                    <br>
                    <br>
                    5. Ang mga customer ay dapat bigyan ng malinis at bago na mga tuwalya, drapes, at iba pang tela na kinakailangan.
                    <br>
                    <br>
                    6. Dapat sundin ang mga hakbang na pampreoksiyon upang maiwasan ang pagkalat ng sakit kapag naglilingkod sa mga customer na nagpapakita ng anumang uri ng dermatoses.
                </h5>
                </div>
            </div>

                    <div class="container">
                      <div class="row">
                          <div class="col">
                              <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                          </div>
                          <div class="col">
                              <a href="/recommendationform/19" class="btn btn-primary float-right">Next</a>
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

