@extends('master')
  @section('content')
  <div class="row">
      <a class="navbar-brand" href="{{ url('/index') }}">
                        {{ config('/index', 'Back to Dashboard') }}
                    </a>
                     <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
    <div class="col-md-12">
      <h1>Edit Data</h1>


      <label>Name</label>
      

    </div>
  </div>
   <div class="row">
    <div class="col-md-4">
    <form class="" action="{{route('index.update',$blog->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
     <div class="form-group{{ ($errors->has('firstname')) ? $errors->first('firstname') : '' }}">
          <input type="text" name="firstname" class="form-control" placeholder="First Name">
          {!! $errors->first('firstname','<p class="help-block">:message</p>') !!}
        </div>

         <div class="form-group{{ ($errors->has('lastname')) ? $errors->first('lastname') : '' }}">
          <input type="text" name="lastname" class="form-control" placeholder="Last Name">
          {!! $errors->first('lastname','<p class="help-block">:message</p>') !!}
        </div>


       <div class="form-group{{ ($errors->has('gender')) ? $errors->first('gender') : '' }}">
  <label class="unique" for="selectbasic">Gender</label>
  <div class="unique">
    <select id="gender" name="gender" class="input-xlarge">
      <option></option>
      <option>Male</option>
      <option>Female</option>
    </select>
      {!! $errors->first('gender','<p class="help-block">:message</p>') !!}
  </div>
</div>

    <div>
    

   <label>Birthdate</label>
   

<div class="form-group{{ ($errors->has('bmonth')) ? $errors->first('bmonth') : '' }}">
Month
  <div class="unique">
 <select id="bmonth" name="bmonth" class="input-xlarge">
<option></option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select>&nbsp; &nbsp;
{!! $errors->first('bmonth','<p class="help-block">:message</p>') !!}
  </div>

 
<div class="form-group{{ ($errors->has('bday')) ? $errors->first('bday') : '' }}">
Day
  <div class="unique">
 <select id="bday" name="bday" class="input-xlarge">
<option></option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>&nbsp; &nbsp;
 {!! $errors->first('bday','<p class="help-block">:message</p>') !!}
  </div>



<div class="form-group{{ ($errors->has('byear')) ? $errors->first('byear') : '' }}">
Year 
  <div class="unique">
 <select id="byear" name="byear" class="input-xlarge">
<option></option>
<option value='1947'>1947</option>
<option value='1948'>1948</option>
<option value='1949'>1949</option>
<option value='1950'>1950</option>
<option value='1951'>1951</option>
<option value='1952'>1952</option>
<option value='1953'>1953</option>
<option value='1954'>1954</option>
<option value='1955'>1955</option>
<option value='1956'>1956</option>
<option value='1957'>1957</option>
<option value='1958'>1958</option>
<option value='1959'>1959</option>
<option value='1960'>1960</option>
<option value='1961'>1961</option>
<option value='1962'>1962</option>
<option value='1963'>1963</option>
<option value='1964'>1964</option>
<option value='1965'>1965</option>
<option value='1966'>1966</option>
<option value='1967'>1967</option>
<option value='1968'>1968</option>
<option value='1969'>1969</option>
<option value='1970'>1970</option>
<option value='1971'>1971</option>
<option value='1972'>1972</option>
<option value='1973'>1973</option>
<option value='1974'>1974</option>
<option value='1975'>1975</option>
<option value='1976'>1976</option>
<option value='1977'>1977</option>
<option value='1978'>1978</option>
<option value='1979'>1979</option>
<option value='1980'>1980</option>
<option value='1981'>1981</option>
<option value='1982'>1982</option>
<option value='1983'>1983</option>
<option value='1984'>1984</option>
<option value='1985'>1985</option>
<option value='1986'>1986</option>
<option value='1987'>1987</option>
<option value='1988'>1988</option>
<option value='1989'>1989</option>
<option value='1990'>1990</option>
<option value='1991'>1991</option>
<option value='1992'>1992</option>
<option value='1993'>1993</option>
<option value='1994'>1994</option>
<option value='1995'>1995</option>
<option value='1996'>1996</option>
<option value='1997'>1997</option>
<option value='1998'>1998</option>
<option value='1999'>1999</option>
<option value='2000'>2000</option>
<option value='2001'>2001</option>
<option value='2002'>2002</option>
<option value='2003'>2003</option>
<option value='2004'>2004</option>
<option value='2005'>2005</option>
</select>&nbsp; &nbsp;
     {!! $errors->first('byear','<p class="help-block">:message</p>') !!}
  </div>

        <div class="form-group{{ ($errors->has('course')) ? $errors->first('course') : '' }}">
  <label class="unique" for="selectbasic">Course</label>
  <div class="unique">
    <select id="course" name="course" class="input-xlarge">
      <option></option>
      <option>Computer Science</option>
      <option>Information Technology</option>
      <option>Information System</option>
    </select>
     {!! $errors->first('course','<p class="help-block">:message</p>') !!}
  </div>
</div>
<div>
    
    

        <p>     </p>

</div>
                 <div class="form-group{{ ($errors->has('year')) ? $errors->first('year') : '' }}">
  <label class="unique" for="selectbasic">Year Level</label>
  <div class="unique">
    <select id="year" name="year" class="input-xlarge">
      <option></option>
      <option>1</option>
      <option>2</option>
       <option>3</option>
      <option>4</option>
    </select>
      {!! $errors->first('year','<p class="help-block">:message</p>') !!}
  </div>
</div>
                

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
        </div>
    </form>
  </div>
  @stop
