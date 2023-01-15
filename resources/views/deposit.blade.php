@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Deposit_Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif    
                    <div class="d-grid gap-2 mt-2">
                        <a href="#" class="btn btn rounded w-25" style="color: white ;background-color:darkcyan" type="button">Deposite Now</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatibus consequuntur sunt labore, non mollitia ipsum saepe. Nihil, voluptatem.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <img src="/images/SanctumApi.jpg" class="img-fluid rounded w-50" style="" alt="">
    </div>
</div>
@endsection
