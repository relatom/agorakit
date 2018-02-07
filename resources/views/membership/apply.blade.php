@extends('app')

@section('content')

    @include('groups.tabs')

    <div class="tab_content">

        <h1>{{trans('membership.apply_for_group')}} <em>{{$group->name}}</em></h1>




        {!! Form::open(array('action' => ['MembershipController@apply', $group->id])) !!}



        <div class="form-group">
            {!! Form::submit(trans('membership.apply'), ['class' => 'btn btn-primary form-control']) !!}
            <a href="{{url('/')}}">{{trans('messages.cancel')}}</a>
        </div>


        {!! Form::close() !!}

        @include('partials.errors')
    </div>


@endsection
