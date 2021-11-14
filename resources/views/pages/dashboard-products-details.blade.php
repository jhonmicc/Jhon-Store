@extends('layouts.dashboard')

@section('title')
    Store Dashboard Settings
@endsection

@section('content')
    {{-- Section Content --}}
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Store Settings</h2>
                <p class="dashboard-subtitle">Make store that profitable</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Store Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category" class="form-control">
                                                    <option value="" disabled>Select Category
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Store Status</label>
                                                <p class="text-muted">Apakah saat ini toko Anda buka?</p>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                                        id="openStoreTrue" value="true">
                                                    <label class="custom-control-label" for="openStoreTrue">Buka</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                                        id="openStoreFalse" value="false">
                                                    <label class="custom-control-label" for="openStoreFalse">Sementara
                                                        Tutup</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-right col">
                                            <button type="submit" class="px-5 btn btn-success">Save
                                                Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
