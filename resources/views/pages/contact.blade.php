@extends('layouts.layout1')

    @push('my-css')

    <style>

        .card-header{
            background-color: rgb(218, 84, 173);
            color: white;
        }

        .btn-primary{
            background-color:   rgb(218, 84, 173);
            color: white;
        }

    </style>

    @endpush

            @section('content')
            <div class="card">
                <div class="card-header">
                  Contact Page
                </div>
                <div class="card-body">
                  <h5 class="card-title">This is the Contact page</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              @endsection


