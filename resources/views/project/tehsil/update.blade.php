@extends('layouts.layout')
@section('title')
    Edit Tehsil
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Tehsil
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.tehsil.update',$data->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <label for="">Select District</label>
                                        <select name="district_id" class="form-control" id="">
                                            <option value="">Select Tehsil</option>
                                            @foreach(DistrictData() as $item)
                                                <option {{ ($data->district_id == $item->id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label for="name">Tehsil Name</label>
                                        <input type="text" class="form-control" value="{{ $data->name ?? '' }}" placeholder="District Name" name="name">
                                        <br>
                                        <button class="btn btn-success float-right">Update</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.Main content -->

@endsection
