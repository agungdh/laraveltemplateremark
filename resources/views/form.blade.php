@extends('layouts.template')

@section('nav')
<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
<li class="breadcrumb-item active">DataTables</li>
@endsection

@section('content')
<div class="panel">
  <header class="panel-heading">
    <h3 class="panel-title">
      Horizontal Form
    </h3>
  </header>
  <div class="panel-body container-fluid">

    <div class="row row-lg">

    	<!-- Example Basic Form (Form row) -->
        <div class="col-lg">
          <div class="example">
            <form autocomplete="off">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label class="form-control-label" for="inputBasicFirstName">First Name</label>
                  <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                    placeholder="First Name" autocomplete="off" />
                </div>
                <div class="form-group col-md-12">
                  <label class="form-control-label" for="inputBasicLastName">Last Name</label>
                  <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
                    placeholder="Last Name" autocomplete="off" />
                </div>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Example Basic Form (Form row) -->

    </div>
  </div>
</div>
@endsection

@section('css')
@endsection

@section('js')
@endsection