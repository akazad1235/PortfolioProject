@extends('admin.components.layouts')
@section('title', 'Home|Create')
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
                                    <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                                        @CSRF
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="dsg">Designation</label>
                                            <input type="text" class="form-control" id="dsg" name="designation">
                                        </div>
                                       
                                       	 <div class="col-md-6">
                                        	 <div class="form-group">
                                            <label for="bg_img">Background Image</label>
                                            <input type="file" class="form-control" id="bg_img" name="bgImage" >
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        	 <div class="form-group">
                                            <label for="img">Image</label>
                                            <input type="file" class="form-control" id="img" name="image">
                                        </div>
                                        <br>
                                       </div>
                                        <div class="form-group">
                                            <label for="cat">Description</label><br>
                                            <textarea rows="8" cols="100" name="desc"></textarea>
                                        </div>

                                         <div class="form-group">
                                            <label for="cat">CV</label>
                                            <input type="file" class="form-control" id="cat" name="cv">
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