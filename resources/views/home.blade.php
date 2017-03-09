@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
  


                <div class="panel-body">
                    You are now logged in!
              </div>

            <a class="navbar-brand" href="{{ url('/index') }}">
                        {{ config('/index', 'Go to Dashboard') }}
                    </a>

                      
            </div>
        </div>
    </div>
</div>

 <div class="container">
    <div class="flex-center position">
     <h1> &nbsp; Harambe Authors: </h1>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.0-9/1017510_793956453951467_959965374_n.jpg?_nc_eui2=v1%3AAeEo5hPFalkgY2BL1HGPaeu-GxOb9wznSo7YpfthbdKXV5DbFLPA_J0tDq0ZoLU5e0OVEqanL8yrFS5FgeKAE1OFnEl362HvAYryqWpmiR3OcA&oh=ab0ad7d915401aab4f69617559365345&oe=5934FA25" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            Dwight Ian Perez</h4>
                        <small><cite title="Davao City, Philippines">Davao City, Philippines<i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>dwight41@gmail.com
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="https://facebook.com/dwight41">https://facebook.com/dwight41</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>September 26, 1995</p>
                        <!-- Split button -->
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.0-9/1476232_10151981677583930_1562150415_n.jpg?_nc_eui2=v1%3AAeGCvTVlXKXPRwz3_4o3LWyZkAzHGIZzUbfL2pEXI8JuC2V54TmK2CmfVrW2JuwfbZyw3W8l_I3kJraB7TSYZU3V6RV9C6BaJH3eOrKrPH39sQ&oh=052ac4767f9cd8c0a863ceb7d10f4aec&oe=5925021A" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            Jozef Leonor</h4>
                        <small><cite title="Davao City, Philippines">Davao City, Philippines <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>jroleonor@addu.edu.ph
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="https://facebook.com/jozefleonor">https://facebook.com/jozefleonor</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>December 12, 1994</p>
                        <!-- Split button -->
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    </div>
</div>
@endsection
