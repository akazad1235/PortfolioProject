@extends('admin.components.layouts')
@section('title', 'Experience|Create')
@section('content')
	 <div class="col-md-12">
                    @includeIf('message.message')
                    <div class="panel">
                        <div class="panel-content">
                        	<div class="row">
                        		<div class="col-sm-6"><h2>Add Manage Category</h2></div>
                        		<div class="col-sm-6">
                        			<a href="" class="btn btn-success pull-right">Manage Project Category </a>
                        		</div>
                        	</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('projectcategory.update', base64_encode($getData->id))}}" method="POST">
                                        @CSRF
                                        <div class="form-group">
                                            <label for="cat">Category Name</label>
                                            <input type="text" class="form-control" id="cat" name="category_name" value="{{$getData->category_name}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                              <option>Select One</option>
                                              <option value="1" {{ $getData->status == 1 ? 'selected':'' }}>Active</option>
                                              <option value="0" {{ $getData->status == 0 ? 'selected':'' }}>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

   
@endsection