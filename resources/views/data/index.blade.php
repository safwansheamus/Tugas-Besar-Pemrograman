@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <h5 class="card-header">Manage User</h5>
            <div class="card-body">

                <table class="table-bordered table">
                    <tr class="table-light">
                        <th class="table-dark"> Username</th>
                        <th class="table-dark">Email </th>
                        <th class="table-dark"> Action </th>
                    </tr>
                    @foreach($datas as $key=>$value)
                    <tr>
                        <td class="table-light">{{ $value->name }}</td>
                        <td class="table-light">{{ $value->email }} </td>
                        <td class="table-light">
                            <form action="{{  url('data/'.$value->id)  }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                    </tr>
                    </td>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection