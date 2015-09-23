@extends('app')

@section('content')
<header>
    <div class="container">
        <div class="title">todo</div>
        <nav class="menu">
            <a href="../auth/register">Register</a>
        </nav>
    </div>
</header>
<section class="main full">
    <div class="container">
        <h1>Have we met before?</h1>
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div class="two-inputs">
                    <input type="email" name="email" class="form-input-text inline-input" placeholder="E-mail" value="{{ old('email') }}">
                    <input type="password" name="password" id="password" class="form-input-text inline-input" placeholder="Password">
                </div>
                 <button type="submit" class="form-button">Login</button>
            </form>
    </div>
</section>
