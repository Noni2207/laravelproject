@extends('layouts.admin')
 
@section('content')

<!-- Customers - all.reservation.blade.php -->

<div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All Reservations</h2>
                            <p class="pageheader-text">some text</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Reservetions</li>
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
                                <h5 class="card-header">All Reservetions</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Guestes Total</th>
                                                <th scope="col">Date created</th>
                                          <!--      <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>  -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jonny Depp</td>
                                                <td>name@exsemple.com</td>
                                                <td>781-298-5768</td>
                                                <td>4</td>
                                                <td>2/2/2020</td>
                                             <!--   <td><a href="/admin/food-items/1/edit"><i class="far fa-edit"></i></a></td>
                                                <td><a href="/admin/food-items/1/delete" onclick="if(!confirm('Are you sure you want delete category?')) {return false;}"><i class="far fa-trash-alt"></i></a></td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
@endsection