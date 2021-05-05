@extends('layouts.customized_dashboard')

@section('main-content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">dashboard_customize</i>
            </div>
            <h4 class="card-title">My Products</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Gift For </th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Edit</th>
                    <th>Gallery</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                  <tr>
                    
                    
                    <td><img src="/images/products/{{$product->product_img}}" alt="{{$product->product_name}}" class="rounded img-thumbnail" width="120vw" height="120vh" /></td>
                    <td>{{$product->product_name}}</td> 
                    <td>{{$product->category->category_name}}</td> 
                    <td>{{$product->subcategory->subcategory_name}}</td> 
                    <td>{{$product->gift->giftFor}}</td> 
                    <td>{{$product->product_description}}</td> 
                    <td>{{$product->product_qty}}</td> 
                    <td>{{$product->product_price}}</td> 
                    <td>{{$product->sale_price}}</td> 
                    <td class="td-actions">
                        <a href="{{route('supplierproducts.edit',$product->id )}} "class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">
                            <i class="material-icons">edit</i> 
                        </a>  
                    </td>
                    <td class="td-actions">
                      <a href="{{route('images.show',$product->id )}} "class="btn btn-info btn-lg " tabindex="-1" role="button" aria-disabled="true">
                          <i class="material-icons">photo_library</i> 
                      </a>  
                    </td>
                    <td class="td-actions">
                      <form method="post" action="{{route('supplierproducts.destroy', $product->id)}}">
                        @csrf
                        @method('delete')
                           <button rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                          </button>
                    </form>
                      
                    </td>
                  </tr>
                 
                  
                 
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{$products->links()}}
@endsection
