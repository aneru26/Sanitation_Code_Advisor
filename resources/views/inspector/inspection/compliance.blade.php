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
            <h1 class="text-center fw-bold">Inspection Compliance(Total : {{ $getRecord->total() }})</h1>
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
              <div  class="card-body  table-responsive" style="overflow:auto; ">
              <table class="table responsive" id="myTable">
                  <thead>
                    <tr>
                  
                    
                      <th>Name of Establishment</th>
                      <th>Adress</th>
                      <th>Classification</th>
                      <th>Remarks</th>
                      <th>Command</th>
                      <th>Compliance</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecord as $value)
                      <tr>
      
                        <td>{{ $value->id }}.{{ $value->name_of_establishment }}</></td>
                        <td>{{ $value->address }}</></td>
                        <td>{{ $value->occupancy_classification }}</></td>
                        <td>{{ $value->occupancy_classification }}</></td>
                        <td><a
                          href="{{ url('inspector/inspection/result/'.$value->id) }}">Display</a></></td>
                          <td><a
                            href="{{ url('inspector/inspection/edit/'.$value->id) }}">Edit</a></></td>
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

