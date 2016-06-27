@extends('layouts.app')

@section('content')
    <div class="content">
        @foreach($pinpads->chunk(3) as $row)
            <div class="row">
                @foreach($row as $pinpad)
                    <div class="col-md-4">
                        <a href="/pinpads/{{ $pinpad->id }}" class="btn btn-default">
                            <img src="http://cashregistersite.com/images/PAX_SP30.gif">
                            <br>
                            {{ $pinpad->serial }}
                        </a>
                    </div>
                 @endforeach
            </div>
        @endforeach
    </div>
@endsection