@extends('layouts.layout')
@section('title')
    Edit Patwar Circle
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Patwar Circle
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.patwarcircle.update',$data->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <label for="">Select District</label>
                                        <select class="form-control" id="district" >
                                            <option value="">Select District</option>
                                            @foreach(DistrictData() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>

                                        <label for="">Select Tehsil</label>
                                        <select name="tehsil_id" class="form-control" id="tehsil" disabled="">
                                            <option value="">Select Tehsil</option>
                                            @foreach(tehsilData() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>

                                        <label for="">Select Qanoongoi</label>
                                        <select name="qanoongoi_id" class="form-control" id="qanoongoi" disabled="">
                                            <option value="">Select Qanoongoi</option>
                                            @foreach(qanoogoiData() as $item)
                                                <option {{ ($data->qanoongoi_id == $item->id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label for="name">Patwar Circle Name</label>
                                        <input type="text" class="form-control" value="{{ $data->name ?? '' }}" placeholder="Patwar Circle Name" name="name">
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

        $("#tehsil").on("change",function (){
            var tehsil = $("#tehsil").val();
            var route = "{{route('dashboard.qanoongoi.show','ID')}}";
            var url = route.replace("ID", tehsil);
            getQanoongoibyTehsilID(url);
        })


    </script>

@endsection
