@extends('layouts.app')

@section('title','Home')

@section('content')

<section class="mt-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Search result</h1>
                <form action="{{route('player.search')}}" method="get">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" name="name" value="{{request()->input('name')}}" type="text" placeholder="Search by PUBG username" aria-label="Search">
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

@if ($stat==0)
<section class="m-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <p class="display-2 mb-3">No results found</p>
            </div>
        </div>
    </div>
</section>
@else
    <section class="section section-lg pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h2 class="display-2 mb-3">Lifetime Stat</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Tab Nav -->
                    <div class="nav-wrapper position-relative mb-4">
                        <ul class="nav nav-pills flex-column flex-sm-row" id="tabs-text" role="tablist">
                            <li class="nav-item mr-sm-3 mr-md-0">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Normal</a>
                            </li>
                            <li class="nav-item mr-sm-3 mr-md-0">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">First Person</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End of Tab Nav -->
                    <!-- Tab Content -->
                    <div class="card shadow-inset bg-primary border-light p-4 rounded">
                        <div class="card-body p-0">
                            <div class="tab-content" id="tabcontent1">
                                <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Duo Stats</h2>
                                                    <p><strong>Kills</strong> {{$stat['duo']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$stat['duo']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$stat['duo']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$stat['duo']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$stat['duo']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$stat['duo']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$stat['duo']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Solo Stats</h2>
                                                    <p><strong>Kills</strong> {{$stat['solo']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$stat['solo']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$stat['solo']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$stat['solo']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$stat['solo']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$stat['solo']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$stat['solo']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Squad Stats</h2>
                                                    <p><strong>Kills</strong> {{$stat['squad']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$stat['squad']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$stat['squad']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$stat['squad']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$stat['squad']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$stat['squad']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$stat['squad']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Duo Stats</h2>
                                                    <p><strong>Kills</strong> {{$stat['duo-fpp']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$stat['duo-fpp']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$stat['duo-fpp']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$stat['duo-fpp']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$stat['duo-fpp']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$stat['duo-fpp']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$stat['duo-fpp']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Solo Stats</h2>
                                                    <p><strong>Kills</strong> {{$stat['solo-fpp']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$stat['solo-fpp']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$stat['solo-fpp']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$stat['solo-fpp']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$stat['solo-fpp']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$stat['solo-fpp']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$stat['solo-fpp']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Squad Stats</h2>
                                                    <p><strong>Kills</strong> {{$stat['squad-fpp']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$stat['squad-fpp']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$stat['squad-fpp']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$stat['squad-fpp']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$stat['squad-fpp']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$stat['squad-fpp']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$stat['squad-fpp']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Content -->
                </div> 
            </div>     
        </div>
        
    </section>
    <div class="text-center mb-5">
        {!!clean(setting('site.leaderboard_ad'))!!}
    </div>
    <section class="section section-lg pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h2 class="display-2 mb-3">Season Stat ({{$last_season_name}})</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Tab Nav -->
                    <div class="nav-wrapper position-relative mb-4">
                        <ul class="nav nav-pills flex-column flex-sm-row" id="tabs-text-1" role="tablist">
                            <li class="nav-item mr-sm-3 mr-md-0">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-1-tab" data-toggle="tab" href="#tabs-text-1-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Normal</a>
                            </li>
                            <li class="nav-item mr-sm-3 mr-md-0">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-2-tab" data-toggle="tab" href="#tabs-text-1-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">First Person</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End of Tab Nav -->
                    <!-- Tab Content -->
                    <div class="card shadow-inset bg-primary border-light p-4 rounded">
                        <div class="card-body p-0">
                            <div class="tab-content" id="tabcontent1">
                                <div class="tab-pane fade show active" id="tabs-text-1-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Duo Stats</h2>
                                                    <p><strong>Kills</strong> {{$last_season['duo']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$last_season['duo']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$last_season['duo']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$last_season['duo']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$last_season['duo']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$last_season['duo']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$last_season['duo']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Solo Stats</h2>
                                                    <p><strong>Kills</strong> {{$last_season['solo']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$last_season['solo']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$last_season['solo']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$last_season['solo']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$last_season['solo']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$last_season['solo']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$last_season['solo']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Squad Stats</h2>
                                                    <p><strong>Kills</strong> {{$last_season['squad']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$last_season['squad']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$last_season['squad']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$last_season['squad']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$last_season['squad']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$last_season['squad']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$last_season['squad']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="tab-pane fade" id="tabs-text-1-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Duo Stats</h2>
                                                    <p><strong>Kills</strong> {{$last_season['duo-fpp']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$last_season['duo-fpp']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$last_season['duo-fpp']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$last_season['duo-fpp']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$last_season['duo-fpp']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$last_season['duo-fpp']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$last_season['duo-fpp']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Solo Stats</h2>
                                                    <p><strong>Kills</strong> {{$last_season['solo-fpp']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$last_season['solo-fpp']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$last_season['solo-fpp']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$last_season['solo-fpp']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$last_season['solo-fpp']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$last_season['solo-fpp']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$last_season['solo-fpp']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-light">
                                                <div class="card-body">
                                                    <h2>Squad Stats</h2>
                                                    <p><strong>Kills</strong> {{$last_season['squad-fpp']['kills']}}</p>
                                                    <p><strong>Top10s</strong> {{$last_season['squad-fpp']['top10s']}}</p>
                                                    <p><strong>Wins</strong> {{$last_season['squad-fpp']['wins']}}</p>
                                                    <p><strong>losses</strong> {{$last_season['squad-fpp']['losses']}}</p>
                                                    <p><strong>Headshots</strong> {{$last_season['squad-fpp']['headshotKills']}}</p>
                                                    <p><strong>Games</strong> {{$last_season['squad-fpp']['roundsPlayed']}}</p>
                                                    <p><strong>Most kill in a match</strong> {{$last_season['squad-fpp']['roundMostKills']}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Content -->
                </div> 
            </div>     
        </div>
        
    </section>    
@endif


@endsection