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
                    <h2>Personal Cleanliness</h2>
                    <h5>( <i>Section 19</i> )</h5>
                </div>
                <div class="mt-4">
                    <h5>
                      (a) No person shall be employed in any food establishment without a health certificate issued by the local health authority.
                      <br>
                      <br>
(b) Food handlers shall at all times:
<br>
i. Wear clean working garments. The Cook shall wear prescribed caps and female employees caps or hairnets.
<br>
<br>
ii. Observe good personal hygiene.
<br>
<br>
iii. Wash their hands thoroughly with soap and water and dry them with a clean or disposable towel or a suitable hand-drying device immediately before working, or after visiting the toilet.
                    </h5>
                </div>
            </div>

            <div id="tagalogContent" style="display: none;">


              <div>
                    <h2>Personal Cleanliness</h2>
                    <h5>( <i>Section 19</i> )</h5>
                </div>
                <div class="mt-4">
                  <h5>
                    (a) Walang taong dapat empleyuhin sa anumang establisyamento ng pagkain nang walang sertipikadong kalusugan na inisyu ng lokal na otoridad sa kalusugan.
                    <br>
                    <br>
                    (b) Ang mga tagapaghanda ng pagkain ay dapat sa lahat ng oras:
                    <br>
                    i. Magsuot ng malinis na kasuotan sa paggawa. Ang Kusinero ay dapat magsuot ng itinakdang sumbrero at ang mga babaeng empleyado ng sumbrero o hairnets.
                    <br>
                    <br>
                    ii. Sundin ang mahusay na personal na kalinisan.
                    <br>
                    <br>
                    iii. Maghugas ng kanilang mga kamay nang mabuti gamit ang sabon at tubig at patuyuin ang mga ito gamit ang malinis o disposableng tuwalya o angkop na aparato para sa pagpapadalisay ng kamay kaagad bago magsimula ng trabaho, o pagkatapos bumisita sa banyo.
                </h5>
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

