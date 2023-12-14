<x-core>
    <div class="container-fluid">
        <section class="row">
            <article class="col-12">
                <form method="post" action="{{route('image.submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Il tuo indirizzo</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Non mostreremo mai la tua mail.</div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Mostraci chi sei</label>
                        <input class="form-control" type="file" id="img">
                      </div>
                      
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>
            </article>
        </section>
    </div>
</x-core>
