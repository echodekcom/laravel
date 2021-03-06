@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <?= link_to('books/create', $title = 'เพิ่มข้อมูล', ['class' => 'btn btn-primary'], $secure = null); ?>
      <hr>
      <div class="panel panel-default">
        <div class="panel-heading">
          แสดงข้อมูลหนังสือจำนวนทั้งหมด {{ $books->total() }} เล่ม
        </div>
        <div class="panel-body">
          <table class="table table-stripped">
            <tr>
              <th>รหัส</th>
              <th>ชื่อหน้งสือ</th>
              <th>ราคา</th>
              <th>หมวดหน้งสือ</th>
              <th>รูปภาพ</th>
            </tr>
            @foreach($books as $book)
            <tr>
              <td>{{$book->id}}</td>
              <td>{{$book->title}}</td>
              <td>{{number_format($book->price,2)}}</td>
              <td>{{$book->typebooks->name}}</td>
              <td><a href="{{ asset('images/'.$book->image)}}"><img src="{{ asset('images/resize/'.$book->image) }}" style="width:50px;"></a></td>
            </tr>
            @endforeach
          </table>
          {!! $books->render() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
