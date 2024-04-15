@extends('layouts.app')  

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h1 class="text-center fw-bold">Add Attachments</h1>
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
                
                <h3>Details</h3>
                
                <div class="row">
               
                <div class="form-group col-md-12">
                    <label >Attachment Name:</label>
                    <input type="text" class="form-control" value="{{ old ('certificate_name') }}" name="certificate_name" required placeholder="Name of Certificate">
                    <div style="color:red">{{ $errors->first('certificate_name') }}</div>
                  </div>

                   
                  <div class="form-group col-md-12">
                    <label >Attachment </label>
                    <input type="file" class="form-control" name="certificate">
                    <div style="color:red">{{ $errors->first('certificate') }}</div>
                   

      
                  </div>
                  
        
                  
                </div>

               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button> 
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
