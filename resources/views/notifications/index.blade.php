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


<div class="notifications divide-y">
    @if ($notifications)

    @foreach($notifications as $notification)

    <div up-expand class="hover:bg-gray-300 py-2 px-2 flex">

        <div class="flex-grow">
            @if ($notification->type == 'App\Notifications\GroupCreated')
            @include('notifications.group_created')
            @endif

            @if ($notification->type == 'App\Notifications\MentionedUser')
            @include('notifications.mentioned_user')
            @endif

            <div class="text-xs text-gray-400">
                {{$notification->type}}
            </div>
        </div>
        <div>
        <a href="#" class="btn btn-secondary">Mark as read</a>
        </div>
    </div>
    @endforeach

    {!! $notifications->render() !!}
    @else
    {{trans('messages.nothing_yet')}}
    @endif
</div>


@endsection