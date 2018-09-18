@extends('layouts.app', ['back'=>true, 'route' => 'dashboard.index'])

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="5%" class="text-center"><a class="btn btn-success" href="{{ route('customer.create') }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.create')</a></th>
            <th width="50%" class="text-center">@lang('general.role_name')</th>
            <th width="10%" class="text-center">@lang('general.role_name')</th>
            <th width="35%" class="text-center">@lang('general.settings')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->customer_code }}</td>
                <td class="text-center">
                    <a class="btn btn-warning" href="{{ route('customer.edit', ['customer' => $customer]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.edit')</a>
                    <a class="btn btn-danger" href="{{ route('customer.confirm', ['customer' => $customer]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- <a class="btn btn-danger" href="{{ route('customer.confirm', ['customer' => $customer]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a> --}}

@endsection