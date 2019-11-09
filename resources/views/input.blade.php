@extends('base')

@section('content')
<div class='container'>
<h2 class="form-title">配達希望日を選んでください</h2>
@if (count($errors) > 0)
  <div>
	@foreach ($errors->all() as $error)
	  <p>{{$error}}</p>
	@endforeach
  </div>
@endif
<form method="post" action="confirm">
  <div class="form-row">
    <div class="col-5">
    @csrf
      <div>名前</div>
  	   <input class="form-control" type="text" name="name" placeholder="" value="{{old('name')}}">
  	   <div>E-mail</div>
  	   <input class="form-control" type="text" name="email" value="{{old('email')}}">
  	   <div>電話番号</div>
  	   <input class="form-control" type="text" name="phone" value="{{old('phone')}}">
  	   <div>届先住所</div>
  	   <input class="form-control" type="text" name="address" value="{{old('address')}}">
  	   <div>配達希望日</div>
  	   <select class="form-control" name="delivery" value="{{old('delivery')}}">
        <option value='delivery' disabled selected style='display:none;'>-選択してください-</option>
  	   @foreach ($deli_days as $deli_day)
  	     <option value={{$deli_day}}>{{$deli_day}}<br></option>
      @endforeach
  	   </select>
  	     <p><input type="hidden" name="send_data" value="入力情報"></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">確認画面へ</button>
    </div>
  </div>
</form>
</div>
@endsection('content')