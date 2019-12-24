@extends('layouts.app')

@section('content')
<div class="section sm">

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="employee-detail-wrapper">

                    <div class="employee-detail-header text-center">
                        @foreach($details AS $detail)
                        <div class="image">
                            <img class="rounded-circle autofit2D" alt="image" src="/images/{{$detail->avatar}}">
                        </div>

                        <h2 class="heading mb-15">{{$detail->name}}</h2>

                        <p class="location"><i class="fa fa-map-marker"></i>{{$detail->country}},
                            {{$detail->city}}<span class="mh-5">|</span> <i class="fa fa-phone"></i>
                            {{$detail->phone}}, {{$detail->gender}}</p>
                        <p>Joined: {{$detail->created_at}}</p>


                        <ul class="meta-list clearfix">
                            <li>
                                <h4 class="heading">Hobbies:</h4>
                                {{$detail->hobbies}}

                            </li>

                            <li>
                                <h4 class="heading">Education:</h4>
                                <h6>Institution: {{$detail->institution}}</h6>
                                <h6>Field of Study: {{$detail->fieldOfStudy}}</h6>
                                <h6>Start Year: {{$detail->startYear}}</h6>
                                <h6>End Year: {{$detail->endYear}}</h6>

                            </li>
                            <li>
                                <h4 class="heading">Email: </h4>
                                {{$detail->email}}

                            </li>

                        </ul>
                        <div class="container">
                            <h4>More About: {{$detail->name}}</h4>
                            {{$detail->description}}
                        </div>
                        @endforeach



                        @endsection