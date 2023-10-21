@extends('layouts.layout1')


    @push('my-css')

    <style>

        .card-header{
            background-color: rgb(170, 196, 58);
            color: white;
        }

        .btn-primary{
            background-color:  rgb(170, 196, 58);
            color: white;
        }

    </style>

    @endpush

            @section('content')
            <div class="card">
                <div class="card-header">
                  About Page
                </div>
                <div class="card-body">
                  <h5 class="card-title">This is the About page</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

        @endsection

