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
            <h4 class="text-center fw-bold">My Register Establishment(Total : {{ $getRecord->total() }})</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>

          <div class="col-sm-6" style="text-align:right;">
            <a href="{{ url('customer/registration/add')}}" class="btn btn-outline-primary btn-sm">Register</a>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  

          @include(' _message')

            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Register Establishment </h3>
              </div>
              <!-- /.card-header -->
              <div  class="card-body  table-responsive" style="overflow:auto; ">
              <table class="table table-striped" id="myTable">
                  <thead>
                    <tr>
                  
                      <th >ID</th>
                      <th>Establishment</th>
                      <th>Address</th>
                      <th>L.Name</th>
                      <th >F.name</th>
                      <th >Cp No.</th>
                      <th >NO. of Personel</th>
                      <th >Occupancy</th>
                      <th >Crated By</th>
                      <th >Created Date</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecord as $value)
                      <tr>
                        <td>{{  $value->id }}</td>
                        <td>{{  $value->name_of_establishment }}</td>
                        <td>{{  $value->address }}</td>
                        <td>{{  $value->owner_lastname }}</td>
                        <td>{{  $value->owner_firstname }}</td>
                        <td>{{  $value->cp_number }}</td>
                        <td>{{  $value->number_of_personel}}</td>
                        <td>{{  $value->occupancy_classification}}</td>
                        <td>{{ $value->created_by_name }} {{ $value->created_by_last_name }}</td>
                        <td>{{ $value->created_at->diffforhumans() }}</td>
                        <td style="min-width: 140px;">
  <div class="btn-group">
    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Actions
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{ url('customer/registration/edit/'.$value->id) }}">Edit</a>
      <a class="dropdown-item" href="{{ url('customer/registration/delete/'.$value->id) }}">Delete</a>
    </div>
  </div>
</td>

                      </tr> 
                    @endforeach
            
                  </tbody>
                </table>
                <div style="padding: 10px; float:right;">
                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
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

