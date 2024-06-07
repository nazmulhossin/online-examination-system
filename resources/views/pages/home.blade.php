@extends('layouts.app')
@section('css_path') css/home.min.css @endsection
@section('main_content')
    <div class="intro">
        <div>
            <h1>Online Exam with SmartExam</h1>
            <p>Attend online exams and practice to prepare for SSC & HSC examinations free.</p>
            <a href=""><span>Get Started <i class="fa-solid fa-arrow-right"></i></span></a>
        </div>

        <img src="{{asset('img/online-exam.png')}}" alt="online exam">
    </div>

    @push('style')
        <link href="{{ asset('css/home.min.css') }}" rel="stylesheet">
    @endpush
@endsection