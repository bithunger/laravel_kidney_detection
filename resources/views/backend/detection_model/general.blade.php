@extends('layouts.master')
@php
    $pageTitle = 'Detection Model Setting';
@endphp
@section('content')
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
                    <div class="col-md-12 border">
                        <div class="mb-3 btn-transition shadow rounded" style="padding: 10px">
                            <h6>Detection Model Settings:</h6>

                        </div>
                        <form action="{{ route('detection.model.update') }}" id="settingsFrom" autocomplete="off" role="form"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="model_name">Model Name <strong
                                                class="text-danger">*</strong></label>
                                        <input type="text" name="model_name" id="model_name"
                                            class="form-control @error('model_name') is-invalid @enderror"
                                            value="{{ modelSetting('model_name') ?? 'No model found' }}"
                                            placeholder="Model name">
                                        @error('model_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="accuracy">Accuracy <strong class="text-danger">*</strong></label>
                                            <input type="text" name="accuracy" id="accuracy"
                                                class="form-control @error('accuracy') is-invalid @enderror"
                                                value="{{ modelSetting('accuracy') ?? 'No accuracy found' }}"
                                                placeholder="Accuracy">
                                            @error('accuracy')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="precision">Precision <strong class="text-danger">*</strong></label>
                                            <input type="text" name="precision" id="precision"
                                                class="form-control @error('precision') is-invalid @enderror"
                                                value="{{ modelSetting('precision') ?? 'No precision found' }}"
                                                placeholder="Precision">
                                            @error('precision')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="recall">Recall <strong class="text-danger">*</strong></label>
                                            <input type="text" name="recall" id="recall"
                                                class="form-control @error('recall') is-invalid @enderror"
                                                value="{{ modelSetting('recall') ?? 'No recall found' }}"
                                                placeholder="Recall">
                                            @error('recall')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="f1_score">F1-Score <strong class="text-danger">*</strong></label>
                                            <input type="text" name="f1_score" id="f1_score"
                                                class="form-control @error('f1_score') is-invalid @enderror"
                                                value="{{ modelSetting('f1_score') ?? 'No f1_score found' }}"
                                                placeholder="F1-Score">
                                            @error('f1_score')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="roc_curve">Roc Curve<strong class="text-danger">*</strong> (Only image are allowed)</label>
                                        <input type="file" required name="roc_curve" id="roc_curve"
                                            data-default-file="{{ modelSetting('roc_curve') != null ? asset(modelSetting('roc_curve')) : '' }}"
                                            class="form-control dropify  @error('roc_curve') is-invalid @enderror"
                                            data-height="150">
                                        @error('roc_curve')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="confusion_matrix">Confusion Matrics<strong class="text-danger">*</strong> (Only image
                                            are allowed)</label>
                                        <input type="file" required name="confusion_matrix" id="confusion_matrix"
                                            data-default-file="{{ modelSetting('confusion_matrix') != null ? asset(modelSetting('confusion_matrix')) : '' }}"
                                            class="form-control dropify  @error('confusion_matrix') is-invalid @enderror"
                                            data-height="150">
                                        @error('confusion_matrix')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-arrow-circle-up"></i>
                                        <span>Update</span>
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('customCSS')
    <style>


    </style>
@endpush
@push('js')
    <script src="{{ asset('assets/scripts/sweetalert2.all.min.js') }}"></script>
@endpush
@push('customJS')
    <script type="text/javascript"></script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/dropify-master/dist/css/dropify.min.css') }}">
@endpush
@push('js')
    <script src="{{ asset('assets/backend/vendors/dropify-master/dist/js/dropify.min.js') }}"></script>
@endpush
@push('customJS')
    <script type="text/javascript">
        $('.dropify').dropify();
    </script>
@endpush
