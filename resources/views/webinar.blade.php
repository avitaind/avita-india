@extends('layouts.app')

@section('title')
    @lang('title.webinar')
@stop

@section('content')
    <main class="top-nav-padding">

    <div class="container">
       <h3 style="text-align:center;">Webinar Registration</h3>

            @if(session()->has('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
            @endif
            <form action="/cap" method="POST" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!--Student Name Start-->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
            <label for="name">Name* :</label>
            <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" require>
            @if ($errors->has('name'))
              <span class="error" style="color:red;">Name Can Not Be Empty</span>
              @endif
            </div>


          <!-- Student Name End-->
          <!-- Email Start-->
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
            <label for="email">Email*:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" require>
            @if ($errors->has('email'))
              <span class="error" style="color:red;">Email Can Not Be Empty</span>
              @endif
          </div>
          <!-- Email End-->

              <!-- college_name Start-->
          <div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }} row">
          <label for="college_name">College* :</label>
          <input type="text" class="form-control" placeholder="College Name" id="college_name" name="college_name" require>
          @if ($errors->has('college_name'))
              <span class="error" style="color:red;">College Name Can Not Be Empty</span>
              @endif
          </div>
          <!-- college_name End-->
            <!-- college_id Start-->
            <div class="form-group{{ $errors->has('college_id') ? ' has-error' : '' }} row">
            <label for="college_id">College Id* :</label>
            <input type="text" class="form-control" placeholder="College Id" id="college_id" name="college_id" require>
          @if ($errors->has('college_id'))
              <span class="error" style="color:red;">College Id Can Not Be Empty</span>
              @endif
          </div>

          <!-- College_id End-->
          <!-- referred_by Start-->
          <div class="form-group{{ $errors->has('referred_by') ? ' has-error' : '' }} row">
            <label for="referred_by">Referred By* :</label>
            <input type="text" class="form-control" placeholder="Referred By" id="referred_by" name="referred_by" require>
            @if ($errors->has('referred_by'))
              <span class="error" style="color:red;">Referrence Can Not Be Empty</span>
              @endif
            </div>
          <!-- College Name End-->
          <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }} row">
            <label for="team">Education:</label>
            <input type="text" class="form-control" placeholder="Please Give Details" id="education" name="education" require>
            @if ($errors->has('education'))
              <span class="error" style="color:red;">This Can Not Be Empty</span>
              @endif
            </div>
          <!-- College Name End-->
          <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }} row">
            <label for="gender">Gender :</label>
            <input type="radio" class="form-control" id="gender" name="gender" value="Male" >Male     <input type="radio" class="form-control" id="gender" name="gender" value="Female" >Female


            @if ($errors->has('gender'))
              <span class="error" style="color:red;">This Can Not Be Empty</span>
              @endif
            </div>
          <!-- College Name End-->
          <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }} row">
            <label for="team">Age:</label>
            <input type="text" class="form-control" placeholder="Please Input Your Age" id="age" name="age" require>
            @if ($errors->has('age'))
              <span class="age" style="color:red;">This Can Not Be Empty</span>
              @endif
            </div>

            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }} row">
            <label for="team">Comment:</label>
            <input type="text" class="form-control" placeholder="Please Enter Comments" id="comment" name="comment" require>
            @if ($errors->has('comment'))
              <span class="error" style="color:red;">This Can Not Be Empty</span>
              @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
  
  
 
 </form>
</div>

        
        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}"/>


@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
