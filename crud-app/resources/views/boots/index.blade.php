@extends('boots.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel_CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('boots.create') }}"> Create New Boots Post</a>
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
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Brand</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($boots as $boot)
        <tr>
            <td>{{ $boot->id }}</td>
            <td>{{ $boot->name }}</td>
            <td>{{ $boot->description }}</td>
            <td>{{ $boot->brand }}</td>

            <td>
                <form action="{{ route('boots.destroy',$boot->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('boots.show',$boot->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('boots.edit',$boot->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $boots->links() }}


@endsection