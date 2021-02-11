@extends('master')

@section('title','Courses')

<style>

  .form {
    position: relative;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    padding-top:20px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }


  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4169E1;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
    background: #4169E1;
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

<div class="row" style="margin-top: 70px;">
    <div class="col-xs-0 col-md-1"></div>
    <div class="col-xs-6 col-md-5" style="background-color: beige; padding: 30px;">
        <h3>Jezik: {{$course->language}}</h3>
        Upisani na kurs:
        <ul>
        @foreach($course->students as $student)
        <li>{{$student->name}} {{$student->surname}}</li>
        @endforeach
        </ul>
        Predavači:
        <ul>
        @foreach($course->profesors as $profesor)
        <li>{{$profesor->name}} {{$profesor->surname}}</li>
        @endforeach
        </ul>
    </div>

    <div class="col-xs-0 col-md-1"></div>
    <div class="col-xs-6 col-md-4">
        <button  id="dodajPolaznika" class="btn btn-primary btn-small" style="padding-right: 18px;">Dodaj</button>
        <a href="/"><button  class="btn btn-primary btn-small" style="padding-right: 18px;">Nazad na Kurseve</button></a>
        <hr/>
        <div class="add-new" id="formaPolaznik" style="display: none;">
            <div class="form">
              <form action="/add-student" method="post" class="add-form">
              {{ csrf_field() }}
              <h4>Forma Dodaj Polaznika</h4>

              <br>
                <input name="name" type="text" placeholder="name"/>
                <input name="surname" type="text" placeholder="surname"/>
                <input name="age" type="text" placeholder="age"/>
                <input style="display:none;" type="text" name="id" value="{{$course->id}}">
                <button type="submit">Save</button>
              </form>
            </div>
          </div>

          <div class="add-new" id="formaPredavac" style="display: none;">
            <div class="form">
              <form action="/add-professor" method="post" class="add-form">
              {{ csrf_field() }}
              <h4>Forma Dodaj Predavača</h4>

              <br>
                <input name="name" type="text" placeholder="name"/>
                <input name="surname" type="text" placeholder="surname"/>
                <input name="level" type="text" placeholder="level"/>
                <input style="display:none;" type="text" name="id" value="{{$course->id}}">
                <button type="submit">Save</button>
              </form>
            </div>
          </div>
</div>
    </div>

@endsection


