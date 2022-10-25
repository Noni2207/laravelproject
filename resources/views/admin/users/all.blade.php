@extends('layouts.admin')
 
@section('content')

<!-- Users - all.blade.php -->

            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Users </h2>
                            <p class="pageheader-text">some text</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Users</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date created</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                                <th scope="row">{{$user->id}}</th>
                                                <td>{{$user->fname}} {{$user->lname}}</td>
                                                <td>{{date('m/d/Y', strtotime ($user->update_at))}}</td>
                                                <td><a href="/admin/users/{{$user->id}}/edit"><i class="far fa-edit"></i></a></td>
                                                <td><a href="/admin/users/{{$user->id}}/delete" onclick="if(!confirm('Are you sure you want delete category?')) {return false;}"><i class="far fa-trash-alt"></i></a></td>
                                        </tr>     
                                         @endforeach
                                        </tbody>
                                    </table>
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
@endsection