@extends('admin.main.master')

@section('titile','Departments')
@section('pagename','Departments')
@push('css')
@toastr_css
@endpush
@section('content')
<div class="text-left">
    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#adddepart">Add</a>
    <!-- Button trigger modal --> 
    <!-- Modal -->
    <div id="adddepart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 id="exampleModalLabel" class="modal-title">Add Department</h5>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action={{route('admin.department.store')}}>
                    @csrf
                    <div class="form-group">
                      <label>Department Name</label>
                      <input type="text" name="department_name" placeholder="Enter department name" class="form-control">
                    </div>
                    
                    <div class="form-group">       
                      <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
    
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>
</div>  
       {{-- @if(session()->has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Success!</strong> {{ session()->get('message') }}
            </div>
       @endif --}}
       <div class="table-responsive">
           <table class="table table-bordered" id="example">
               <thead>
                   <tr>
                       <td>No.</td>
                       <td>Department Name</td>
                       <td>No.of Doctors</td></td>
                       <td>Action</td>
                   </tr>
               </thead>
               <tbody>
                   @foreach($depart as $key => $dep)
                   <tr>
                       <td>{{ $key + 1 }}</td>
                       <td>{{ $dep->department_name }}</td>
                       <td>{{ $dep->doctors()->count() }}</td>
                       <td>
                         <a href="{{route('admin.department.edit',$dep->id)}}"><i class="fa fa-edit text-primary fa-md"></i></a>
                         <a href="#" onclick="myFunc()"><i class="fa fa-trash text-danger fa-md"></i></a>
                         <form action="{{ route('admin.department.destroy',$dep->id)}}" id="depart" method="POST">
                          @csrf
                          @method('DELETE')
                         </form>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
@endsection
@push('js')
@toastr_js
@toastr_render
<script>
    @if($errors->any())
          @foreach($errors->all() as $error)
           toastr.error('{{ $error }}','Error!');
          @endforeach
       @endif
$(document).ready(function() {
    $('#example').DataTable( {
    } );
} );
      function myFunc(){
        if(confirm('Are you sure you want to delete this department?')) {
          event.preventDefault();
          document.getElementById('depart').submit();
        }
      }
</script>
@endpush