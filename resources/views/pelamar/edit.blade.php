@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Data Applicant') }}</div>
                <form method="POST" action="{{ url('pelamar/'.$model->id) }}">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input class="form-control" type="text" placeholder="What's ur Name?" name="nama" aria-label="Nama" value="{{ $model->nama }}">

                            <div class=" mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id Number</label>
                                <input class="form-control" type="text" placeholder="Id Number?" name="no_ktp" aria-label="id_number" value="{{ $model->no_ktp }}">

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label"> Email</label>
                                        <input class="form-control" type="text" placeholder="What's ur Email?" name="email" aria-label="email" value="{{ $model->email }}">
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label"> Phone Number</label>
                                        <input class="form-control" type="text" placeholder="What's ur Phone Number?" name="no_hp" aria-label="no_hp" value="{{ $model->no_hp }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Date of Birth</label>
                                        <input class="form-control" type="text" placeholder="When u was Born?" name="tgl_lahir" aria-label="tgl_lahir" value="{{ $model->tgl_lahir }}">

                                        <label for="exampleFormControlInput1" class="form-label"> Gender</label>
                                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin" value="{{ $model->jenis_kelamin }}">
                                            <option selected>Chose Gender?</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Famale</option>
                                        </select>

                                        <label for="exampleFormControlInput1" class="form-label"> Address</label>
                                        <input class="form-control" type="text" placeholder="Where do u live?" name="alamat" aria-label="alamat" value="{{ $model->alamat }}">

                                        <label for="exampleFormControlInput1" class="form-label"> Last Education</label>
                                        <input class="form-control" type="text" placeholder="What's ur Last Education?" name="pendidikan" aria-label="pendidikan" value="{{ $model->pendidikan }}">
                                        <br />
                                        <input class="btn btn-primary" type="submit" value="Submit">
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