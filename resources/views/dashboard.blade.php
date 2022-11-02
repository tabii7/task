@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        You are Logged In
                    </div>
                    @endif
                    <a class="btn btn-success mb-4" href="{{ route('viewmeetings') }}"> View all</a>

                    <h3>Start Meeting</h3>
                    <button class="form-control btn btn-primary mb-4" id="start-meeting"> START</button>
                    <form method="post" action="{{route('attendees')}}" id="add-attendee">
                        @csrf
                        <input name="email" type="text" class="form-control mb-3" placeholder="email">
                        <input name="subject" type="text" class="form-control mb-3" placeholder="subject">
                        <input name="date" type="date" class="form-control mb-3">
                        <input name="time" type="time" class="form-control mb-3">
                        <input type="submit" class="form-control btn btn-primary">
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
$('#add-attendee').hide();
$("#start-meeting").click(function() {
    $('#add-attendee').show();
});
</script>
@endsection