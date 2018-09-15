@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">مرحباً</a></li>
                            <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">البروفايل</a></li>
                            <li class=""><a href="#credential" data-toggle="tab" aria-expanded="false">بيانات الدخول</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <br>
                                <p>
                                    {{-- <img src="{{ public_path('/avatars/' . $profile->avatar) }}" > --}}
                                    {{ Auth::user()->name }}<br>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">

                                <p>
                                <form action="{{ route('dashboard.update', ['type' => 'profile']) }}" method="post">

                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
{{-- 
                                    <div class="form-group">
                                        <label class="control-label" for="name">الإسم</label>
                                        <input class="form-control" id="name" name="name" value="{{ $user->name }}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">الجنس</label>
                                        @foreach($genderTypes as $genderType)
                                            <label class="radio-inline">
                                                <input name="gender" id="gender" value="{{ $genderType->code }}" @if($genderType->code == $profile->gender) checked @endif type="radio">{{ $genderType->name }}
                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="marital_status">الحالة الإجتماعية</label>
                                        @foreach($maritalStatusTypes as $maritalStatusType)
                                            <label class="radio-inline">
                                                <input name="marital_status" id="marital_status" value="{{ $maritalStatusType->code }}" @if($maritalStatusType->code == $profile->marital_status) checked @endif type="radio">{{ $maritalStatusType->name }}
                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="birth_date">تاريخ الميلاد</label>
                                        <div class="input-group">
                                            <input name="birth_date" class="form-control date-picker" id="birth_date" value="{{ $profile->birth_date }}" data-date-format="dd-mm-yyyy" type="date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="education_level">المستوى الدراسي</label>
                                        <select name="education_level" id="education_level" class="form-control">
                                            @foreach($educationTypes as $educationType)
                                                <option value="{{ $educationType->code }}" @if($educationType->code==$profile->education_level) selected @endif>{{ $educationType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess">الجنسية</label>
                                        <select name="country_id" id="country_id" class="form-control">
                                            @foreach($countries as $country)
                                                <option value="{{ $country->alpha_3 }}" @if($country->alpha_3 == $profile->country_id) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telephone">رقم الهاتف</label>
                                        <input class="form-control" id="telephone" name="telephone" value="{{ $profile->telephone }}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telephone">رابط حساب الفيسبوك</label>
                                        <input class="form-control" id="telephone" name="telephone" value="{{ $profile->telephone }}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="facebook_url">رابط حساب تويتر</label>
                                        <input class="form-control" id="facebook_url" name="facebook_url" value="{{ $profile->facebook_url }}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="linkedin_url">رابط حساب لينكدن</label>
                                        <input class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $profile->linkedin_url }}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="about_me">نبذة عنك</label>
                                        <textarea class="form-control" id="about_me" name="about_me">{{ $profile->about_me }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-warning">تحديث</button> --}}
                                </form>

                                </p>

                            </div>
                            <div class="tab-pane fade" id="credential">

                                <p>
{{-- 
                                <form action="{{ route('dashboard.update', ['type' => 'credential']) }}" method="post">

                                    {{ csrf_field() }}
                                    {{ method_field('put') }}

                                    <div class="form-group">
                                        <label class="control-label" for="email">البريد الإلكتروني</label>
                                        <input class="form-control" id="email" name="email" value="{{ $user->email }}" type="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="current_password">كلمة المرور الحالية</label>
                                        <input class="form-control" id="current_password" name="current_password" value="" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="password">كلمة المرور الجديدة</label>
                                        <input class="form-control" id="password" name="password" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="password_confirmation">تأكيد كلمة المرور الجديدة</label>
                                        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
                                    </div>

                                    <button type="submit" class="btn btn-warning">تحديث</button>
                                </form> --}}

                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-users fa-fw"></i> عدد المستخدمين
                                <span class="pull-left text-muted small"><em>4 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-files-o fa-fw"></i> عدد العملاء
                                <span class="pull-left text-muted small"><em>12 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-cogs fa-fw"></i> عدد الموردين
                                <span class="pull-left text-muted small"><em>27 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i> المصروفات
                                <span class="pull-left text-muted small"><em>43 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-money fa-fw"></i> إجمالي الإيرادات
                                <span class="pull-left text-muted small"><em>43 minutes ago</em>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>


<style>
@media (min-width: 1200px){}
.col-lg-6 {
    width: 46% !important;
}

</style>

@endsection