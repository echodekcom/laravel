@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">About Dekcom</div>

                <div class="panel-body">
                    <h3>{{$n}}</h3>
                    <small>{{$nc}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--@section('footer')
  <script>
    alert("Hi Dekcom !");
  </script>
@endsection-->
