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
            @foreach ($links as $link)
                <h4> Title</h4>
                <p>{{ $link->title }}</p>
                <h4> Url</h4>
                <p>{{ $link->url}}</p>
                <h4> Description</h4>
                <p>{{ $link->description}}</p>
                <hr>
            @endforeach
        </div><!-- /.box-body -->
        <div class="box-footer">
            The footer of the box
        </div><!-- box-footer -->
    </div><!-- /.box -->


@stop
