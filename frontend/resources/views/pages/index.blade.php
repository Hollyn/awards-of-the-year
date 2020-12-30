@extends('layouts.app')
@push('style')
    
@endpush


@section('content')
    <div class="container">
        <div class="user">
            <h6 class="user-name">user name</h6>
        </div>
        <div class="rule">
            <h2>Rules</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis suscipit voluptatum culpa obcaecati velit hic dignissimos repellat, quibusdam excepturi dolorum saepe amet nostrum dolore cupiditate fuga ratione sint rerum provident?
            </p>
        </div>
        <div class="category ">
            <div class="category-title row">
                <h4 class="title">category</h4>
            </div>
            <div class="container-candidate row">
                <div class="candidate text-center col-12 col-sm-6 col-md-4 col-lg-3 ">
                    <div class="candidate-img">
                        <img src="{{asset('assets/images/default-avatar.jpg')}}" alt="">
                    </div>
                    <div class="candidate-name">
                        <span>Candidate</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center submit-container">
            <button class="btn btn-success btn-md">Vote</button>
        </div>
    </div>
@endsection



@push('script')
    
@endpush