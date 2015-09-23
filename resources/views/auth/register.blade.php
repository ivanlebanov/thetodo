<!-- resources/views/auth/register.blade.php -->
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
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

                <div class="two-inputs huge">
                    <input type="text" name="name" class="form-input-text inline-input border-input" placeholder="E-mail" value="{{ old('name') }}">
                    <input type="email" name="email" class="form-input-text inline-input border-input" placeholder="E-mail" value="{{ old('email') }}">
                </div>
                <div class="two-inputs huge">
                    <input type="password" name="password" id="password" class="form-input-text inline-input" placeholder="Password">
                    <input type="password" name="password_confirmation" class="form-input-text inline-input" placeholder="Repeat password">
                </div>
                 <button type="submit" class="form-button big">Register</button>
            </form>
    </div>
</section>