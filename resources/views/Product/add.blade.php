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

<div class="w-full mx-auto flex items-center justify-center flex-col">
    @if ($errors->count()>0)
    
    
    @foreach ($errors->all() as $error)
<div class="bg-red-700 py-4 px-2">
    <h1> {{ $error }}</h1>
</div>

@endforeach
@endif
<h1 class="text-center my-2 text-4xl text-stone-400 font-semibold font-serif">Add A Product</h1>
<form method="post" action="{{ URL("product/home") }}" class="flex gap-4  p-4 flex-col w-7/12 bg-stone-100 rounded-md" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" class="w-full outline-none border focus:border-0 rounded-sm focus:ring-0 ring-stone-400 py-2 px-4">
    <input type="number" name="price" placeholder="Price" class="w-full outline-none border focus:border-0 rounded-sm focus:ring-0 ring-stone-400 py-2 px-4">
    <input type="number" name="quntity" placeholder="Quntity" class="w-full outline-none border focus:border-0 rounded-sm focus:ring-0 ring-stone-400 py-2 px-4">
    <input type="text" name="madein" placeholder="Made In" class="w-full outline-none border focus:border-0 rounded-sm focus:ring-0 ring-stone-400 py-2 px-4">
    <input type="file" name="image" accept="image/*" placeholder="Product Image" class="w-full outline-none rounded-sm border focus:border-0 focus:ring-0 ring-stone-400 py-2 px-4">
    <textarea name="p" class="w-full outline-none border focus:border-0 focus:ring-0 ring-stone-400 py-2 px-4 rounded-sm h-24" id="" placeholder="Descraption"></textarea>
    <button type="submit" class="bg-stone-400 py-2 px-5 w-fit text-white mx-auto rounded-md text-base font-serif">Add</button>
</form>
</div>
</body>
</html>


