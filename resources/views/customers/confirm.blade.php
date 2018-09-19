@extends('layouts.modal')

@section('content')
    {{-- @include('shared.errors') --}}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.crud.create')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}

        @lang('general.crud.delete_confirmation_message')

        <br>

        {{ $customer->name }}

        <div class="form-group">
            <button class="btn btn-danger" type="submit">@lang('general.crud.delete')</button>
        </div>
    </form>
    </div>

    <script>
        resize_modal('lg');
    </script>
@endsection