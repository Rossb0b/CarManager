<div class="container">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Tous les véhicules</a></li>
    <li class="breadcrumb-item active" aria-current="page">Véhicule #<?= $vehicle->getId() ?></li>
  </ol>
</nav>

<div class="row mt-2">

<div class="col-12 col-lx-10">
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
          <td><?= $vehicle->getType(); ?></td>
          <td><?= $vehicle->getBrand(); ?></td>
          <td><?= $vehicle->getColor(); ?></td>
          <td><?= $vehicle->getPlace(); ?></td>
          <td><?= $vehicle->getWheel(); ?></td>
          <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $vehicle->getId(); ?>">
              Modifier
            </button>

            <form method="post" action="./" class="d-inline">
              <input type="hidden" name="id" value="<?= $vehicle->getId() ?>">
              <button name="delete-vehicle" class="btn btn-danger">
                Supprimer
              </button>
            </form>
          </td>
        </tr>

    </tbody>

  </table>

  <div class="modal fade" id="edit<?= $vehicle->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLabel">Modifier le véhicule</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="./?page=vehicle&put">
          <input type="hidden" name="id" value="<?= $vehicle->getId() ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="vehicle-color">Changer la couleur du véhicule</label>
              <select id="vehicle-color" name="vehicle-color" class="form-control">
                <option value="white">Blanc</option>
                <option value="blue">Bleu</option>
                <option value="red">Rouge</option>
                <option value="yellow">Jaune</option>
                <option value="black">Noir</option>
            </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <button class="btn btn-primary" name="edit-vehicle">Sauvegarder</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
