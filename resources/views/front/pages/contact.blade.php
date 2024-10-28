@extends('front.base')

@section('content')
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        Contact
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('front.partials.contact_section.contact-area')
                </div>
            </div>
        </div>
    </section>
@endsection
