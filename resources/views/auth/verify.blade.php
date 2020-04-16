@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите адрес электронной почты') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ссылка с подтвреждением была отправлена на вашу почту') }}
                        </div>
                    @endif

                    {{ __('Перед продолжением, проверьте почту на наличие ссылки с подтверждением') }}
                    {{ __('Если вы не получили ссылку') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы получить другое') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
