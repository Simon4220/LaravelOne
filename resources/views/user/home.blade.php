@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
        
            <div class="col-sm-12">
                <ul class="list-group">
                    @include('layouts.nav', ['pages' => $pages])
                </ul>
            </div>
    
        </div>

        
    </div>
@endsection
