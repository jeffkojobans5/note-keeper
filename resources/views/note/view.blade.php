<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" integrity="sha512-braXHF1tCeb8MzPktmUHhrjZBSZknHvjmkUdkAbeqtIrWwCchhcpUeAf2Sq3yIq1Q1x5PlroafjceOUbIE3Q5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> NotesKeeper || View </title>
</head>
<body class="bg-gray-900">
	<div class="container mx-auto p-5 w-1/2">
		<header class="mb-10">
			<h1 class="text-5xl font-bold text-left text-gray-500"> Note<span class="text-green-500">Keeper</span><span class="text-white"> - View </span></h1>
		</header>
		<main class="bg-gray-700 flex flex-col p-5 rounded">
                <input type="text" name="title" class="p-2 text-xl text-gray-800 w-2/3 rounded" placeholder="title" value=" {{ $note->title }} " readonly> 
				<textarea name="content" id="" cols="30" rows="10" class="p-2 text-xl text-gray-800 mt-5 bg-gray-200 rounded"  placeholder="content" readonly> {{ $note->content }} </textarea>
		</main>
	</div>
</body>
</html>