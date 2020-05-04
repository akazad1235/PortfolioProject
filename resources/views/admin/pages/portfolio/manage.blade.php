@extends('admin.components.layouts')
@section('title', 'Experience|Manage')
@section('content')
<div class="col-sm-12"> 
                        <div class="panel">
                        @includeIf('message.message')
                        <div class="panel-content">
                        	<div class="row">
                                
                        		<div class="col-sm-6"><h2>Manage Service</h2></div>
                        		<div class="col-sm-6">
                        			<a href="" class="btn btn-warning pull-right">Add Service</a>
                        		</div>
                        	</div>
                            <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Catgory</th>
                                        <th>Project Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getdata as $row)    
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->projectcategory->category_name}}</td>
                                        <td>{{$row->project_name}}</td>
                                        <td><img src="{{asset('public/admin/images/portfolio/'.$row->image)}}" width="50" height="50"/></td>
                                        <td>{{$row->status}}</td>
                                        <td>
                                            <a class="btn btn-info btn-xs" href="" ><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger btn-xs" href="" ><i class="fa fa-edit"></i> Delete</a>
                                        </td>
                                    </tr> 

                                    @endforeach
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection