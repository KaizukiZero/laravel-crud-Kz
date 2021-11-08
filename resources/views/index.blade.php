@extends('layout')
@section('title','Index Laravel 8')
@section('Content')

<div class="container my-4">
    <div class="border">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('Create') }}"> Create New Post</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ \Str::limit($value->description, 100) }}</td>
                <td>
                    <form action="{{ route('Bye',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('Show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('Edit',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $data->links() !!}
    </div>

</div>

@endsection

@section('Modal')
<div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Successful!</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500">
                    Account has been successfully registered!
                </p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="ok-btn"
                    class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>


@endsection
