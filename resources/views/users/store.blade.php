@extends('layouts.app')

@section('content')

<h1>Cadastrar usuario</h1>
<hr>

<form action ="{{route('user.store')}}" method="post">
    <!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
    {{csrf_field()}}
    <p>
        <label> Nome do usuário</label>
        <input type="text" name="name" value ="{{old('name')}}"><br>
        @if($errors->has('name'))
            @foreach($errors->get('name') as $n)
                {{$n}}
            @endforeach
        @endif

    </p>

    <p>
        <label> E-mail </label>
        <input type="email" name="email" value ="{{old('email')}}"><br>
        @if($errors->has('email'))
            @foreach($errors->get('email') as $n)
                {{$n}}
            @endforeach
        @endif
    </p>

    <label> Senha </label>
        <input type="password" name="password" value ="{{old('password')}}"><br>
        @if($errors->has('password'))
            @foreach($errors->get('password') as $n)
                {{$n}}
            @endforeach
        @endif
    </p>

    <label> Confirmar a senha </label>
        <input type="password" name="password_confirmation" value ="{{old('password_confirmation')}}"><br>
        @if($errors->has('password_confirmation'))
            @foreach($errors->get('password_confirmation') as $n)
                {{$n}}
            @endforeach
        @endif
    </p>

    <input type="submit" class="btn btn-success" value="cadastrar">

</form>
