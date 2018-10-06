@extends('layouts.app', ['back'=>true, 'route' => 'dashboard.index'])

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="5%" class="text-center"><a class="btn btn-success" href="{{ route('suppliers.create') }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.create')</a></th>
            <th width="40%" class="text-center">@lang('customers.name')</th>
            <th width="20%" class="text-center">@lang('customers.code')</th>
            <th width="30%" class="text-center">@lang('general.settings')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->code }}</td>
                <td class="text-center">
                    <a class="btn btn-warning" href="{{ route('suppliers.edit', ['supplier' => $supplier]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.edit')</a>
                    <a class="btn btn-danger" href="{{ route('suppliers.confirm', ['supplier' => $supplier]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- <a class="btn btn-danger" href="{{ route('customer.confirm', ['customer' => $customer]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a> --}}

@endsection