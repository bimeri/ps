@extends('layout.base')

@section('title')
    Admin Dashboard
@endsection


@section('section')
    <div>
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>User Roles</h3>
                        </div>

                       <div>
                           <a href="{{route('roles.create')}}" class="ml-auto fw-btn-fill btn-gradient-yellow">Add Role</a>
                       </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->byLocale()->name}}</td>
                                    <td align="right">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                               aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{route('roles.edit',$role->slug)}}?role={{$role->slug}}"><i
                                                        class="fas fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="{{route('user.index')}}?role={{$role->slug}}"><i
                                                        class="fas fa-user"></i> Users</a>
                                                <a class="dropdown-item" href="{{route('roles.permissions')}}?role={{$role->slug}}"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i> Permissions</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Transport List Area End Here -->
    </div>
    <!-- All Subjects Area End Here -->
@endsection
