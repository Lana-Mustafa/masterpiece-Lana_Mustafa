@extends('layouts.dashboard')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">category</i>
            </div>
            <h4 class="card-title">All Categories</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                   
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                  <tr>
                    
                    <td>{{$category->id}}</td>
                    <td><img src="/images/categories/{{ $category->category_img }}" class="rounded img-thumbnail" width="120vw" height="120vh" /></td>
                    <td>{{$category->category_name}}</td> 
                    <td class="td-actions">
                      <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#category_{{$category->id}}">
                        <i class="material-icons">edit</i>                     
                     </button>
                    </td>
                    <td class="td-actions">
                      <form method="post" action="{{route('categories.destroy', $category->id)}}">
                        @csrf
                        @method('delete')
                           <button rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                          </button>
                    </form>
                      
                    </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="category_{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header ">
                            <div class="card-icon primary">
                                <i class="material-icons ">category</i>
                              </div>
                          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            
                                  <form method="post" action="{{route('categories.update',$category->id)}}" class="form-horizontal" enctype="multipart/form-data">
                                      @csrf
                                      @method('PATCH')
                                    
                                      <div class="row">
                                        <div class="col-md-4 col-sm-4"></div>
                                        <div class="col-md-4 col-sm-4">
                                            <h4 class="title"style="color:#9C9C9C " >Category Image</h4>
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                              <div class="fileinput-new thumbnail">
                                                <img src="/images/categories/{{ $category->category_img }}" alt="...">
                                              </div>
                                              <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                              <div>
                                                <span class="btn btn-primary btn-round btn-file">
                                                  <span class="fileinput-new">Select image</span>
                                                  <span class="fileinput-exists">Change</span>
                                                  <input 
                                                      type="file" 
                                                      name="category_img"
                                                      
                                                      />
                                                 
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                              </div>
                                              
                                            </div>
                                             @error('category_img')
                                              <div class="text-danger mt-2">{{ $message }}</div>   
                                              @enderror
                                          </div>
                                          <div class="col-md-4 col-sm-4"></div>
                                      </div>
                                    
                                      <div class="row">
                                      <label class="col-md-3 col-form-label">Name</label>
                                      <div class="col-md-9">
                                        <div class="form-group has-default">
                                          <input 
                                             name="category_name" 
                                             type="text" 
                                             class="form-control "
                                             value="{{$category->category_name}}"
                                             required="true">
                                             
                                        </div>
                                             @error('category_name')
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
