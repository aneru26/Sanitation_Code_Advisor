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
                    <h2>Hand washing facilities</h2>
                    <h5>( <i>Section 21.  ( Paragraph c - d )</i> )</h5>
                </div>
               
          
                <div class="mt-4">
                  <h5>(c) Adequate hand-washing facilities shall be provided within or adjacent to the toilet room.
                    <br>
                    <br>
                    (d) Facilities shall include hot and cold running water, single-service paper or cloth towel dispenser or drying device and soap or detergent.
                    
                    <br>
                    </h5>
              </div>
            </div>

            <div id="tagalogContent" style="display: none;">

              <div>
                    <h2>Hand washing facilities</h2>
                    <h5>( <i>Section 21.  ( Paragraph c - d )</i> )</h5>
                </div>
               
          
                <div class="mt-4">
                  <h5>(c) Dapat magkaroon ng sapat na pasilidad para sa paghuhugas ng kamay sa loob o katabi ng kuwarto ng banyo.
                      <br>
                      <br>
                      (d) Ang mga pasilidad ay dapat maglaman ng mainit at malamig na takbo ng tubig, dispenser ng papel o tela para sa pagpapadrying ng isang beses gamit, o kagamitan sa pagpapadrying at sabon o detergenteng panghugas.</h5>
              </div>
            </div>
          <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="btn btn-primary" onclick="window.history.back()">Prev</a>
                </div>
                <div class="col">
                    <a href="/recommendationform/8" class="btn btn-primary float-right">Next</a>
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

