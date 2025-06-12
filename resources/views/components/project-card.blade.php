@props(['project'])

<div class="col-md-4 mb-4">
    <div class="card h-100">
        <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $project['title'] }}</h5>
            <p class="card-text">{{ $project['description'] }}</p>
            
            <div class="mb-3">
                @foreach($project['technologies'] as $tech)
                    <span class="badge bg-primary me-1">{{ $tech }}</span>
                @endforeach
            </div>
            
            <div class="mt-auto">
                <a href="{{ $project['demo_url'] }}" class="btn btn-outline-primary me-2">Demo</a>
                <a href="{{ $project['github_url'] }}" class="btn btn-outline-secondary">GitHub</a>
            </div>
        </div>
    </div>
</div>