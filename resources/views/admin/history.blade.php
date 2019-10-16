@extends('admin.main.master')

@section('titile','History')
@section('pagename','History')
@push('css')
@toastr_css
@endpush
@section('content')
       <div class="table-responsive">
           <table class="table table-bordered" id="example">
               <thead>
                   <tr>
                       <td>No.</td>
                       <td>Patient Name</td>
                       <td>Email</td>
                       <td>Phone</td>
                       <td>Department</td>
                       <td>Doctor</td>
                       <td>Booking Day</td>
                       <td>Booking Date</td>
                   </tr>
               </thead>
               <tbody>
                  @foreach ($history as $key => $a)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $a->history_patient_name }}</td>
                        <td>{{ $a->history_patient_email }}</td>
                        <td>{{ $a->history_appointment_phone }}</td>
                        <td>{{ $a->department->department_name }}</td>
                        <td>{{ $a->doctor->doctor_name }}</td>
                        <td>{{ $a->day->day_name }}</td>
                        <td>{{ $a->history_adate }}</td>
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
    $(document).ready(function() {
        $('#example').dataTable({

        });
    });
    @if($errors->any())
          @foreach($errors->all() as $error)
           toastr.error('{{ $error }}','Error!');
          @endforeach
       @endif
</script>
@endpush