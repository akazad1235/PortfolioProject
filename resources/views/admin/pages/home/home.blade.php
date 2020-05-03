@extends('admin.components.layouts')
@section('title', 'this home')
@section('content')
<div class="col-sm-12">
                    <!-- @includeIf('message.message') -->
                        <div class="panel">

                        <div class="panel-content">
                        	<div class="row">
                                
                        		<div class="col-sm-6"><h2>Mange Brands</h2></div>
                        		<div class="col-sm-6">
                        			<a href="" class="btn btn-warning pull-right">Add Brand</a>
                        		</div>
                        	</div>
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>name</th>
                                        <th>Designation</th>
                                        <th>Desc</th>
                                        <th>BG Image</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach($getHome as $row)
                                        <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->designation}}</td>
                                        <td>{{$row->desc}}</td>
                                        <td>{{$row->bg_image}}</td>
                                        <td>{{$row->image}}</td>
                                        
                                        <td>
                                            <a class="btn btn-info btn-xs" href="{{route('home.edit',base64_encode($row->id))}}" ><i class="fa fa-edit"></i> Edit</a>
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