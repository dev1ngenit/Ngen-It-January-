@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" style="border:none; background:transparent; float:right" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" style="border:none; background:transparent; float:right" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" style="border:none; background:transparent; float:right" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" style="border:none; background:transparent; float:right" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="btn-sm pull-right" style="border:none; background:transparent; float: right;"
            data-dismiss="alert">x</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
