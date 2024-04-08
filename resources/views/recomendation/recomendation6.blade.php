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
                  <h2>Toilet Provision</h2>
                    <h5>( <i>Section 21.  ( Paragraph a - b )
                    </i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>(a) Adequate and clean toilet facilities for male and female customers and personnel shall be provided in properly located areas.
                      <br>
                      <br>
                      (b) Toilet rooms shall not open directly into spaces where food is prepared, stored or served. Where such toilets exist, the doors shall be tight fitting and self-closing.
                      <br>
                      </h5>
                </div>
            </div>  

            <div id="tagalogContent" style="display: none;">
              
              <div>
                  <h2>Toilet Provision</h2>
                    <h5>( <i>Section 21.  ( Paragraph a - b )
                    </i> )</h5>
                </div>
                <div class="mt-4">
                  <h5>(a) Dapat magkaroon ng sapat at malinis na pasilidad ng banyo para sa mga lalaki at babae na mga customer at tauhan sa tamang lugar.
                    <br>
                    <br>
                    (b) Ang mga kuwarto ng banyo ay hindi dapat magbukas nang direkta sa mga espasyo kung saan inihahanda, iniimbak, o ini-serve ang pagkain. Kung mayroong ganoong mga banyo, dapat ang mga pinto ay mahigpit na sumasara at nagko-klose nang sarili.</h5>
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

