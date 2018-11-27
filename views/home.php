<div class="jumbotron jumbotron-fluid mb-0">

  <div class="container">
    <h1>AppCar application</h1>
  </div>

</div>

<div class="container pb-3">

  <div class="row mt-2">

    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
      <p class="title">Ajouter un véhicule</p>
      <form method="post">

        <div class="form-group">
          <label for="vehicle-type">Type de véhicule</label>
          <select id="vehicle-type" name="vehicle-type" class="form-control">
            <option disabled>Voiture</option>
          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-brand">Marque</label>
          <select id="vehicle-brand" name="vehicle-brand" class="form-control">
            <option disabled>── Voitures ──</option>
            <option value="peugeot">Peugeot</option>
          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-color">Couleur</label>
          <select id="vehicle-color" name="vehicle-color" class="form-control">
            <option value="peugeot">Noir</option>
          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-places">Nombre de place</label>
          <select id="vehicle-places" name="vehicle-places" class="form-control">
            <option value="1">1</option>
          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-wheel">Nombre de roue</label>
          <select id="vehicle-wheel" name="vehicle-wheel" class="form-control">
            <option value="peugeot">1</option>
          </select>
        </div>

        <button name="add-vehicle" class="btn btn-success">Ajouter</button>

      </form>
    </div>

  </div>

  <div class="row mt-2">

    <div class="col-12 col-md-10 col-xl-8">
      <p class="title">Liste des véhicules</p>
      <table class="table table-dark">

        <thead>
          <tr>
            <th>Type</th>
            <th>Marque</th>
            <th>Couleur</th>
            <th>Nombre place</th>
            <th>Nombre roue</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Voiture</td>
            <td>Peugeot</td>
            <td>Rouge</td>
            <td>5</td>
            <td>4</td>
            <td>
              <button type="button" class="btn btn-warning">
                Modifier
              </button>
              <button type="button" class="btn btn-danger">
                Supprimer
              </button>
            </td>
          </tr>
        </tbody>

      </table>
    </div>

  </div>

</div>
