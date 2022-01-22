@extends('layouts.layout')
@section('title')
    Edit District
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit District
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.district.update',$data->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <label for="name">District Name</label>
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

@section('Script')
    <script>
        function newModal() {
            $("#districtModal").modal('show');
        }
    </script>

@endsection
