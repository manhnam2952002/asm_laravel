@extends('admin.layout')

@section('content')
    <div class="center-block">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-horizontal form-bordered" action="/admin/index" method="post">
            @csrf
            <h1>User Form</h1>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Identity Number</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="inputDefault" name="identityNumber">
                    @error('identityNumber')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">First Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="inputDefault" name="firstName">
                    @error('firstName')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Last Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="inputDefault" name="lastName">
                    @error('lastName')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="inputDefault" name="phone">
                    @error('phone')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Gender</label>
                <div class="col-md-3">
                    <input type="radio" id="html" name="fav_language" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="css" name="fav_language" value="Famale">
                    <label for="female">Female</label><br>
                </div>
            </div>
            <div class="form-group">n
                <label class="col-md-3 control-label"></label>
                <div class="col-md-6 col-xs-11">
                    <button class="btn btn-sm btn-primary colorpicker-element">
                        Save
                    </button>
                    <button class="btn btn-sm btn-default colorpicker-element">
                        Reset
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('page_js')
    <script src="{{URL::asset('assets/vendor/select2/select2.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
@endsection
