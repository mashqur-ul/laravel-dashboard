@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">System Overview</h5>
                </div>
                <div class="card-body">
                    <div class="netdata-chart-row">
                        <div class="netdata-container-easypiechart" style="margin-right: 10px; width: 9%;"
                             data-netdata="system.swap" data-dimensions="used" data-append-options="percentage"
                             data-chart-library="easypiechart" data-title="Used Swap" data-units="%"
                             data-easypiechart-max-value="100" data-width="9%" data-before="0" data-after="-420"
                             data-points="420" data-colors="#DD4400" role="application">
                        </div>
                        <div class="netdata-container-easypiechart" style="margin-right: 10px; width: 11%;"
                             data-netdata="system.io" data-dimensions="in" data-chart-library="easypiechart"
                             data-title="Disk Read" data-width="11%" data-before="0" data-after="-420"
                             data-points="420"
                             data-common-units="system.io.mainhead" role="application">
                        </div>
                        <div class="netdata-container-easypiechart" style="margin-right: 10px; width: 11%;"
                             data-netdata="system.io" data-dimensions="out" data-chart-library="easypiechart"
                             data-title="Disk Write" data-width="11%" data-before="0" data-after="-420"
                             data-points="420"
                             data-common-units="system.io.mainhead" role="application">
                        </div>
                        <div class="netdata-container-gauge" style="margin-right: 10px; width: 20%;"
                             data-netdata="system.cpu"
                             data-chart-library="gauge" data-title="CPU" data-units="%" data-gauge-max-value="100"
                             data-width="20%" data-after="-420" data-points="420" data-colors="#22AA99"
                             role="application">
                        </div>
                        <div class="netdata-container-easypiechart" style="margin-right: 10px; width: 11%;"
                             data-netdata="system.net" data-dimensions="received" data-chart-library="easypiechart"
                             data-title="Net Inbound" data-width="11%" data-before="0" data-after="-420"
                             data-points="420"
                             data-common-units="system.net.mainhead" role="application">
                        </div>
                        <div class="netdata-container-easypiechart" style="margin-right: 10px; width: 11%;"
                             data-netdata="system.net" data-dimensions="sent" data-chart-library="easypiechart"
                             data-title="Net Outbound" data-width="11%" data-before="0" data-after="-420"
                             data-points="420"
                             data-common-units="system.net.mainhead" role="application">
                        </div>
                        <div class="netdata-container-easypiechart" style="margin-right: 10px; width: 9%;"
                             data-netdata="system.ram" data-dimensions="used|buffers|active|wired"
                             data-append-options="percentage" data-chart-library="easypiechart"
                             data-title="Used RAM"
                             data-units="%" data-easypiechart-max-value="100" data-width="9%" data-after="-420"
                             data-points="420" data-colors="#EE9911" role="application">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Resource Utilization</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_system_cpu"
                                 data-netdata="system.cpu"
                                 data-width="100%" data-height="180px" data-dygraph-valuerange="[0, 100]"
                                 data-before="0"
                                 data-after="-420" data-colors=""
                                 data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_system_load"
                                 data-netdata="system.load"
                                 data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]"
                                 data-before="0" data-after="-420" data-colors=""
                                 data-decimal-digits="-1" role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_system_processes"
                                 data-netdata="system.processes" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_system_ram"
                                 data-netdata="system.ram"
                                 data-width="100%" data-height="180px" data-dygraph-valuerange="[null, null]"
                                 data-before="0" data-after="-420" data-colors=""
                                 data-decimal-digits="-1" role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">IPV4 Networking</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_ipv4_tcpsock"
                                 data-netdata="ipv4.tcpsock" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_ipv4_sockstat_tcp_sockets"
                                 data-netdata="ipv4.sockstat_tcp_sockets" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_ipv4_tcppackets"
                                 data-netdata="ipv4.tcppackets" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_ipv4_sockstat_tcp_mem"
                                 data-netdata="ipv4.sockstat_tcp_mem" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Disk Utilization</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_disk_space__"
                                 data-netdata="disk_space._" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="netdata-container-with-legend" id="chart_disk_inodes__"
                                 data-netdata="disk_inodes._" data-width="100%" data-height="180px"
                                 data-dygraph-valuerange="[null, null]" data-before="0" data-after="-420"
                                 data-id="Laravel_Dashboard_disk_inodes__" data-colors="" data-decimal-digits="-1"
                                 role="application" style="height: 180px; width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('include_js')
    <script src="{{ asset("assets/netdata/dashboard-conf.js") }}"></script>
    <script src="http://{{config('netdata.host')}}:{{config('netdata.port')}}/dashboard.js"></script>
@endpush

