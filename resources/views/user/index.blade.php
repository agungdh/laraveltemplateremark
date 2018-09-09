@extends('template')

@section('nav')
@include('user.nav')
@endsection

@section('content')
<div class="panel">
  <header class="panel-heading">
    <div class="panel-actions"></div>
    <h3 class="panel-title">Basic</h3>
  </header>
  <div class="panel-body">
    <table class="table table-hover dataTable table-striped w-full" id="datatable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Proses</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="{{ route('user.edit', $user->id) }}">Edit</a>
            {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
            <button type="submit">Hapus</button>
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
<link rel="stylesheet" href="{{ asset('assets') }}/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
@endsection

@section('js')
<script src="{{ asset('assets') }}/global/vendor/datatables.net/jquery.dataTables.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-buttons/buttons.print.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
<script src="{{ asset('assets') }}/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
<script src="{{ asset('assets') }}/global/vendor/asrange/jquery-asRange.min.js"></script>
<script src="{{ asset('assets') }}/global/vendor/bootbox/bootbox.js"></script>
<script src="{{ asset('assets') }}/global/js/Plugin/datatables.js"></script>
<script type="text/javascript">
	$(function() {
		$("#datatable").DataTable({
			responsive: false,
			"scrollX": true
		});
	});
</script>
@endsection