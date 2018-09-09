@extends('template')

@section('nav')
@include('user.nav')
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
            {{-- <form autocomplete="off"> --}}
              {!! Form::open(['route' => 'user.store']) !!}
              <div class="form-row">
                @include('user.form')
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              {!! Form::close() !!}
            {{-- </form> --}}
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