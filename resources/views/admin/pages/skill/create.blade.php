@extends('admin.components.layouts')
@section('title', 'Experience|Create')
@section('content')
	 <div class="col-md-12">
                    @includeIf('message.message')
                    <div class="panel">
                        <div class="panel-content">
                        	<div class="row">
                        		<div class="col-sm-6"><h2>Add Skill</h2></div>
                        		<div class="col-sm-6">
                        			<a href="" class="btn btn-success pull-right">Manage Skill </a>
                        		</div>
                        	</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('skill.store')}}" method="POST">
                                        @CSRF
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="title" placeholder="Enter Your Skill Name">
                                        </div>
                                        <div class="form-group">
                                        <label for="header">Header Name</label>
                                        <select id="header"  class="form-control" name="header_name">
                                        
                                        <option>Select</option>
                                        @foreach($data as $row)
                                            <option value="{{$row->id}}">{{$row->header_name}}</option>     
                                            @endforeach
                                        </select>
                                       
                                    </div>
                                        <div class="form-group">
                                            <label for="value">Value</label>
                                            <input type="number" class="form-control" id="value" name="value">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                              <option>Select One</option>
                                              <option value="1">Active</option>
                                              <option value="0">Inactive</option>
                                            </select>
                                        </div>
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