@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add-res.css') }}">
    <div class="center" id="add-content">
        <div id="add-select">
            <h3>Chọn phương thức tạo KPI</h3>
            <div class="list-option">
                <div class="option-item center" id="btn-file-upload">
                    <span>Tải danh sách công việc</span>
                </div>
                <div class="option-item center" id="btn-create-new-work">
                    <span>Thiết lập công việc mới</span>
                </div>
            </div>
        </div>
        @include('add-new-kpi')
        @include('add-work')
        @include('select-file')
        @include('modal-create-work')
    </div>
    <script src="{{ asset('js/add.js') }}"></script>
@endsection
