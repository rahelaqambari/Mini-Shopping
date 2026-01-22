<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<div class="w-9/12 mx-auto my-2 border-2 border-black  ">
    @if ($errors->count()>0)
    
    
    @foreach ($errors->all() as $error)
<div class="bg-red-700 py-4 px-2">
    <h1> {{ $error }}</h1>
</div>

@endforeach
@endif
<h1 class="text-center mt-3 text-4xl bg-blue-400 text-white">Add A Product</h1>
<form method="post" action="{{ URL("product/home") }}" class="flex gap-4 w-full p-4 flex-col" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" class="w-full outline-none border focus:border-0 focus:ring-1 ring-stone-400 py-2 px-4">
    <input type="number" name="price" placeholder="Price" class="w-full outline-none border focus:border-0 focus:ring-1 ring-stone-400 py-2 px-4">
    <input type="number" name="quntity" placeholder="Quntity" class="w-full outline-none border focus:border-0 focus:ring-1 ring-stone-400 py-2 px-4">
    <input type="text" name="madein" placeholder="Made In" class="w-full outline-none border focus:border-0 focus:ring-1 ring-stone-400 py-2 px-4">
    <input type="file" name="photo" accept="image/*" placeholder="Product Image" class="w-full outline-none border focus:border-0 focus:ring-1 ring-stone-400 py-2 px-4">
    <textarea name="" class="w-full outline-none border focus:border-0 focus:ring-1 ring-stone-400 py-2 px-4" id=""></textarea>
</form>
</div>
</body>
</html>


