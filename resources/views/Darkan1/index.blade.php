@extends('Darkan.master')
@section('content')
<div class="row g-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Basic Table</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Cout_Student</th>
                        {{-- <th scope="col">Email</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td>{{ $classroom->cout_student }}</td>
                        <td> <a href=" {{ route('classrooms.edit', $classroom->id)}}" class="btn btn-info">Edit</a> </td>
                        <td> 
                            <form method="post" action="{{ route('classrooms.destroy', $classroom->id)}}">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-warning">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection