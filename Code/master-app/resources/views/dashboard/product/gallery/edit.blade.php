@extends('layouts.dashboard')

@section('main-content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">draw</i>
            </div>
            <h4 class="card-title">Edit Image </h4>
          </div>
          <div class="card-body ">
            <form method="post"action={{route('gallery.update', $img->id)}} enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="col-md-4 col-sm-4">
                        <h4 class="title" style="color:#9C9C9C" >Product Image</h4>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                            <img src="/images/products/{{$img->name}}" alt="{{$img->name}}">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                          <div>
                            <span class="btn btn-primary btn-round btn-file">
                              <span class="fileinput-new">Update image</span>
                              <span class="fileinput-exists">Change</span>
                              <input 
                                  type="file" 
                                  name="name"
                                
                                  />
                             
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>

                          
                        </div>
                        @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>   
                        @enderror
                      </div>
                      <div class="col-md-4 col-sm-4"></div>
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
    <div class="col-md-2"></div>
</div>


@endsection