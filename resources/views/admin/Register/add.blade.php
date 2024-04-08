@extends('layouts.app')  

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h1 class="text-center fw-bold">New Applicant Registration Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
           
            <div class="card card-primary">
              
             
              <form method="post" action="" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                
                <h3>SUBJECT</h3>
                
                <div class="row">
               
                <div class="form-group col-md-12">
                    <label >Inspection of: </label>
                    <input type="text" class="form-control" value="{{ old ('name_of_establishment') }}" name="name_of_establishment" required placeholder="Name of Establishment">
                    <div style="color:red">{{ $errors->first('name_of_establishment') }}</div>
                  </div>

                   
                <div class="form-group col-md-12">
                  <label >Located at: </label>
                  <input type="text" class="form-control" value="{{ old ('address') }}" name="address" required placeholder="Address">
                  <div style="color:red">{{ $errors->first('address') }}</div>
                </div>


                <div class="form-group col-md-12">
                  <label >Owned by: </label>
                  <input type="text" class="form-control" value="{{ old ('owner_lastname') }}" name="owner_lastname" required placeholder="Lastname">
                  <input type="text" class="form-control" value="{{ old ('owner_firstname') }}" name="owner_firstname" required placeholder="Firstname">
                  <div style="color:red">{{ $errors->first('owner_firstname') }}</div>
                </div>

        
                  
                </div>

                <br>
                <h3>OCCUPANCY</h3>
                <div class="row">
                <div class="form-group col-md-12">
                    <label >No. of Personnel:</label>
                    <input type="text" class="form-control" value="{{ old ('number_of_personel') }}" name="number_of_personel" required placeholder="StartUp Name">
                    <div style="color:red">{{ $errors->first('number_of_personel') }}</div>
                  </div>
                  <div class="form-group col-md-">
                    <label >Occupancy Classification:  </label>
                    <select class="form-control" required name="occupancy_classification" >
                        <option value="">Select Occupancy</option>
                        <option value="Work Plan">Group A: Residential Dwellings</option>
                        <option value="Progress Report">Group B: Residential, Hotels and Apartments</option>
                        <option value="Primer Profile">Group C: Education and Recreation</option>
                        <option value="Pitch Deck">Group D: Institutional</option>
                        <option value="Briefer">Group E: Business and Mercantile</option>
                        <option value="Flyers">Group F: Industrial</option>
                        <option value="Promotional Tar">Group G: Storage and Hazardous</option>
                        <option value="Promotional Tar">Group H: Assembly Other Than Group I</option>
                        <option value="Promotional Tar">Group I: Assembly Occupant Load 1000 or More (Cultural or Recreational)</option>
                        <option value="Other">Other</option>
                    </select>
                    <div style="color:red">{{ $errors->first('occupancy_classification') }}</div>
                  </div>

                </div>

               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Register</button> 
                </div>
                
                @include(' _message')
              </form>
             </div>
         
          </div>
          
        </div>
        
      </div>
    </section>
  
</div>

@endsection
