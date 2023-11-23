@include('partials.header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
	</div>

	<div class="d-flex">
		<h2>Todo Items</h2>
		<div class="ms-auto">
				<a href="{{ route('todo.create') }}" class="btn btn-primary btn-sm">Ajouter une nouvelle chambre</a>
		</div>
	</div>
	<div class="my-3">
		@if (session()->has('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>
		@endif
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th class="text-center" scope="col">#</th>
					<th class="text-center" scope="col">Nom de l'hotel</th>
					<th class="text-center" scope="col">Description de l'hotel</th>
					<th class="text-center" scope="col">Nombre de chambres</th>
					<th class="text-center" scope="col">Prix</th>
					<th class="text-center" scope="col">Nombre de lits</th>
					<th class="text-center" scope="col">Max d'adultes</th>
					<th class="text-center" scope="col">Nom d'enfants autrusés</th>
					<th class="text-center" scope="col" style="min-width: 75px;">Statuts</th>
					<th class="text-center" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@php
				$i = 1;
				@endphp
				@foreach ($todos as $todo)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{ $todo->name }}</td>
						<td>{{ $todo->description }}</td>
						<td>{{ $todo->roomName }}</td>
						<td>{{ $todo->price }}</td>
						<td>{{ $todo->bedNumber }}</td>
						<td>{{ $todo->maxAdult }}</td>
						<td>{{ $todo->maxChildAuthaurizied }}</td>
						<td>{{ $todo->attributs }}</td>
						<td>{{ $todo->getReadableTodoStatus(); }}</td>
						<td>
							<div class="dropdown">
								<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									Action
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="{{ route('todo.show', $todo->id) }}">View</a></li>
									<li><a class="dropdown-item" href="{{ route('todo.edit', $todo->id) }}">Modifier</a></li>
									<li>
										<form action="{{ route('todo.delete', $todo->id	) }}" method="POST" style="display: inline;">
											@method('DELETE')
											@csrf
											<button class="dropdown-item" onclick="return confirm('Are you sure want to delete this data?')" type="submit">Supprimer</button>
										</form>
									</li>
								</ul>
							</div>
						</td>
					</tr>                  
				@endforeach
			</tbody>
		</table>
	</div>
</main>
@include('partials.footer')