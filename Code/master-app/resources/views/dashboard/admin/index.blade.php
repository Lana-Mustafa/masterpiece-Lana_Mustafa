@extends('layouts.dashboard')

@section('main-content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">supervisor_account</i>
            </div>
            <h4 class="card-title">All Admins</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Id </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                  <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->mobile}}</td> 
                    <td class="td-actions">
                      <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#admin_{{$admin->id}}">
                        <i class="material-icons">edit</i>                     
                     </button>
                    </td>
                    <td class="td-actions">
                      <form method="post" action="{{route('admins.destroy', $admin->id)}}">
                        @csrf
                        @method('delete')
                           <button rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                          </button>
                    </form>
                      
                    </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="admin_{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header ">
                            <div class="card-icon primary">
                                <i class="material-icons ">supervisor_account</i>
                              </div>
                          <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            
                                  <form method="post" action="{{route('admins.update',$admin->id)}}" class="form-horizontal">
                                      @csrf
                                      @method('PATCH')
                                    <div class="row">
                                      <label class="col-md-3 col-form-label">Name</label>
                                      <div class="col-md-9">
                                        <div class="form-group has-default">
                                          <input 
                                             name="name" 
                                             type="text" 
                                             class="form-control "
                                             value="{{$admin->name}}"
                                             required="true">
                                            
                                        </div>
                                        @error('name')
                                        <div class="text-danger mt-2">{{ $message }}</div>   
                                        @enderror
                                      </div>
                                      
                                    </div>
                                    <div class="row">
                                      <label class="col-md-3 col-form-label">Mobile</label>
                                      <div class="col-md-9">
                                        <div class="form-group has-default">
                                          <input 
                                             name="mobile" 
                                             type="text" 
                                             class="form-control"
                                             value="{{$admin->mobile}}"
                                             required="true">
                                             
                                        </div>
                                            @error('mobile')
                                             <div class="text-danger mt-2">{{ $message }}</div>   
                                             @enderror
                                      </div>
                                      
                                    </div>
                                    <div class="row">
                                      <label class="col-md-3 col-form-label">Email</label>
                                      <div class="col-md-9">
                                        <div class="form-group has-default">
                                          <input 
                                             name="email"  
                                             type="email" 
                                             class="form-control "
                                             value="{{$admin->email}}"
                                             required="true">
                                             
                                        </div>
                                            @error('email')
                                             <div class="text-danger mt-2">{{ $message }}</div>   
                                             @enderror
                                      </div>
                                      
                                    </div>
                                   
                                     <div class="card-footer mt-5 ">
                                      <div class="row">
                                         
                                        <div class="col-md-9 ">
                                          <button type="submit" class="btn btn-fill btn-primary">Update</button>
                                        </div>
                                       
                                      </div>
                                    </div>
                                  </form>
                                
                        </div>
                      
                      </div>
                    </div>
                 
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  


  @endsection