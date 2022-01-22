@extends('layouts.layout')
@section('title')
    Patwar Circle
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
                                        <th>Patwar Circle</th>
                                        <th>Qanoongoi</th>
                                        <th>Tehsil</th>
                                        <th>District</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($patwar_circle as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->Qanoongoi->name }}</td>
                                            <td>{{ $item->Qanoongoi->Tehsil->name }}</td>
                                            <td>{{ $item->Qanoongoi->Tehsil->District->name }}</td>
                                            <td>
                                                <div class="btn-group-sm">
                                                    <a href="{{ route('dashboard.PatwarCircle.edit',$item->id) }}" class="btn btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <button type="button" onclick="deleteFun('{{ $item->id }}','{{ route('dashboard.PatwarCircle.destroy',$item->id) }}')" class="btn btn-danger">
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
                <form action="{{ route('dashboard.PatwarCircle.store') }}" method="POST">
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

                        <label for="name">Patwar Circle Name</label>
                        <input type="text" id="name" name="name" placeholder="Patwar Circle Name" class="form-control">
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

    </script>
@endsection
