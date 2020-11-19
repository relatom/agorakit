@extends('app')

@section('content')


<div class="toolbox d-md-flex">
    <div class="d-flex mb-2">
        <h1>
            <a up-follow href="{{ route('index') }}"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i>
            {{ trans('messages.notifications') }}
        </h1>
    </div>
</div>


<div class="notifications">
    @if ($notifications)

    @foreach($notifications as $notification)

    <div>
        {{$notification->type}}

        @if ($notification->type == 'App\Notifications\GroupCreated')
        @include('notifications.group_created')
        @endif

        @if ($notification->type == 'App\Notifications\MentionedUser')
        @include('notifications.mentioned_user')
        @endif
    </div>
    @endforeach

    {!! $notifications->render() !!}
    @else
    {{trans('messages.nothing_yet')}}
    @endif
</div>


@endsection