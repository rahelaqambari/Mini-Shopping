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
    @if ($customer->count()>0)
<h1 class="text-5xl text-center text-blue-500 p-4 font-bold">All Our Customer</h1>
<table class="border w-full border-collapse ">
    <tr>
        <th class="py-2 px-4 border">ID</th>
        <th class="py-2 px-4 border">Profile</th>
        <th class="py-2 px-4 border">Name</th>
        <th class="py-2 px-4 border">lastName</th>
        <th class="py-2 px-4 border">Email</th>
        <th class="py-2 px-4 border">Gender</th>
        
    </tr>
    @foreach ($customer as $custom)
        <tr>
            <td class="border py-1 px-2">{{ $custom->id }}</td>
            <td class="border py-1 px-2"><img class="h-12 w-12 rounded-full" src="storage/{{ $custom->img_url }}" alt=""></td>
            <td class="border py-1 px-2">{{ $custom->name }}</td>
            <td class="border py-1 px-2">{{ $custom->lastName }}</td>
            <td class="border py-1 px-2">{{ $custom->email }}</td>
            <td class="border py-1 px-2">{{ $custom->gender}}</td>
            
            <!-- <td class="border py-1 px-2"><a href="{{ URL('student/edit',$custom->id)}}">Edit</a></td> -->
        </tr>
    @endforeach
</table>
@else
  <h1 class="text-center text-blue-500 text-3xl" >No Customer is Added</h1>
@endif
</div>
</body>
</html>
