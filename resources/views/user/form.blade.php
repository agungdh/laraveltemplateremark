<div class="form-group col-md-12">
  <label class="form-control-label" for="inputBasicFirstName">Nama</label>
  	@php
	$class = $errors->has('name') ? 'form-control is-invalid' : 'form-control';
	$message = $errors->has('name') ? '<div class="invalid-feedback">' . $errors->first('name') . '</div>' : '';
  	@endphp
    {!! Form::text('name',null,['class'=> $class,'placeholder'=>'Nama']) !!}
    {!! $message !!}
</div>
<div class="form-group col-md-12">
  <label class="form-control-label" for="inputBasicFirstName">Email</label>
  	@php
	$class = $errors->has('email') ? 'form-control is-invalid' : 'form-control';
	$message = $errors->has('email') ? '<div class="invalid-feedback">' . $errors->first('email') . '</div>' : '';
  	@endphp
    {!! Form::email('email',null,['class'=>$class,'placeholder'=>'Email']) !!}
    {!! $message !!}
</div>
<div class="form-group col-md-12">
  <label class="form-control-label" for="inputBasicLastName">Password</label>
  	@php
	$class = $errors->has('password') ? 'form-control is-invalid' : 'form-control';
	$message = $errors->has('password') ? '<div class="invalid-feedback">' . $errors->first('password') . '</div>' : '';
  	@endphp
    {!! Form::password('password',['class'=>$class,'placeholder'=>'Password']) !!}
    {!! $message !!}
</div>
<div class="form-group col-md-12">
  <label class="form-control-label" for="inputBasicLastName">Ulangi Password</label>
  	@php
	$class = $errors->has('password_confirmation') ? 'form-control is-invalid' : 'form-control';
	$message = $errors->has('password_confirmation') ? '<div class="invalid-feedback">' . $errors->first('password_confirmation') . '</div>' : '';
  	@endphp
    {!! Form::password('password_confirmation',['class'=>$class,'placeholder'=>'Ulangi Password']) !!}
    {!! $message !!}
</div>