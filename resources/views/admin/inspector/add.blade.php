@extends('layouts.app')  

@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h1 class="text-center fw-bold">Add New Inspector</h1>
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
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" value="{{ old ('name') }}" name="name" required placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label >Last Name</label>
                    <input type="text" class="form-control" value="{{ old ('last_name') }}" name="last_name" required placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <label >Position</label>
                    <input type="text" class="form-control" value="{{ old ('position') }}" name="position" required placeholder="Position">
                  </div>
                 
                
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old ('email') }}" required placeholder="Email">
                    <div style="color:red" >{{ $errors->first('email')}}</div>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Password">
                    <div style="color:red" >{{ $errors->first('password')}}</div>
                  </div>

                  <div class="form-group">
                    <label >Pofile Pic <span style="color: red;">*</span> </label>
                    <input type="file" class="form-control" name="profile_pic">
                    <div style="color:red">{{ $errors->first('profile_pic') }}</div>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
             </div>
         
          </div>
          
        </div>
        
</div>
    </section>
  
  </div>


@endsection