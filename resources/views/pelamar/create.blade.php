@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Data Applicant') }}</div>
                <form method="POST" action="{{ url('pelamar') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> Full Name</label>
                                <input class="form-control" type="text" placeholder="What's ur Name?" name="nama" aria-label="Nama">

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Id Number</label>
                                    <input class="form-control" type="text" placeholder="Id Number?" name="no_ktp" aria-label="id_number">

                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label"> Email</label>
                                            <input class="form-control" type="text" placeholder="What's ur Email?" name="email" aria-label="email">
                                        </div>
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label"> Phone Number</label>
                                            <input class="form-control" type="text" placeholder="What's ur Phone Number?" name="no_hp" aria-label="no_hp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> Date of Birth</label>
                                            <input class="form-control" type="text" placeholder="When u was Born?" name="tgl_lahir" aria-label="tgl_lahir">

                                            <label for="exampleFormControlInput1" class="form-label"> Gender</label>
                                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                                <option selected>Chose Gender?</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Famale</option>
                                            </select>

                                            <label for="exampleFormControlInput1" class="form-label"> Address</label>
                                            <input class="form-control" type="text" placeholder="Where do u live?" name="alamat" aria-label="alamat">

                                            <label for="exampleFormControlInput1" class="form-label"> Last Education</label>
                                            <input class="form-control" type="text" placeholder="What's ur Last Education?" name="pendidikan" aria-label="pendidikan">
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