<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="max-width: 900px" class="container max-w-full mx-auto pt-5">

        @foreach ( $posts as $post )
            
            <article class="mb-4">
                <h2 class="text-xl font-bold text-gray-900"><?= $post->title ?></h2>
                <p class="text-md text-gray-600"> <?= $post->content ?></p>
                <p><?= $post->created_at ?></p>
            </article>

        @endforeach        
        
    </div>
</body>
</html>