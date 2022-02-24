@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <h5 class="card-header">Manage Data Applicant</h5>
            <div class="card-body">

                <table class="table-bordered table">
                    <tr class="table-light">
                        <th class="table-dark">Full Name</th>
                        <th class="table-dark">ID Number</th>
                        <th class="table-dark">Email </th>
                        <th class="table-dark">Phone Number</th>
                        <th class="table-dark">Date of Birth</th>
                        <th class="table-dark"> Gender</th>
                        <th class="table-dark"> Address</th>
                        <th class="table-dark"> Last Education </th>
                        <th class="table-dark" colspan="2"> Action </th>
                    </tr>
                    @foreach($datas as $key=>$value)
                    <tr>
                        <td class="table-light">{{ $value->nama }}</td>
                        <td class="table-light">{{ $value->no_ktp }} </td>
                        <td class="table-light">{{ $value->email }} </td>
                        <td class="table-light">{{ $value->tgl_lahir }} </td>
                        <td class="table-light">{{ $value->no_hp }} </td>
                        <td class="table-light">{{ $value->jenis_kelamin }} </td>
                        <td class="table-light">{{ $value->alamat }} </td>
                        <td class="table-light">{{ $value->pendidikan }} </td>
                        <td class="table-light"> <a class="btn btn-success" href="{{ url('pelamar/'.$value->id.'/edit') }}"> Update </td>
                        <td class="table-light">
                            <form action="{{  url('pelamar/'.$value->id)  }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                    </tr>
                    </td>
                    @endforeach
                </table>
                <a class="btn btn-primary" href="{{ url('pelamar/create') }}">Create</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection