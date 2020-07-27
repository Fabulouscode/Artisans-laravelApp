@extends('layouts.app')

@section('content')

<div class="section sm">

    <div class="container">
        <!-- <div class="col-sm-3 col-md-2 mb-5">
            <a href="event/create" class="btn btn-primary">Add
                Event</a>
        </div> -->
        <?php  $user = Auth::user(); ?>
        @if($user->role == 'organ')
        <div class="col-sm-3 col-md-2 mb-5">
            <a href="event/create" class="btn btn-primary">Add
                Event</a>
        </div>
        @endif
        @if($user->role == 'Admin')
        <div class="col-sm-3 col-md-2 mb-5">
            <a href="event/create" class="btn btn-primary">Add
                Organization</a>
        </div>
        @endif
        <div class="sorting-wrappper">

            <div class="sorting-header">
                <h3 class="sorting-title">Current Events List</h3>
            </div>


        </div>

        <div class="result-wrapper">

            <div class="row">

                <div class="col-sm-12 col-md-12 mt-25">

                    <div class="result-list-wrapper">

                        <div class="job-item-list">

                            <div class="image">
                                <center><img class="autofit3" alt="image" src="images/fab.jpg" /></center>
                            </div>

                            <div class="content">
                                <div class="job-item-list-info">

                                    <div class="row">

                                        <div class="col-sm-7 col-md-8">

                                            <h4 class="heading">Theme</h4>
                                            <div class="meta-div clearfix mb-25">
                                                <span>Organization name</span>

                                            </div>

                                            <p class="texing character_limit">Description</p>
                                        </div>

                                        <div class="col-sm-5 col-md-4">
                                            <ul class="meta-list">
                                                <li>
                                                    <span>Country:</span>

                                                </li>
                                                <li>
                                                    <span>City:</span>

                                                </li>
                                                <li>
                                                    <span>Address:</span>

                                                </li>
                                                <li>
                                                    <span>Date: </span>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="job-item-list-bottom">

                                    <div class="row">

                                        <div class="col-sm-7 col-md-8">
                                            <div class="sub-category">
                                                <a>Religion</a>

                                            </div>
                                        </div>

                                        <div class="col-sm-5 col-md-4">
                                            <a target="_blank" href="exploreEvent.php" class="btn btn-primary">View This
                                                Event</a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="result-wrapper">

                        <div class="row">

                            <div class="col-sm-12 col-md-12 mt-25">

                                <div class="result-list-wrapper">

                                    <div class="job-item-list">

                                        <div class="image">
                                            <center><img class="autofit3" alt="image" src="images/fab.jpg" /></center>
                                        </div>

                                        <div class="content">
                                            <div class="job-item-list-info">

                                                <div class="row">

                                                    <div class="col-sm-7 col-md-8">

                                                        <h4 class="heading">Theme</h4>
                                                        <div class="meta-div clearfix mb-25">
                                                            <span>Organization name</span>

                                                        </div>

                                                        <p class="texing character_limit">Description</p>
                                                    </div>

                                                    <div class="col-sm-5 col-md-4">
                                                        <ul class="meta-list">
                                                            <li>
                                                                <span>Country:</span>

                                                            </li>
                                                            <li>
                                                                <span>City:</span>

                                                            </li>
                                                            <li>
                                                                <span>Address:</span>

                                                            </li>
                                                            <li>
                                                                <span>Date: </span>

                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="job-item-list-bottom">

                                                <div class="row">

                                                    <div class="col-sm-7 col-md-8">
                                                        <div class="sub-category">
                                                            <a>Religion</a>

                                                        </div>
                                                    </div>

                                                    <div class="col-sm-5 col-md-4">
                                                        <a target="_blank" href="exploreEvent.php"
                                                            class="btn btn-primary">View This
                                                            Event</a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>


                                @endsection