@extends('master')
  @section('content')


  <div class="row">

    <div class="col-md-12">
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
      <h1>CS 312C Student Profile</h1>
 
            
       <div class="panel-body">
          <label>Welcome to Dashboard!</label>
          <br>
          
              </div>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>Course</th>
        <th>Year Level</th>
        <th>Actions</th>
      </tr>
      <a href="{{route('index.create')}}" class="btn btn-info pull-right">Create New Profile</a><br><br>
      <?php $no=1; ?>
      @foreach($blogs as $blog)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$blog->full_name}}</td>
          <td>{{$blog->gender}}</td>
          <td>{{$blog->birth_date}}</td>
          <td>{{$blog->course}}</td>
          <td>{{$blog->year}}</td>
          <td>
            <form class="" action="{{route('index.destroy',$blog->id)}}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('index.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
              <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
      </div>
  @stop
