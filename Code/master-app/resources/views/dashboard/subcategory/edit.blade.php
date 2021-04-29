@extends('layouts.dashboard')

@section('main-content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">workspaces</i>
            </div>
            <h4 class="card-title">Edit Subcategory</h4>
          </div>
          <div class="card-body ">
            <form method="post" action="{{route('subcategories.update',$subcategory->id)}}" class="form-horizontal" >
                @csrf
                @method('PATCH')
              
                
                <div class="row">
                <label class="col-md-3 col-form-label">Name</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="subcategory_name" 
                       type="text" 
                       class="form-control "
                       value="{{$subcategory->subcategory_name}}"
                       required="true">
                       
                  </div>
                       @error('subcategory_name')
                       <div class="text-danger mt-2">{{ $message }}</div>   
                       @enderror
                </div>
                
              </div>
              <div class="row mt-3">
                  <label class="col-md-3 col-form-label">Category</label>
                  <div class="col-lg-5 col-md-6 col-sm-3">
                    <select  name="category_id" class="selectpicker" data-style="select-with-transition" title="update category" data-size="7" required="true">
                               @foreach ($categories as $category)
                                   <option value="{{$category->id}}" {{ ($subcategory->category_id == $category->id) ? 'selected' : '' }} >{{$category->category_name}} </option>
                               @endforeach
                    </select>
                  </div>
                  @error('category_id')
                  <div class="text-danger mt-2">{{ $message }}</div>   
                  @enderror
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