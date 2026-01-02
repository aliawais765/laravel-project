@extends('user.layout.master')

@section('title', 'Bank Lists')

@section('content')

<style>
    ul, ol {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        list-style: none;
    }

    .member-info a {
        display: inline-block;
        background-color: red;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .member-info a:hover {
        background-color: darkred;
    }
</style>

<section id="chefs" class="chefs section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Banks</h2>
        <p> <span class="description-title">Our List of Banks who offer loans in Pakistan</span></p>
    </div>

    <div class="container">
        <div class="row gy-4">
            @forelse($banklists as $banklist)
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('storage/' . $banklist->image) }}" 
                             alt="{{ $banklist->title }}" width="200">
                    </div>

                    <div class="member-info">
                        <h4>{{ $banklist->title }}</h4>
                        <p>{{ $banklist->description }}</p>

                        <ul>
                            <li>
                                <a href="{{ route('user.alfalah') }}">
                                    apply now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            <p>No banks found.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection
