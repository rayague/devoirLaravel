@include('partials.header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Detail sur l'hotel</h1>
	</div>

    <div class="card">
        <div class="card-body">
            <table>
                <tr class="mb-3">
                    <th style="width: 100px">Nom de l'hotel</th>
                    <td>{{ $todo->name }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Description de la chambre</th>
                    <td>{{ $todo->description }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Nom de la chambre</th>
                    <td>{{ $todo->roomName }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Prix</th>
                    <td>{{ $todo->price }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Nombre de lits</th>
                    <td>{{ $todo->bedNumber }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Max d'adultes</th>
                    <td>{{ $todo->maxAdult }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Max d'enfants Authaurisés</th>
                    <td>{{ $todo->maxChildAuthaurizied }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Attributs</th>
                    <td>{{ $todo->attributs }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Disponible ou pas ?</th>
                    <td>{{ $todo->getReadableTodoStatus() }}</td>
                </tr>
                <tr>
                    <th></th>
                    <td class="pt-3">
                        <a class="btn btn-primary btn-sm" href="{{ route('todo.index') }}">Retour</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</main>
@include('partials.footer')