@extends('layouts.layout')
@section('title')
    Khasra
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary float-right" onclick="newModal()">New</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Khasra</th>
                                        <th>Khatooni</th>
                                        <th>Khaivet</th>
                                        <th>Mauza</th>
                                        <th>Patwar Circle</th>
                                        <th>Qanoongoi</th>
                                        <th>Tehsil</th>
                                        <th>District</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($khasra as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->khatooni->name }}</td>
                                            <td>{{ $item->khatooni->khaivet->name }}</td>
                                            <td>{{ $item->khatooni->khaivet->mauza->name }}</td>
                                            <td>{{ $item->khatooni->khaivet->mauza->patwar_circle->name }}</td>
                                            <td>{{ $item->khatooni->khaivet->mauza->patwar_circle->Qanoongoi->name }}</td>
                                            <td>{{ $item->khatooni->khaivet->mauza->patwar_circle->Qanoongoi->Tehsil->name }}</td>
                                            <td>{{ $item->khatooni->khaivet->mauza->patwar_circle->Qanoongoi->Tehsil->District->name }}</td>
                                            <td>
                                                <div class="btn-group-sm">
                                                    <a href="{{ route('dashboard.khasra.edit',$item->id) }}" class="btn btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <button type="button" onclick="deleteFun('{{ $item->id }}','{{ route('dashboard.khasra.destroy',$item->id) }}')" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.Main content -->


    {{-- Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @yield('title')
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('dashboard.khasra.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="">Select District</label>
                        <select class="form-control" id="district">
                            <option value="">Select District</option>
                            @foreach(DistrictData() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                        <label for="">Select Tehsil</label>
                        <select class="form-control" id="tehsil" disabled="">
                            <option value="">Select Tehsil</option>
                        </select>

                        <label for="">Select Qanoongoi</label>
                        <select name="qanoongoi_id" class="form-control" id="qanoongoi" disabled="">
                            <option value="">Select Qanoongoi</option>
                        </select>

                        <label for="">Select Patwar Circle</label>
                        <select name="patwar_circle_id" class="form-control" id="patwar_circle" disabled="">
                            <option value="">Select Patwar Circle</option>
                        </select>

                        <label for="">Select Mauza</label>
                        <select name="mauza_id" class="form-control" id="mauza" disabled="">
                            <option value="">Select Mauza</option>
                        </select>

                        <label for="">Select Khaivet</label>
                        <select name="khaivet_id" class="form-control" id="khaivet" disabled="">
                            <option value="">Select Khaivet</option>
                        </select>

                        <label for="">Select Khatooni</label>
                        <select name="khatooni_id" class="form-control" id="khatooni" disabled="">
                            <option value="">Select Khatooni</option>
                        </select>

                        <label for="name">Khasra</label>
                        <input type="text" id="name" name="name" placeholder="Khasra" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

        $("#mauza").on("change",function (){
            var mauza = $("#mauza").val();
            var route = "{{route('dashboard.khaivet.show','ID')}}";
            var url = route.replace("ID", mauza);
            getKhaivetbyMauzaID(url);
        })


        $("#khaivet").on("change",function (){
            var khaivet = $("#khaivet").val();
            var route = "{{route('dashboard.khatooni.show','ID')}}";
            var url = route.replace("ID", khaivet);
            getKhatoonibyKhaivetID(url);
        })

    </script>
@endsection
