@extends('master')

@section('title','Courses')

<style>
    li {
        transition: all .6s ease;
    }

    li.list-group-item:hover {
        background-color: #add8e6;
        color: white;
        font-size: 20px;
    }

    ul.menu {
    list-style-type: none;
    padding: 2px 10px;
    overflow: hidden;
    background-color: #000;
    margin-top: 0;
    display: grid;
    grid-template-columns: 20vw 50vw 1fr 20vw;
  }


  li.image {
    grid-column: 2/3;
  }


  body {
    overflow-x: hidden;
  }

</style>


@section('content')

    <ul class="menu" style="padding: 8px 0px;">
        <li class="image"><a href="http://localhost:8000"><span style="font-size: 40px;" class="fa fa-language"></span></a></li>
    </ul>

    <div class="jumbotron" style="height:180px; background-color:#D7DBDD; width: 60%; border-radius: 20px; margin: 30px auto;
    margin-bottom: 50px;">
        <div class="container">
            <h2 style="margin-left:24%; font-size: 40px; margin-top: 0px;">Language Courses App</h2>
            <p style="margin-left:24%;">Enroll to any course. Learn more than 10 foreign languages.</p>
        </div>
    </div>

  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <ul class="list-group">
    @foreach($courses as $course)
        <a href="/{{$course->id}}" style="text-decoration: none; color: black;"><li class="list-group-item">{{$course->language}}</li></a>
    @endforeach
</ul>
</div>
  </div>
@endsection
