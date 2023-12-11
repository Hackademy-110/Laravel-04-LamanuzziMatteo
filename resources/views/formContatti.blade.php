<x-core>
    <div class="container-fluid">
        <section class="row">
            <article class="col-12">
                <h1 class="display-3 text-center">
                    Contattaci
                </h1>
            </article>
        </section>
        <section class="row justify-content-center">
            <article class="col-8">
                <form method="post" action="{{route('invioForm')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      <div id="emailHelp" class="form-text">Non condivideremo mai la password con nessuno.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                      <textarea id="" cols="164" rows="10"  name="contenuto" placeholder="Scrivi qui cosa vuoi chiederci"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>
            </article>
        </section>
    </div>
</x-core>