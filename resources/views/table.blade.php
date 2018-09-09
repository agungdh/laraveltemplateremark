@extends('template')

@section('nav')
<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
<li class="breadcrumb-item active">DataTables</li>
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
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Salary</th>
          <th>Salary</th>
          <th>Salary</th>
          <th>Salary</th>
          <th>Salary</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Damon</td>
          <td>5516 Adolfo Green</td>
          <td>Littelhaven</td>
          <td>85</td>
          <td>2014/06/13</td>
          <td>$553,536</td>
          <td>$553,536</td>
          <td>$553,536</td>
          <td>$553,536</td>
          <td>$553,536</td>
          <td>$553,536</td>
          <td>$553,536</td>
        </tr>
        <tr>
          <td>Torrey</td>
          <td>1995 Richie Neck</td>
          <td>West Sedrickstad</td>
          <td>77</td>
          <td>2014/09/12</td>
          <td>$243,577</td>
          <td>$243,577</td>
          <td>$243,577</td>
          <td>$243,577</td>
          <td>$243,577</td>
          <td>$243,577</td>
          <td>$243,577</td>
        </tr>
        <tr>
          <td>Miracle</td>
          <td>176 Hirthe Squares</td>
          <td>Ryleetown</td>
          <td>82</td>
          <td>2013/09/27</td>
          <td>$784,802</td>
          <td>$784,802</td>
          <td>$784,802</td>
          <td>$784,802</td>
          <td>$784,802</td>
          <td>$784,802</td>
          <td>$784,802</td>
        </tr>
        <tr>
          <td>Wilhelmine</td>
          <td>44727 O&#x27;Hara Union</td>
          <td>Dibbertfurt</td>
          <td>68</td>
          <td>2013/06/28</td>
          <td>$207,291</td>
          <td>$207,291</td>
          <td>$207,291</td>
          <td>$207,291</td>
          <td>$207,291</td>
          <td>$207,291</td>
          <td>$207,291</td>
        </tr>
        <tr>
          <td>Hubert</td>
          <td>8884 Jamel Pines</td>
          <td>Howemouth</td>
          <td>63</td>
          <td>2013/05/28</td>
          <td>$584,032</td>
          <td>$584,032</td>
          <td>$584,032</td>
          <td>$584,032</td>
          <td>$584,032</td>
          <td>$584,032</td>
          <td>$584,032</td>
        </tr>
        <tr>
          <td>Monique_White</td>
          <td>415 Corkery Walks</td>
          <td>West Lauryn</td>
          <td>97</td>
          <td>2014/02/11</td>
          <td>$222,343</td>
          <td>$222,343</td>
          <td>$222,343</td>
          <td>$222,343</td>
          <td>$222,343</td>
          <td>$222,343</td>
          <td>$222,343</td>
        </tr>
        <tr>
          <td>Jarvis.Simonis</td>
          <td>0778 Elvis Spurs</td>
          <td>Harrisfurt</td>
          <td>62</td>
          <td>2013/05/28</td>
          <td>$336,046</td>
          <td>$336,046</td>
          <td>$336,046</td>
          <td>$336,046</td>
          <td>$336,046</td>
          <td>$336,046</td>
          <td>$336,046</td>
        </tr>
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