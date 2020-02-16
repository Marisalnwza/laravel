@extends('template.master')

@section('content')
<div class="container">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Students lists | รายชื่อนักศึกษา</h3>  
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>รหัสนักศึกษา</th>
                      <th>ชื่อ นามสกุล</th>
                      <th>ชื่อเล่น</th>
                      <th>ชั้นปี</th>
                      <th>สาขาวิชา</th>
                      <th>คณะ</th>
                      <th style="width: 40px">จัดการ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $key => $students)
                    <tr>
                    <td>{{ $key +1 }}</td>
                      <td>{{ $students-> student_id }}</td>
                      <td>{{ $students-> first_name,' ', $students -> last_name }}</td>
                      <td>{{ $students-> nick_name}}</td>
                      <td>{{ $students-> year}}</td>
                      <td>{{ $students-> major }}</td>
                      <td>{{ $students-> faculty }}</td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    @endforeach
                   
                        </tbody>
                    </table>
                <div>
                <div>
                <div>
                
@endsection