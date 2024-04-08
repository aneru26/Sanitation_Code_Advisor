@extends('layouts.app')  

@section('content')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content-header bg-primary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <button type="button" class="btn-sm btn-light" onclick="window.history.back()">Back</button> <!-- Back button -->
            <h4 class="text-center fw-bold">Inspector List(Total : {{ $getRecord->total() }})</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="text-align:right;">
            <a href="{{ url('admin/inspector/add')}}" class="btn btn-outline-primary btn-sm">Add New Inspector</a>
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
                <h3 class="card-title">Inspector List </h3>
              </div>
              <!-- /.card-header -->
              <div  class="card-body  table-responsive" style="overflow:auto; ">
              <table class="table table-striped" id="myTable">
                  <thead>
                    <tr>
                      <th >Profile Pic</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th >Created Date</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecord as $value)
                        <tr>

                            <td>
                                @if(!empty($value->getProfileDirect()))
                                    <img src="{{ $value->getProfileDirect() }}"
                                        style="height: 50px; width:50px; border-radius: 50px;">
                                @endif
                            </td>
                            <td>{{  $value->name }} {{  $value->last_name }}</td>
                            <td>{{  $value->email }}</td>
                            <td>{{  date('m-d-Y', strtotime($value->created_at)) }}</td>
                            <td style="min-width: 140px;">
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-primary btn-sm dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ url('admin/inspector/show/'.$value->id) }}">Show</a>
                                        <a class="dropdown-item"
                                            href="{{ url('admin/inspector/edit/'.$value->id) }}">Edit</a>
                                        <a class="dropdown-item"
                                            href="{{ url('admin/inspector/delete/'.$value->id) }}">Delete</a>
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

