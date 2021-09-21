<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" integrity="sha512-braXHF1tCeb8MzPktmUHhrjZBSZknHvjmkUdkAbeqtIrWwCchhcpUeAf2Sq3yIq1Q1x5PlroafjceOUbIE3Q5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> NotesKeeper || </title>
</head>
<body class="bg-gray-900">
	<div class="container mx-auto p-5 w-1/2">
		<header class="mb-10">
			<h1 class="text-5xl font-bold text-left text-gray-500"> Note<span class="text-green-500">Keeper</span> <span class="text-white">- Notes</span></h1>
			<section class="flex justify-between">
				<button class="bg-green-500 pt-1 pb-1 pl-5 pr-5 rounded shadow-lg text-gray-700 text-xl mt-5">  <a href="{{ route('note.create') }}"> Add Note</a></button>
				<button class="bg-white pt-1 pb-1 pl-3 pr-3 shadow-lg text-gray-700 text-xl mt-5 rounded-full">  {{ count($allNotes) }} </button>
			</section>		
		</header>

		@if(count($allNotes) === 0 )
				<h1 class="text-5xl text-gray-400 "> Add your first Note </h1>
		@endif

		@foreach($allNotes as $singleNote)
			<main class="bg-gray-200 flex p-5 rounded mt-5">
				<div class="box flex-2 p-1">
					<h3 class="text-gray-400 text-xl"> {{ $counter++  }}. </h3>
				</div>
				<div class="box flex-1 ml-5 p-1">
					<p class="text-left text-xl">   <a href=" {{ url('note/' .$singleNote->id ) }} "> {{$singleNote->title}} </a> </p>
				</div>
				<div class="box  flex justify-center items-center ">
				<button class="bg-green-300 pt-1 pb-1 pl-5 pr-5 rounded shadow-md text-gray-700 text-xl"><a href="{{ url('note/' .$singleNote->id .'/edit' ) }} "> Edit Note </a> </button> 
				</div>
				<div class="box flex justify-center items-center ml-5">
					<form action=" {{ route('note.destroy' , $singleNote->id) }}" method="post">
						@csrf
	                	<input id="_method" name="_method" type="hidden" value="DELETE">
						<button class="bg-red-500 pt-1 pb-1 pl-5 pr-5 rounded shadow-lg text-white text-xl"> Delete Note </button>
					</form>
				</div>
			</main>
		@endforeach

		</div>
</body>
</html>