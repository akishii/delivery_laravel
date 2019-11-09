@extends('base')

@section('content')
<div class='container'>
  <h2 class="confirm-title">ご注文確認画面</h2>
    <div class="confirm-item">◆名  前　 {{$name}}</div>
    <div class="confirm-item">◆E-mail　{{$email}}</div>
    <div class="confirm-item">◆電話番号　{{$phone}}</div>
    <div class="confirm-item">◆届先住所　{{$address}}</div>
    <div class="confirm-item">◆配達希望日　{{$delivery}}</div>
    <p></p>
  <div class="btn-group mr-2">
    <form method="get" action="complete">
      @csrf
      <button type="submit" class="btn btn-primary" value="確定">確定</button>
    </form>
  </div>
  <div class="btn-group">
    <form method="post" action="order">@csrf
      <button type="submit" class="btn btn-success" value="戻る">戻る</button>
    </form>
  </div>
</div>
@endsection('content')