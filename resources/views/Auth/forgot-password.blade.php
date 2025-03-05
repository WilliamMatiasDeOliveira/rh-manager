@extends('Layouts.guest.main_layout_guest')
@section('title', 'Recover password')

@section('content')

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-5">

                <!-- logo -->
                <div class="text-center mb-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="150px">
                </div>

                <!-- forgot password -->
                <div class="card p-3">

                    @if (!session('status'))

                        <p>Para recuperar a sua senha, por favor indique o seu email. Irá receber um email com um link para
                            recuperar a senha.</p>

                        <form action="{{ route('password.email') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('login') }}">Já sei a minha senha?</a>
                                <button type="submit" class="btn btn-primary px-4">Enviar email</button>
                            </div>

                        </form>
                    @else

                        <div class="text-center mb-3">
                            <p>Se você está cadastrado no sistema você ira receber um e-mail com um link para recuperação de senha</p>
                            <p class="mb-3">Por favor verifique sua caixa de e-mail</p>
                            <a href="{{route('login')}}" class="btn btn-sm btn-primary px-4">Voltar ao login</a>
                        </div>

                    @endif


                </div>

            </div>
        </div>
    </div>

@endsection
