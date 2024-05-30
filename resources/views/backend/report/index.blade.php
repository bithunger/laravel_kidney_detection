@extends('layouts.master')
@php
    $pageTitle = 'Kidney disease Report';
@endphp
@section('content')
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle ?? '' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">
                <a href="{{ url('report') }}" class="btn bg-primary text-white"><i class="fa fa-reply"></i> Back to
                    Detection</a>
            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table style="width: 100%;" id="example"
                            class="table table-hover table-striped table-bordered dtr-inline" role="grid"
                            aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th>
                                        <h1>
                                            <b>Your kidney disease type</b>
                                            @if ($output == '0')
                                                <b class="text-danger">Cyst</b>
                                            @elseif ($output == '1')
                                                <b class="text-danger">Stone</b>
                                            @elseif ($output == '2')
                                                <b class="text-danger">Tumor</b>
                                            @elseif ($output == '3')
                                                <b class="text-primary">Normal</b>
                                            @endif
                                        </h1>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @push('css')
    <link href="{{ asset('assets/backend/vendors/DataTables/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/vendors/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{ asset('assets/backend/vendors/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/sweet-alert/sweetalert2.all.min.js') }}"></script>
@endpush
@push('customCSS')

@endpush
@push('customJS')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
@endpush --}}
