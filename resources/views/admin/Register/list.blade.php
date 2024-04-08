@extends('layouts.app')  

@section('content')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

   
    <section class="content-header bg-primary" >
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn-sm btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h4 class="text-center fw-bold">Subject for Inspection(Total : {{ $getRecord->total() }})</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
   

    <!-- Main content -->
    <section class="content mt-1">
      <div class="container-fluid">
  

          @include(' _message')

            
            <div class="card">
             
              <!-- /.card-header -->
              <div  class="card-body  table-responsive" style="overflow:auto; ">
              <table class="table responsive" id="myTable">
                  <thead>
                    <tr>
                  
                    
                      <th>Establishment List</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecord as $value)
                      <tr>
      
                        <td><a href="{{ url('admin/registration/view/'.$value->id) }}">{{ $value->id }}.{{ $value->name_of_establishment }}</a></td>
                      
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

