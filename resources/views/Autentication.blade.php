<x-core>
    <div class="container-fluid vh-100">
    <form class="row g-3 needs-validation" novalidate
    method="POST"
    action="{{route('user.add')}}"
    @csrf>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Nome</label>
          <input type="string" class="form-control" id="validationCustom02" value="Otto" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Password</label>
            <input type="string" class="form-control" id="validationCustom03" value="Otto" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">email</label>
            <input type="string" class="form-control" id="validationCustom04" value="Otto" required>
          </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Invia</button>
        </div>
      </form>
    </div>
</x-core>