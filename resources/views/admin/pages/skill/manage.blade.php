@extends('admin.components.layouts')
@section('title', 'Experience|Manage')
@section('content')
<div class="col-sm-12">
                    @includeIf('message.message')
                        <div class="panel">

                        <div class="panel-content">
                        	<div class="row">
                                
                        		<div class="col-sm-6"><h2>Mange Skill</h2></div>
                        		<div class="col-sm-6">
                        			<a href="" class="btn btn-warning pull-right">Add Skill</a>
                        		</div>
                        	</div>
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>name</th>
                                        <th>Value</th>
                                        <th>status</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getSkill as $row)    
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->title}}</td>
                                        <td>{{$row->value}}</td>
                                        <td>{{$row->status}}</td>
                                        <td>
                                            <a class="btn btn-info btn-xs" href="{{route('skill.edit', base64_encode($row->id))}}" ><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger btn-xs" href="{{route('skill.delete', base64_encode($row->id))}}" ><i class="fa fa-edit"></i> Delete</a>
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