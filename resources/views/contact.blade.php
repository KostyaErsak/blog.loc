@extends('main')

@section ('title')
    <title>Contact</title>
@endsection

@section ('content')

<div id="gtco-maine">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12">
                <article class="mt-negative">
                    <div class="text-left content-article">
                        <div class="row">
                            <div class="col-lg-8 cp-r animate-box">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">


                                            <div class="panel-body">

                                                <h1>Напишите нам!</h1>


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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </article>
            </div>
        </div>
    </div>
</div>

@endsection