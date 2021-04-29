@extends('layouts.dashboard')

@section('main-content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">workspaces</i>
            </div>
            <h4 class="card-title">All Subcategories</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                   
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                  <tr>
                    
                    <td>{{$subcategory->id}}</td>
                    <td>{{$subcategory->subcategory_name}}</td> 
                    <td>{{$subcategory->category->category_name}}</td> 
                    <td class="td-actions">
                        <a href="{{route('subcategories.edit', $subcategory->id)}}" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">
                            <i class="material-icons">edit</i> 
                            </a
                                            
                     
                    </td>
                    <td class="td-actions">
                      <form method="post" action="{{route('subcategories.destroy', $subcategory->id)}}">
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
