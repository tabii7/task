@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2></h2>
        </div>

    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<h1>Scheduled Meetings</h1>
<a class="btn btn-success mb-4" href="{{ route('dashboard') }}"> Schedue another</a>


<table class="table table-bordered">
    <tr>
        <th>email</th>
        <th>subject</th>
        <th>date</th>
        <th>time</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($meeting as $meetings)
    <tr>

        <td>{{ $meetings->email }}</td>
        <td>{{ $meetings->subject }}</td>
        <td>{{ $meetings->date }}</td>
        <td>{{ $meetings->time }}</td>

        <td>
            <form action="{{ route('delete',$meetings->id) }}" method="POST">
                <a class="btn btn-primary" href="{{route('edit',$meetings->id)}}">Edit</a>

                <a type="submit" class="btn btn-danger" href="{{ route('delete',$meetings->id) }}">Delete</a>
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>

    @endforeach
</table>


{!! $meetings->links() !!}
@endsection