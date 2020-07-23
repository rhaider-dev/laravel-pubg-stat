@extends('layouts.app')

@section('title','Home')

@section('content')

<section class="section-header bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">{{setting('home.hero_title')}}</h1>
                <form action="{{route('player.search')}}" method="get">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" name="name" type="text" placeholder="Search by PUBG username" aria-label="Search">
                        <div class="input-group-append">
                          <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                              aria-hidden="true"></i></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg pt-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card bg-primary shadow-soft border-light p-4">
                    <div class="row">
                        @foreach ($features as $feature)
                            <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                                <div class="card-body text-center bg-primary py-5">
                                    <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3">
                                        <span class="{{$feature->fontawesome_icon}}"></span>
                                    </div>
                                    <!-- Heading -->
                                    <h2 class="h4 mr-2">
                                        {{$feature->title}}
                                    </h2>
                                    <!-- Text -->
                                    <p class="mb-0">{{$feature->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg bg-primary pt-0">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8 mb-5">
                <h2 class="font-weight-light">Frequently asked <span class="font-weight-bold">questions</span></h2>
                <p class="lead">Find the answer to your question.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!--Accordion-->
                <div class="accordion shadow-soft rounded" id="accordionExample1">
                    @foreach ($faqs as $faq)
                        <div class="card card-sm card-body bg-primary border-light mb-0">
                            <a href="#panel-{{$faq->id}}" data-target="#panel-{{$faq->id}}" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-{{$faq->id}}">
                                <span class="h6 mb-0 font-weight-bold">{{$faq->title}}</span>
                                <span class="icon"><span class="fas fa-plus"></span></span>
                            </a>
                            <div class="collapse" id="panel-{{$faq->id}}">
                                <div class="pt-3">
                                    <p class="mb-0">
                                        {{$faq->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--End of Accordion-->
            </div>
        </div>
    </div>
</section>
@endsection
