@extends('layouts.backend.master')
@section('title')
    Daftar Product
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                            <i class="bi bi-check-square-fill"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Product Publish</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="d-flex justify-content-start">
                        <div class="stats-icon purple mb-2">
                            <i class="bi bi-info-square-fill"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-muted font-semibold">Product Draft</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">Using the most basic table up, here’s how
                        <code>.table</code>-based tables look in Bootstrap. You can use any example
                        of below table for your table and it can be use with any type of bootstrap tables.
                    </p>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>CATEGORY</th>
                                    <th>PRICE</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-bold-500">Source Code Whatsapp Gateway</td>
                                    <td>PHP</td>
                                    <td>Rp. 100.000</td>
                                    <td>
                                        <span class="badge bg-warning">DRAFT</span>
                                    </td>
                                    <td class="text-bold-500">
                                        <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn icon btn-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-bold-500">Source Code Whatsapp Gateway</td>
                                    <td>PHP</td>
                                    <td>Rp. 100.000</td>
                                    <td>
                                        <span class="badge bg-success">PUBLISH</span>
                                    </td>
                                    <td class="text-bold-500">
                                        <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn icon btn-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
