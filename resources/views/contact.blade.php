@extends('main')

@section ('title')
    <title>Contact</title>
@endsection

@section ('content')

<div class="col-md-5 col-sm-offset-3">
    
    <br>
    <div class="">
		<h2>Напишите нам!</h2>
    </div>

	<p>
	Отправьте в данной форме ваши пожелания и мы обязательно рассмотрим их.
	</p>
        
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

	<form method="post" action="{{ route('contact') }}">
            {{ csrf_field() }}
	  <div class="form-group">
	    <label for="name">Ваше имя</label>
	    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Иванов Иван">
	  </div>
	  <div class="form-group">
	    <label for="email">Email адрес</label>
	    <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email адрес">
	  </div>
	  <div class="form-group">
	    <label for="site">Сайт</label>
	    <input type="text" class="form-control" id="site" value="{{ old('site') }}" name="site" placeholder="Сайт">
	  </div>
	  <div class="form-group">
	    <label for="text">Текст</label>
	    <textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Отправить</button>
	</form>
</div>

@endsection