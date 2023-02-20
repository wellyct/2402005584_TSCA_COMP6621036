@extends('layouts.user_type.auth')

@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success mx-4" role="alert" >
	<span class="text-white">
    <strong> {{ $message }} </strong>
    </span>
</div>
@endif

<div>





    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Products</h5>
                        </div>
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Products</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">




                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Product Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Category
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Quantity
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                           @foreach ($products as $p)
                            <tbody>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $p->id }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $p->name}}</p>
                                </td>
                                <td class="text-center">
                                  <p class="text-xs font-weight-bold mb-0">{{ $p->category_id}}</p>
                              </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $p->price }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $p->qty }}</p>
                                </td>

                                <td class="text-center">
                                    <span>
                                        <form action="user-management/{{ $p->id }}" method="POST">
                                            @csrf
                                            @method ('delete')
                                            {{-- <input type="submit" value="Delete"> --}}
                                            <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                <i class="cursor-pointer fas fa-trash text-secondary" value="Delete"></i>
                                            </a>
                                                <a href="user-management/{{ $p->id }}/edit" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                    </span>
                                </td>
                            </tr>
 
                            </tbody>
                            @endforeach
                        </table>
                        {!! $products  ->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection