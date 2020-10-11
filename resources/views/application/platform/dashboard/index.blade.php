@extends('partials.app')


    @section('content')
        @include('partials.navbar_app')

        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="element-wrapper">
                            <h6 class="element-header">
                                Dashboard Box
                            </h6>
                            <div class="element-box">
                                <div class="element-info">
                                    <div class="row align-items-center">
                                        <div class="col-sm-8">
                                            <div class="element-info-with-icon">
                                                <div class="element-info-icon">
                                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                                </div>
                                                <div class="element-info-text">
                                                    <h5 class="element-inner-header">
                                                        Sales Statistics
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-search">
                                                <input placeholder="Type to search for products..." type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="row">
                                            <div class="col-sm-6 b-r b-b">
                                                <div class="el-tablo centered padded">
                                                    <div class="value">
                                                        {{ count($Businesses) }}
                                                    </div>
                                                    <div class="label">
                                                        Businesses Registered
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 b-b">

                                                <livewire:online>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 b-r">
                                                <div class="el-tablo centered padded">
                                                    <div class="value">
                                                        5
                                                    </div>
                                                    <div class="label">
                                                        Possible Temporary Staff
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="el-tablo centered padded">
                                                    <div class="value">
                                                        12
                                                    </div>
                                                    <div class="label">
                                                        Possible Temporary Staff Cost
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="padded b-l b-r-xl">
                                            <div class="element-info-with-icon smaller">
                                                <div class="element-info-icon">
                                                    <div class="os-icon os-icon-bar-chart-stats-up"></div>
                                                </div>
                                                <div class="element-info-text">
                                                    <h5 class="element-inner-header">
                                                        Monthly Revenue
                                                    </h5>
                                                    <div class="element-inner-desc">
                                                        Calculated every month
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="os-progress-bar primary">
                                                <div class="bar-labels">
                                                    <div class="bar-label-left">
                                                        <span>Accessories</span><span class="positive">+10</span>
                                                    </div>
                                                    <div class="bar-label-right">
                                                        <span class="info">72/100</span>
                                                    </div>
                                                </div>
                                                <div class="bar-level-1" style="width: 100%">
                                                    <div class="bar-level-2" style="width: 60%">
                                                        <div class="bar-level-3" style="width: 20%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="os-progress-bar primary">
                                                <div class="bar-labels">
                                                    <div class="bar-label-left">
                                                        <span>Shoe Sales</span><span class="negative">-5</span>
                                                    </div>
                                                    <div class="bar-label-right">
                                                        <span class="info">62/100</span>
                                                    </div>
                                                </div>
                                                <div class="bar-level-1" style="width: 100%">
                                                    <div class="bar-level-2" style="width: 40%">
                                                        <div class="bar-level-3" style="width: 10%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="os-progress-bar primary">
                                                <div class="bar-labels">
                                                    <div class="bar-label-left">
                                                        <span>New Customers</span><span class="positive">+12</span>
                                                    </div>
                                                    <div class="bar-label-right">
                                                        <span class="info">78/100</span>
                                                    </div>
                                                </div>
                                                <div class="bar-level-1" style="width: 100%">
                                                    <div class="bar-level-2" style="width: 80%">
                                                        <div class="bar-level-3" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-xl-block col-xl-4">
                                        <div class="padded">
                                            <div class="el-tablo bigger">
                                                <div class="value">
                                                    245
                                                </div>
                                                <div class="trending trending-up">
                                                    <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                                                </div>
                                                <div class="label">
                                                    Products Sold
                                                </div>
                                            </div>
                                            <div class="el-chart-w">
                                                <canvas height="100" id="liteLineChart" width="300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="element-wrapper">
                    <h6 class="element-header">
                        Your Registered Businesses
                    </h6>
                    <div class="col-sm-6">
                        <a class="btn btn-sm btn-secondary" href="{{ route('create.business') }}">Create Business</a>
                    </div>
                    <div class="element-box-tp">
                        <div class="table-responsive">
                            <table class="table table-padded">
                                <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th class="text-center">
                                        About
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach($Businesses as $business)
                                <tr>
                                    <td class="nowrap">
                                        <span>{{ $business->business }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $business->name }}</span>
                                    </td>
                                    <td >
                                        <span>{{ $business->type }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $business->type }}</span>
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    @stop
