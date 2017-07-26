@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-8">
            <div class="page-header">
                <H3>Create new Article</H3>
            </div>
            <form method="post" action="{{url('/articles')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title" class="control-lable">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content" class="control-lable">Content</label>
                    <textarea name="content" id="content" rows="10" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-lg">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
