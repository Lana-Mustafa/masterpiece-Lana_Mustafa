@extends('layouts.dashboard')

@section('main-content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">category</i>
            </div>
            <h4 class="card-title">Create Category</h4>
          </div>
          <div class="card-body ">
            <form method="post"action="{{route('categories.store')}}" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="col-md-4 col-sm-4">
                        <h4 class="title" style="color:#9C9C9C" >Category Image</h4>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                            <img src="{{ asset('dashboard-assets/img/image_placeholder.jpg')}}" alt="...">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                          <div>
                            <span class="btn btn-primary btn-round btn-file">
                              <span class="fileinput-new">Select image</span>
                              <span class="fileinput-exists">Change</span>
                              <input 
                                  type="file" 
                                  name="category_img"
                                  required="true"
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
                 
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Name</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="category_name" 
                       type="text" 
                       class="form-control "
                       value="{{old('category_name')}}"
                       required="true"
                       >
                       
                  </div>
                  @error('category_name')
                    <div class="text-danger mt-2">{{ $message }}</div>   
                  @enderror
                </div>
                
              </div>
              
             
              
              <div class="card-footer mt-5 ">
                <div class="row">
                   
                  <div class="col-md-9 ">
                    <button type="submit" class="btn btn-fill btn-primary">Create</button>
                  </div>
                 
                </div>
              </div>
            </form>
          </div>
         
        </div>
      </div>
    <div class="col-md-2"></div>
</div>


@endsection