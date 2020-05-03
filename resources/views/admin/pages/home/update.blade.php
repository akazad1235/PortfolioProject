@extends('admin.components.layouts')
@section('title', 'update')
@section('content')
	 <div class="col-md-12">
                    @includeIf('message.message')
                    <div class="panel">
                        <div class="panel-content">
                        	<div class="row">
                        		<div class="col-sm-6"><h2>Add Category</h2></div>
                        		<div class="col-sm-6">
                        			<a href="" class="btn btn-success pull-right">Manage Category</a>
                        		</div>
                        	</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('home.update', base64_encode($homeId->id))}}" method="POST" enctype="multipart/form-data">
                                        @CSRF
                                        <div class="form-group">
                                            <label for="cat">Name</label>
                                            <input type="text" class="form-control" id="cat" name="name" value="{{$homeId->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="cat">Designation</label>
                                            <input type="text" class="form-control" id="cat" name="designation" value="{{$homeId->designation}}">
                                        </div>
                                       
                                       	 <div class="col-md-6">
                                        	 <div class="form-group">
                                            <label for="image">Background Image</label>
                                    <input type="file" name="image" class="form-control" id="image"  >
                                            
                                        </div>
                                        <img width="200" height="150" src="{{ asset('public/admin/images/home/'.$homeId->bg_image)}}">
                                    </div>
                                        <div class="col-md-6">
                                        	 <div class="form-group">
                                            <label for="cat">Image</label>
                                            <input type="file" class="form-control" id="cat" name="images">
                                        </div>
                                         <img width="200" height="150" src="{{ asset('public/admin/images/home/'.$homeId->image)}}">
										<br>
                                       </div>
                                        <div class="form-group">
                                            <label for="cat">Description</label><br>
                                            <textarea name="desc" rows="8" cols="100">{{$homeId->desc}}</textarea>
                                        </div>

                                         <div class="form-group">
                                            <label for="cat">CV</label>
                                            <input type="file" class="form-control" id="cat" name="file">
                                        </div><br>

                                        <div class="form-group">
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection