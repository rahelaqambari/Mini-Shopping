<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<div class="w-11/12 mx-auto my-2 ">
<h1 class="text-5xl text-center text-amber-700 shadow-sm  p-4 font-bold">Add A Product</h1>
<table class="border w-full border-collapse ">
    <tr>
        <th class="py-2 px-4 border">ID</th>
        <th class="py-2 px-4 border">Name</th>
        <th class="py-2 px-4 border">Price</th>
        <th class="py-2 px-4 border">Quntity</th>
        <th class="py-2 px-4 border">Product_id</th>
        <th class="py-2 px-4 border">Image</th>
        <th class="py-2 px-4 border">Descraption</th>
        
    </tr>
    @foreach ($product as $pro)
        <tr>
            <td class="border py-1 px-2">{{ $pro->id }}</td>
            <td class="border py-1 px-2">{{ $pro->name }}</td>
            <td class="border py-1 px-2">{{ $pro->price }}</td>
            <td class="border py-1 px-2">{{ $pro->quntity }}</td>
            <td class="border py-1 px-2">{{ $pro->pro_id}}</td>
            <td ><img class="h-12 w-12 rounded-full" src="storage/{{ $pro->img_url }}" alt=""></td>
           
            <!-- <td class="border py-1 px-2"><a href="{{ URL('student/edit',$custom->id)}}">Edit</a></td> -->
        </tr>
    @endforeach
</table>

  <h1 class="text-center text-blue-500 text-3xl" >No product is Added</h1>

</div>
</body>
</html>
