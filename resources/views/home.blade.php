@extends('layouts.app')

@section('content')
<div class="main-wrapper">

    <div class="second-search-result">


        <div class="container">

            <form action="/search" method="GET" autocomplete="on">

                <div class="second-search-result">
                    <span class="labeling">Search </span>
                    <div class="row">

                        <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                            <div class="form-group form-lg">
                                <input class="form-control" type="search" name="city"
                                    placeholder="Enter your city or town">
                            </div>
                        </div>

                        <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                            <div class="form-group form-lg">
                                <input class="form-control" type="search" name="profession"
                                    placeholder="Enter Your Profession">
                            </div>
                        </div>

                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
                            <button name="search" value="✓" type="submit" class="btn btn-block">Search</button>
                        </div>

                    </div>
                </div>

            </form>

            <div class="section sm">

                <div class="container">

                    <div class="sorting-wrappper">

                        <div class="sorting-header">
                            <h3 class="sorting-title">Artisans</h3>
                        </div>
                    </div>

                    <div class="employee-grid-wrapper">

                        <div class="GridLex-gap-15-wrappper">

                            <div class="GridLex-grid-noGutter-equalHeight">

                                @foreach($userDetails AS $users)
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">

                                    <div class="employee-grid-item">

                                        <div class="action">

                                            <div class="row gap-10">

                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="text-left">
                                                        <button class="btn"><i class="icon-heart"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="text-right">
                                                        <a class="btn text-right" href="#"><i
                                                                class="icon-action-redo"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a target="_blank" title="{{$users->name}}" href="/userDetails/{{$users->uid}}"
                                            class="clearfix">
                                            <div class="image clearfix">
                                                <img class="rounded-circle autofit2" alt="image" width="150"
                                                    height="150" src="/images/{{$users->avatar}}">
                                            </div>
                                            <div class="content">
                                                <h5>
                                                    <!-- <star-rating v-model="rating"></star-rating> -->
                                                </h5>
                                                <h5>{{$users->name}}</h5>
                                                <h5>{{$users->profession}}</h5>
                                                <h6>{{$users->email}}</h6>
                                            </div>

                                        </a>

                                    </div>

                                </div>

                                @endforeach

                            </div>
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                @foreach($userDetails AS $users)
                                                <div class="col-lg-4 col-sm-6 col-md-6 col-xs-6">
                                                    <div class="card mt-3 shadow-sm rounded">
                                                        <div class="card-header">
                                                            <a target="_blank" title="{{$users->name}}"
                                                                style="color:black" href="/userDetails/{{$users->uid}}"
                                                                class="clearfix">
                                                                <p></p>
                                                                <div class="image clearfix">
                                                                    <img class="rounded-circle autofit2" alt="image"
                                                                        width="100" height="100"
                                                                        src="/images/{{$users->avatar}}">
                                                                </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="content">
                                                                <h5>{{$users->name}}</h5>
                                                                <h5>{{$users->profession}}</h5>
                                                                <h6>{{$users->email}}</h6>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>


                                        </div>

                                        <div class="col-md-3 col-xs-6">
                                            <div class="card mt-3 shadow-sm rounded">
                                                <div class="card-header">Events Category</div>
                                                <div class="card-body">Artisans is a place where you meet different
                                                    artisans all over the globe that can help get your job done in
                                                    know time, It also present you with the current events happing
                                                    in Benue state Nigerian</div>

                                            </div>
                                            <div class="card mt-3">
                                                <div class="card-header">Current Events</div>
                                                <div class="card-body">Artisans is a place where you meet different
                                                    artisans all over the globe that can help get your job done in
                                                    know time, It also present you with the current events happing
                                                    in Benue state Nigerian</div>

                                            </div>
                                        </div>
                                    </div>






                                </div>
                            </div>
                        </div>
                        </section>

                        @endsection