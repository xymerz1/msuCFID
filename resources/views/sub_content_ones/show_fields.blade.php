<div class="container">
    <div class="row">
        <div class="box-body">
            <div class="pull-right">
                <a href="{!! route('subContentTwoRepositories.create', ['content_id' => $subContentOne->sub_number, 'sub_content_one_id' => $subContentOne->id])!!}" class="btn btn-primary">Add New Second Level Content</a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">{!! $subContentOne->sub_number !!} - {!! $subContentOne->title !!}</div>
                <!-- Body Field -->
                <div class="form-group">
                    <p>{!! $subContentOne->body !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{!! route('contents.index')!!}" class="btn btn-default">Back</a>
        </div>
    </div>
</div>



