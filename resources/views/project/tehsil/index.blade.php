@extends('layouts.layout')
@section('title')
    Tehsil
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
                                        <th>District Name</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(tehsilData() as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ \App\Models\District::find($item->district_id)->name }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <div class="btn-group-sm">
                                                    <a href="{{ route('dashboard.tehsil.edit',$item->id) }}" class="btn btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <button type="button" onclick="deleteFun('{{ $item->id }}','{{ route('dashboard.tehsil.destroy',$item->id) }}')" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form action="{{ route('dashboard.tehsil.destroy',$item->id) }}" method="post" id="deleteForm">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
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
    <div class="modal fade" id="districtModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form action="{{ route('dashboard.tehsil.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="">Select District</label>
                        <select name="district_id" class="form-control" id="">
                            <option value="">Select District</option>
                            @foreach(DistrictData() as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                        <label for="name">Tehsil Name</label>
                        <input type="text" id="name" name="name" placeholder="Tehsil Name" class="form-control">
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
        function newModal() {
            $("#districtModal").modal('show');
        }
    </script>

@endsection
