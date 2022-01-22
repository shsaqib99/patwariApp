@extends('layouts.layout')
@section('title')
    Edit Qanoongoi
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Qanoongoi
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.qanoongoi.update',$data->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <label for="">Select District</label>
                                        <select class="form-control" id="district" >
                                            <option value="">Select District</option>
                                            @foreach(DistrictData() as $item)
                                                <option {{ ($data->district_id == $item->id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>

                                        <label for="">Select Tehsil</label>
                                        <select name="tehsil_id" class="form-control" id="tehsil" disabled="">
                                            <option value="">Select Tehsil</option>
                                            @foreach(tehsilData() as $item)
                                                <option {{ ($data->tehsil_id == $item->id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label for="name">Qanoongoi Name</label>
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

        $("#district").on("change",function (){
            var district = $("#district").val();
            var route = "{{route('dashboard.tehsil.show','ID')}}";
            var url = route.replace("ID", district);
            getTehsilbyDistrictID(url);
        })


    </script>

@endsection
