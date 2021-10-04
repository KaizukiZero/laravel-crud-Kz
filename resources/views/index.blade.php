@extends('layout')
@section('title','Index Laravel 8')
@section('Content')
<div class="container my-4">
 <div class="border"> 
 Hello World
    {!! $data->links() !!} 
 </div>

</div>

@endsection
    