@extends('layouts.master')
@php
    $pageTitle = 'Dashboard';
@endphp
@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle ?? '' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">

            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-gradient-default color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ modelSetting('model_name') ?? 'Not defined' }}</h2>
                                <div class="m-b-5">Model name</div><i class="fa fa-newspaper-o widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="ibox bg-gradient-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ modelSetting('accuracy') ?? 'Not defined' }}</h2>
                                <div class="m-b-5">Accuracy</div><i class="ti-bar-chart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="ibox bg-gradient-primary color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ modelSetting('precision') ?? 'Not defined' }}</h2>
                                <div class="m-b-5">Precision</div><i class="ti-bar-chart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="ibox bg-gradient-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ modelSetting('recall') ?? 'Not defined' }}</h2>
                                <div class="m-b-5">Recall</div><i class="ti-bar-chart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="ibox bg-gradient-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ modelSetting('f1_score') ?? 'Not defined' }}</h2>
                                <div class="m-b-5">F1-Score</div><i class="ti-bar-chart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-5">
                        <div class="ibox" style="width: 450px">
                            <div class="ibox-head">
                                <div class="ibox-title">Confusion Matrix</div>
                            </div>
                            <div class="ibox-body">
                                <img src="{{ asset(modelSetting('confusion_matrix')) }}" alt="Confusion Matrix">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Roc Curve</div>
                            </div>
                            <div class="ibox-body">
                                <img src="{{ asset(modelSetting('roc_curve')) }}" alt="Roc Curve">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
