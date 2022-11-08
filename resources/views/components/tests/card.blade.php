@props([
  //初期値を設定するのであれば全ての値に初期値の記載をしなければならない
  'title',//初期値に何も入れない場合
  'message' => 'messageの初期値です。',
  'content' => 'contentの初期値です',
])

<div {{ $attributes->merge([
  'class' => 'border-2 shadow-md w-1/4 p2'
  ])}}>
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>