@extends('front.base')


@section('content')
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        Blog
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-page">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-lg-4 mb-4">
                        @include('front.partials.items.blog-box')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
