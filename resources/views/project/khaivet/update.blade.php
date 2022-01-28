@extends('layouts.layout')
@section('title')
    Edit Khaivet
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Khaivet
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.khaivet.update',$data->id) }}" method="post">
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
                                        <select class="form-control" id="tehsil" disabled="">
                                            <option value="">Select Tehsil</option>
                                        </select>
                                        <br>

                                        <label for="">Select Qanoongoi</label>
                                        <select class="form-control" id="qanoongoi" disabled="">
                                            <option value="">Select  Qanoongoi</option>
                                        </select>
                                        <br>

                                        <label for="">Select Patwar Circle</label>
                                        <select class="form-control" id="patwar_circle" disabled="">
                                            <option value="">Select  Patwar Circle</option>
                                        </select>
                                        <br>

                                        <label for="">Select Mauza</label>
                                        <select name="mauza_id" class="form-control" id="mauza" disabled="">
                                            <option value="">Select Mauza</option>
                                            @foreach(murabbaNumberData() as $item)
                                                <option {{ ($data->mauza_id == $item->id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label for="name">Khaivet</label>
                                        <input type="text" class="form-control" value="{{ $data->name ?? '' }}" placeholder="Khaivet" name="name">
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

        $("#qanoongoi").on("change",function (){
            var qanoongoi = $("#qanoongoi").val();
            var route = "{{route('dashboard.PatwarCircle.show','ID')}}";
            var url = route.replace("ID", qanoongoi);
            getPatwarCirclebyQanoogoiID(url);
        })
        $("#patwar_circle").on("change",function (){
            var patwar_circle = $("#patwar_circle").val();
            var route = "{{route('dashboard.mauza.show','ID')}}";
            var url = route.replace("ID", patwar_circle);
            getMauzabyPatwarCircleID(url);
        })

    </script>

@endsection
