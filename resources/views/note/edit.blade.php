<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" integrity="sha512-braXHF1tCeb8MzPktmUHhrjZBSZknHvjmkUdkAbeqtIrWwCchhcpUeAf2Sq3yIq1Q1x5PlroafjceOUbIE3Q5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> NotesKeeper || Edit</title>
</head>
<body class="bg-gray-900">
	<div class="container mx-auto p-5 w-1/2">
		<header class="mb-10">
			<h1 class="text-5xl font-bold text-left text-gray-500"> Note<span class="text-green-500">Keeper</span><span class="text-white"> - Edit</span></h1>
		</header>
		<main class="bg-gray-700 flex flex-col p-5 rounded">
			<form action=" {{ route('note.update' , $note->id) }} " method="POST" class="flex flex-col">
                @csrf
                <input id="_method" name="_method" type="hidden" value="PUT">
                <input type="text" name="title" class="p-2 text-xl text-gray-800 w-2/3 rounded" placeholder="title" value=" {{ $note->title }} "> 
				<textarea name="content" id="" cols="30" rows="10" class="p-2 text-xl text-gray-800 mt-5 rounded"  placeholder="content"> {{ $note->content }} </textarea>
				<button type="submit" class="bg-red-500 w-24 p-2 rounded text-white mt-5 text-lg" > Edit Note </button>
			</form>
		</main>
	</div>
</body>
</html>