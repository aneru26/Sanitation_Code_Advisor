@extends('layouts.app')  

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h1 class="text-center fw-bold">Edit Applicant Registration Form</h1>
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
                    <input type="text" class="form-control" value="{{ $getRecord->name_of_establishment }}" name="name_of_establishment" required placeholder="Name of Establishment">
                    <div style="color:red">{{ $errors->first('name_of_establishment') }}</div>
                  </div>

                   
                <div class="form-group col-md-12">
                  <label >Located at: </label>
                  <input type="text" class="form-control" value="{{ $getRecord->address }}" name="address" required placeholder="Address">
                  <div style="color:red">{{ $errors->first('address') }}</div>
                </div>


                <div class="form-group col-md-12">
                  <label >Owned by: </label>
                  <input type="text" class="form-control" value="{{ $getRecord->owner_lastname }}" name="owner_lastname" required placeholder="Lastname">
                  <input type="text" class="form-control" value="{{ $getRecord->owner_firstname }}" name="owner_firstname" required placeholder="Firstname">
                  <div style="color:red">{{ $errors->first('owner_firstname') }}</div>
                </div>

        
                
                <div class="form-group col-md-12">
                  <label >Cellphone No.: </label>
                  <input type="text" class="form-control" value="{{ $getRecord->cp_number }}" name="cp_number" required placeholder="Cellphone Number">
                  <div style="color:red">{{ $errors->first('cp_number') }}</div>
                </div>
                  
                </div>

                <br>
                <h3>OCCUPANCY</h3>
                <div class="row">
                <div class="form-group col-md-12">
                    <label >No. of Personnel:</label>
                    <input type="text" class="form-control" value="{{ $getRecord->number_of_personel }}" name="number_of_personel" required placeholder="StartUp Name">
                    <div style="color:red">{{ $errors->first('number_of_personel') }}</div>
                  </div>
                  <div class="form-group col-md-">
                    <label >Establishment Classification:  </label>
                    <select class="form-control" required name="occupancy_classification" value="{{ old('occupancy_classification') }}" >
                        <option value="">Select Classification</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Buffet') ? 'selected' : ''}} value="Buffet">Buffet</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Fine Dining') ? 'selected' : ''}} value="Fine Dining">Fine Dining</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Fast Food') ? 'selected' : ''}} value="Fast Food">Fast Food</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Cafes') ? 'selected' : ''}} value="Cafes">Cafes</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Casual Dining') ? 'selected' : ''}} value="Casual Dining">Casual Dining</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Pub') ? 'selected' : ''}} value="Pub">Pub</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Restaurant') ? 'selected' : ''}} value="Restaurant">Restaurant</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Bistro') ? 'selected' : ''}} value="Bistro">Bistro</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Caterers') ? 'selected' : ''}} value="Caterers">Caterers</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Bakeries') ? 'selected' : ''}} value="Bakeries">Bakeries</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Banquet halls') ? 'selected' : ''}} value="Banquet halls">Banquet halls</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Cafeteria') ? 'selected' : ''}} value="Cafeteria">Cafeteria</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Self Services') ? 'selected' : ''}} value="Self Services">Self Services</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Food Trucks') ? 'selected' : ''}} value="Food Trucks">Food Trucks</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Pizzeria') ? 'selected' : ''}} value="Pizzeria">Pizzeria</option>
                        <option {{ (old('occupancy_classification', $getRecord->occupancy_classification) == 'Other') ? 'selected' : ''}} value="Other">Other</option>
                    </select>
                    <div style="color:red">{{ $errors->first('occupancy_classification') }}</div>
                  </div>

                </div>

               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button> 
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
