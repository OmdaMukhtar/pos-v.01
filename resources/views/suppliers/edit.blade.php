@extends('layouts.modal')

@section('content')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.update_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('suppliers.update',$supplier) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('put')}}

            <div class="col-lg-12" style="margin-top: 50px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.name')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->name }}" name="name" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.code')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" name="code" readonly class="form-control" value="{{$supplier->code}}">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.address')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->address }}" name="address" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.country')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->country }}" name="country" class="form-control">
                </div>
            </div>
            
            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.city')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->city }}" name="city" class="form-control">
                </div>
            </div>
            
            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.fax')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->fax }}" name="fax" class="form-control">
                </div>
            </div>
            
            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.phone')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->phone }}" name="phone" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.email')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->email }}" name="email" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.facebook')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $supplier->facebook }}" name="facebook" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;">
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.note')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <textarea class="form-control" name="note">{{ $supplier->note }}</textarea>
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.debit')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $supplier->debit }}" name="debit" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.credit')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $supplier->credit }}" name="credit" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.balance')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $supplier->balance }}" name="balance" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.status')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $supplier->status }}" name="status" class="form-control">
                </div>
            </div>
            <div class="col-lg-12" style="margin-top: 20px !important;">
                <div class="col-lg-3 col-md-3 snsolabel">

                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <button class="btn btn-warning" type="submit">@lang('general.crud.create')</button>
                </div>
            </div>
        </form>
    </div>
    
    <script>
        resize_modal('lg');
    </script>

    
@endsection