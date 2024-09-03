@extends('layouts.SIPEKA.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
<!-- Dashboard SIPEKA -->
<div class="card">
    <div class="card-header d-flex align-items-center">
        <h5 class="mb-0">Sistem Informasi Penataan Kawasan</h5>
        <div class="d-inline-flex ms-auto">
            <span class="badge bg-success rounded-pill">28 active</span>
            <div class="dropdown d-inline-flex ms-3">
                <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="ph-gear"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <i class="ph-arrows-clockwise me-2"></i>
                        Update data
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-list-dashes me-2"></i>
                        Detailed log
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-chart-line me-2"></i>
                        Statistics
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ph-eraser me-2"></i>
                        Clear list
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
        <div class="d-flex align-items-center mb-3 mb-sm-0">
            <div id="campaigns-donut"></div>
            <div class="ms-3">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">38,289</h5>
                    <span class="text-success ms-2">
                        <i class="ph-arrow-up fs-base lh-base align-top"></i>
                        (+16.2%)
                    </span>
                </div>
                <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                <span class="text-muted">APPROVED</span>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 mb-sm-0">
            <div id="campaigns-donut"></div>
            <div class="ms-3">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">38,289</h5>
                    <span class="text-warning ms-2">
                        <i class="ph-arrow-up fs-base lh-base align-top"></i>
                        (+16.2%)
                    </span>
                </div>
                <span class="d-inline-block bg-warning rounded-pill p-1 me-1"></span>
                <span class="text-muted">DISCUSS</span>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 mb-sm-0">
            <div id="campaign-status-pie"></div>
            <div class="ms-3">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">2,458</h5>
                    <span class="text-danger ms-2">
                        <i class="ph-arrow-down fs-base lh-base align-top"></i>
                        (-4.9%)
                    </span>
                </div>
                <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                <span class="text-muted">STUCK</span>
            </div>
        </div>

        <div>
            <a href="#" class="btn btn-indigo">
                <i class="ph-file-pdf me-2"></i>
                View report
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table text-nowrap">
            <thead>
                <tr>
                    <th>Provinsi</th>
                    <th>Client</th>
                    <th>Changes</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th class="text-center" style="width: 20px;">
                        <i class="ph-dots-three"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="#" class="d-block me-3">
                                <img src="../../../assets/images/brands/facebook.svg" class="rounded-circle" width="36" height="36" alt="">
                            </a>
                            <div>
                                <a href="#" class="text-body fw-semibold">Jawa Barat</a>
                            </div>
                        </div>
                    </td>
                    <td><span class="text-muted">Mintlime</span></td>
                    <td><span class="text-success"><i class="ph-trend-up me-2"></i> 2.43%</span></td>
                    <td><h6 class="mb-0">$5,489</h6></td>
                    <td><span class="badge bg-primary bg-opacity-10 text-primary">Active</span></td>
                    <td class="text-center">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-line me-2"></i>
                                    View statement
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-pencil me-2"></i>
                                    Edit campaign
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Disable campaign
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    Settings
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<!-- /Dashboard SIPEKA -->
    </div>
</div>
@endsection
