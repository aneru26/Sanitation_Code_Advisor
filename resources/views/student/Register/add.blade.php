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

        
                <div class="form-group col-md-12">
                  <label >Cellphone No.: </label>
                  <input type="text" class="form-control" value="{{ old ('cp_number') }}" name="cp_number" required placeholder="Cellphone Number">
                  <div style="color:red">{{ $errors->first('cp_number') }}</div>
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
                    <label >Establishment Classification:  </label>
                    <select class="form-control" required name="occupancy_classification" >
                        <option value="">Select Classification</option>
                        <option value="Buffet">Buffet</option>
                        <option value="Fine Dining">Fine Dining</option>
                        <option value="Fast Food">Fast Food</option>
                        <option value="Cafes">Cafes</option>
                        <option value="Casual Dining">Casual Dining</option>
                        <option value="Pub">Pub</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Bistro">Bistro</option>
                        <option value="Caterers">Caterers</option>
                        <option value="Bakeries">Bakeries</option>
                        <option value="Banquet halls">Banquet halls</option>
                        <option value="Cafeteria">Cafeteria</option>
                        <option value="Self Services">Self Services</option>
                        <option value="Food Trucks">Food Trucks</option>
                        <option value="Pizzeria">Pizzeria</option>
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
