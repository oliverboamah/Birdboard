<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birdboard</title>
</head>
<body>
        <h1>Birdboard</h1>
    <ul>
        @forelse ($projects as $project)
            <a href="{{$project->path()}}"><li>{{$project->title}}</li></a>
        @empty
            <li>No projects yet</li>
        @endforelse
    </ul>
</body>
</html>