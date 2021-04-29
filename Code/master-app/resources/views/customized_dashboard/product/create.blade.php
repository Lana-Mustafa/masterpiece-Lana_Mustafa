@extends('layouts.customized_dashboard')

@section('style')
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
.form-select{
  border: none;
  border-radius: 0%;
  border-bottom:1px solid #6c757d;
  color:  #6c757d !important;
 
}

</style>
@endsection
@section('main-content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card ">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">dashboard_customize</i>
            </div>
            <h4 class="card-title">Create Product</h4>
          </div>
          <div class="card-body ">
            <form method="post"action={{route('supplierproducts.store')}} enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="col-md-4 col-sm-4">
                        <h4 class="title" style="color:#9C9C9C" >Product Image</h4>
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
                                  name="product_img"
                                  required="true"
                                  />
                             
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>

                          
                        </div>
                        @error('product_img')
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
                       name="product_name" 
                       type="text" 
                       class="form-control "
                       value="{{old('product_name')}}"
                       required="true"
                       >
                       
                  </div>
                  @error('product_name')
                    <div class="text-danger mt-2">{{ $message }}</div>   
                  @enderror
                </div>
                
              </div>
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Description</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <textarea 
                       name="product_description" 
                       type="text" 
                       class="form-control "
                       row=3
                       required="true"
                       >
                    {{old('product_description')}}
                    </textarea>
                       
                  </div>
                  @error('product_description')
                    <div class="text-danger mt-2">{{ $message }}</div>   
                  @enderror
                </div>
                
              </div>
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Price</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="product_price" 
                       type="text" 
                       class="form-control "
                       value="{{old('product_price')}}"
                       required="true"
                       >
                       
                  </div>
                  @error('product_price')
                    <div class="text-danger mt-2">{{ $message }}</div>   
                  @enderror
                </div>
                
              </div>
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Sale Price</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="sale_price" 
                       type="text" 
                       class="form-control"
                       value="{{old('sale_price')}}"
                      
                       >
                       
                  </div>
                  
                </div>
              </div>
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Quantity</label>
                <div class="col-md-9">
                  <div class="form-group has-default">
                    <input 
                       name="product_qty" 
                       type="text" 
                       class="form-control"
                       value="{{old('product_qty')}}"
                      
                       >
                       
                  </div>
                  
                </div>
              </div>
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Gift For</label>
                <div class="col-lg-5 col-md-6 col-sm-3">
                  <select name="gift_id" class="selectpicker" data-style="select-with-transition"  title="Gift For ..." data-size="7" required="true">
                             @foreach ($gifts as $gift)
                                 <option  value="{{$gift->id}}">{{$gift->giftFor}} </option>
                             @endforeach
                    
                  </select>
                </div>
                @error('gift_id')
                <div class="text-danger mt-2">{{ $message }}</div>   
                @enderror
              </div>
              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Category</label>
                <div class="col-lg-5 col-md-6 col-sm-3">
                  <select name="select-category" class="selectpicker" data-style="select-with-transition" value="{{ old('select-category') }}"  title="Category" data-size="7" required="true">
                             @foreach ($categories as $category)
                                 <option  value="{{$category->id}}">{{$category->category_name}} </option>
                             @endforeach
                    
                  </select>
                </div>
                @error('select-category')
                <div class="text-danger mt-2">{{ $message }}</div>   
                @enderror
              </div>
             

              <div class="row mt-3">
                <label class="col-md-3 col-form-label">SubCategory</label>
                <div class="col-lg-5 col-md-6 col-sm-3">
                  <select name="subcategory_id" value="{{ old('subcategory_id') }}" class="form-select form-select-sm" >
                             
                    <option selected hidden>Select subcategories</option>

                  </select>
                </div>
                @error('subcategory_id')
                <div class="text-danger mt-2">{{ $message }}</div>   
                @enderror
              </div>

              <div class="row mt-3">
                <label class="col-md-3 col-form-label">Gallery</label>
                <div class="col-md-9">
                    <input multiple name="imgs[]" type="file"   />        
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('select[name="select-category"]').on('change', function() {
            // console.log("hi")
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    url: '/supplier/showSubcategories/' + category_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('select[name="subcategory_id"]').empty();
                        $('select[name="subcategory_id"]').append('<option  selected hidden> Select subcategories  </option>');
                        $.each(data, function(key, value) {
                            $('select[name="subcategory_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            }
        });
    })
</script>  



@endsection

