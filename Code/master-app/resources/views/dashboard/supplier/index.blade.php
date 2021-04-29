@extends('layouts.dashboard')

@section('main-content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">people_outline</i>
            </div>
            <h4 class="card-title">All Suppliers</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                   
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $supplier)
                  <tr>
                    
                    <td>{{$supplier->id}}</td>
                    <td><img src="/images/suppliers/{{ $supplier->img }}" class="rounded img-thumbnail" width="120vw" height="120vh" /></td>
                    <td>{{$supplier->name}}</td> 
                    <td>{{$supplier->email}}</td> 
                    <td>{{$supplier->mobile}}</td>   
                    <td class="td-actions">
                      <form method="post" action="{{route('suppliers.destroy', $supplier->id)}}">
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

