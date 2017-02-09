@extends ('layout.main')

@section ('content')
<div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Links</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary">Links</span>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="container">

            <div class="row">
                <h4>Submit a link</h4>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops! Something went wrong!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/submit" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
    </div><!-- box-footer -->
    </div><!-- /.box -->

@stop
