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
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
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
                                        Photo
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Phone
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Location
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                           @foreach ($users as $u)
                            <tbody>
                                <td class="ps-4">
                                    <p class="text-xs font-weight-bold mb-0">{{ $u->id }}</p>
                                </td>
                                <td>
                                    <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $u->name }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $u->email}}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $u->role }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $u->phone }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $u->location }}</p>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $u->created_at }}</span>
                                </td>
                                <td class="text-center">
                                    <span>
                                        <form action="user-management/{{ $u->id }}" method="POST">
                                            @csrf
                                            @method ('delete')
                                            {{-- <input type="submit" value="Delete"> --}}
                                            <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
                                                <i class="cursor-pointer fas fa-trash text-secondary" value="Delete"></i>
                                            </a>
                                                <a href="user-management/{{ $u->id }}/edit" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                    </span>
                                </td>
                            </tr>
 
                            </tbody>
                            @endforeach
                        </table>
                        {!! $users  ->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection