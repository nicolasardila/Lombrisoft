@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="card-body">
                        @if(session('error'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Acceso Denegado',
                                text: "{{ session('error') }}",
                                confirmButtonText: 'Entendido'
                            });
                        </script>
                    @endif
                    </div>
                    Bienvenido Pasante
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
