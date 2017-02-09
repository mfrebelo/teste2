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

            <table id="example">
                <colgroup>
                    <col width="130">
                    <col width="30%">
                    <col width="40%">
                </colgroup>
                <tr>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Description</th>
                </tr>
                @foreach ($links as $link)
                    <tr>
                    <td>{{ $link->title }}</td>
                    <td>{{ $link->url}}</td>
                    <td>{{ $link->description}}</td>
                    </tr>
                @endforeach
            </table>

        </div><!-- /.box-body -->
        <div class="box-footer">
        </div><!-- box-footer -->
    </div><!-- /.box -->



@stop
