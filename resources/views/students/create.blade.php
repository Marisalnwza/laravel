@extends('template.master')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Student info</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form"  method="post" action="{{ route('create.student') }}">
                @csrf()
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student id</label>
                        <input name="student_id" type="text" class="form-control" placeholder="Enter Student id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">first name</label>
                        <input name="first_name" type="text" class="form-control" placeholder="Enter First name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">last name</label>
                        <input name="last_name" type="text" class="form-control" placeholder="Enter last name">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nick name</label>
                        <input name="nick_name" type="text" class="form-control" placeholder="Enter nickname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">year</label>
                        <input name="year" type="text" class="form-control" placeholder="Enter last year">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Major</label>
                        <input name="major" type="text" class="form-control" placeholder="Enter last major">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Faculty</label>
                        <input name="faculty" type="text" class="form-control" placeholder="Enter last Faculty">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection