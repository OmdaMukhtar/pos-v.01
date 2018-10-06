@extends('layouts.modal')

@section('content')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('customers.create_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('customers.update',$customer) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('put')}}

            <div class="col-lg-12" style="margin-top: 50px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.name')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->name }}" name="name" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.code')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" name="code" readonly class="form-control" value="{{$customer->code}}">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.address')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->address }}" name="address" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.country')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->country }}" name="country" class="form-control">
                </div>
            </div>
            
            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.city')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->city }}" name="city" class="form-control">
                </div>
            </div>
            
            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.fax')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->fax }}" name="fax" class="form-control">
                </div>
            </div>
            
            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.phone')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->phone }}" name="phone" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.email')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->email }}" name="email" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.facebook')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="text" value="{{ $customer->facebook }}" name="facebook" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;">
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.note')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <textarea class="form-control" name="note">{{ $customer->note }}</textarea>
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.debit')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $customer->debit }}" name="debit" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.credit')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $customer->credit }}" name="credit" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.balance')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $customer->balance }}" name="balance" class="form-control">
                </div>
            </div>

            <div class="col-lg-12" style="margin-top: 20px!important;" >
                <div class="col-lg-3 col-md-3 snsolabel">
                    @lang('customers.status')
                </div>
                <div class="col-lg-9 col-md-9 snsoinput">
                    <input type="number" value="{{ $customer->status }}" name="status" class="form-control">
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