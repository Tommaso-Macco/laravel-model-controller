@foreach ($data as $film)
<div>
    <h2>
        TITLE: {{ $film['title'] }}
    </h2>
    <h5>
        VOTE: {{ $film['vote'] }}
    </h5>
</div>
@endforeach