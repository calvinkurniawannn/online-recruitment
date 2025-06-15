@extends('main.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/content/landingpage.css') }}">
@endsection

@section('content')
    <section class="jobapplication-section">
        <div class="container">
            <h2 class="section-title">Latest Job Openings</h2>
            <div class="job-cards">
                @foreach ($jobapplication as $ja)
                    <div class="job-card-horizontal">
                        <div class="job-image-horizontal">
                            <img src="{{ asset($ja->image) }}" alt="{{ $ja->jobapplicationtitle }}">
                        </div>
                        <div class="job-info-horizontal">
                            <h3>{{ $ja->jobapplicationtitle }}</h3>
                            <p class="location">{{ $ja->location }}</p>
                            <p class="employment">{{ $ja->employmentstatus }}</p>
                            <p class="period">{{ \Carbon\Carbon::parse($ja->startperiod)->format('M Y') }} -
                                {{ \Carbon\Carbon::parse($ja->endperiod)->format('M Y') }}</p>
                        </div>
                        <div class="job-action-horizontal">
                            @if (Auth::check())
                                <a href="{{ route('view.jobappdetail', $ja->slug) }}" class="apply-btn">View Details</a>
                            @else
                                <a href="{{ route('view.login') }}" class="apply-btn">View Details</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
