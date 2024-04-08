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
                    <h2>Water Supply</h2>
                    <h5>( <i>Section 11.  Types of Water Examinations Required
                    </i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>The following examinations are required for water supply:
                      <br>
                      <p class="pf-4">
                        (a) Initial examination The physical, chemical and bacteriological examinations of water from newly constructed systems or sources are required before they are operated and opened for public use. Examination of water for possible radio-active contamination should also be done initially.
                      </p>
                      
                      <br>
                      <p class="pf-4">
                        (b) Periodic examination Water from existing sources is subject to bacteriological examination as often as possible but the interval shall not be longer than six months, while general systematic chemical examination shall be conducted every 12 months or often. Examination of water sources shall be conducted yearly for possible radioactive contamination
                      </p>
                      
                   
                      
                    </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">
              <div>
                    <h2>Water Supply</h2>
                    <h5>( <i>Section 11.  Types of Water Examinations Required
                    </i> )</h5>
                </div>
                <div class="mt-4">
                  <h5>Ang mga sumusunod na pagsusuri ay kinakailangan para sa suplay ng tubig:
                      <br>
                      <p class="pf-4">
                          (a) Pagsusuri sa Simula Ang pisikal, kemikal, at bakteriyolohikal na pagsusuri ng tubig mula sa mga bagong itinayong sistemang o pinagmulang pinagmulan ay kinakailangan bago ito operahan at buksan para sa pampublikong paggamit. Ang pagsusuri ng tubig para sa posibleng kontaminasyon ng radioaktibo ay dapat din na isagawa sa simula.
                      </p>
                      <br>
                      <p class="pf-4">
                          (b) Periodikong Pagsusuri Ang tubig mula sa mga umiiral na pinagmulan ay dapat sumailalim sa bakteriyolohikal na pagsusuri sa bawat pagkakataon na maaari ngunit ang panahon ay hindi dapat lumampas sa anim na buwan, habang ang pangkalahatang sistema ng kemikal na pagsusuri ay dapat isagawa kada 12 na buwan o kung mas madalas. Ang pagsusuri ng pinagmulan ng tubig ay dapat isagawa taun-taon para sa posibleng kontaminasyon ng radioaktibo.
                      </p>
                  </h5>
              </div>
            </div>

                <div class="mt-4">

                  <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                        </div>
                        <div class="col">
                            <a href="/recommendationform/9" class="btn btn-primary float-right">Next</a>
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

