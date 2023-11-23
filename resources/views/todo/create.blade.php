@include('partials.header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Creer une nouvelle chambre</h1>
	</div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nom de l'hotel</label>
                  <input type="text" class="@error('name') is-invalid @enderror form-control" name="name" placeholder="Enter Todo Name...">
                  @error('name')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description de l'hotel</label>
                  <textarea name="description" cols="30" rows="10" class="@error('name') is-invalid @enderror form-control" placeholder="Enter Description..."></textarea>
                  @error('description')
                  <div class="mt-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Nom de la chambre</label>
                  <input type="text" class="@error('roomName') is-invalid @enderror form-control" name="roomName" placeholder="Enter Todo Name...">
                  @error('roomName')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Entrer le prix</label>
                  <input type="text" class="@error('price') is-invalid @enderror form-control" name="price" placeholder="Enter Todo Name...">
                  @error('price')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Nombre de lits</label>
                  <input type="text" class="@error('bedNumber') is-invalid @enderror form-control" name="bedNumber" placeholder="Enter Todo Name...">
                  @error('bedNumber')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Max d'adultes</label>
                  <input type="text" class="@error('maxAdult') is-invalid @enderror form-control" name="maxAdult" placeholder="Enter Todo Name...">
                  @error('maxAdult')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Enfants maximum authaurisés</label>
                  <input type="text" class="@error('maxChildAuthaurizied') is-invalid @enderror form-control" name="maxChildAuthaurizied" placeholder="Enter Todo Name...">
                  @error('maxChildAuthaurizied')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Attributs</label>
                  <input type="text" class="@error('attributs') is-invalid @enderror form-control" name="attributs" placeholder="Enter Todo Name...">
                  @error('attributs')
                      <div class="mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                  @enderror
                </div>

                
                <div class="form-check form-switch">
                    <input type="hidden" name="is_done" value="0">
                    <input class="form-check-input" type="checkbox" name="is_done" id="flexSwitchCheckDefault" value="1">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Cocher si disponible</label>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Create Todo</button>
                </div>
              </form>
        </div>
    </div>

</main>
@include('partials.footer')