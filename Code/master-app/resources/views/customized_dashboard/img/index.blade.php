@extends('layouts.customized_dashboard')

@section('main-content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">photo_library</i>
            </div>
            <h4 class="card-title"> <a style ="color:#000"href={{route('supplierproducts.index')}}> <strong>{{$product->product_name}}</strong>'s</a> Images</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                   
                    <th>Id</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($imgs as $img)
                  <tr>
                    
                    <td>{{$img->id}}</td>
                    <td><img src="/images/products/{{$img->name}}" alt="{{$img->name}}" class="rounded img-thumbnail" width="120vw" height="120vh" /></td>
            
                    <td class="td-actions">
                        <a href="{{route('images.edit',$img->id)}} "class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">
                            <i class="material-icons">edit</i> 
                        </a>  
                    </td>
                    
                    <td class="td-actions">
                      <form method="post" action="{{route('images.destroy', $img->id)}}">
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

@endsection
