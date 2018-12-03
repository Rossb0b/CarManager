<div class="container pb-3">

  <div class="row mt-2">

    <div class="col-12 col-md-10 col-xl-8">
      <p class="title">Ajouter un véhicule</p>
      <form method="post" action="./?&add">

        <div class="form-group">
          <label for="vehicle-type">Type de véhicule</label>
          <select id="vehicle-type" name="vehicle-type" class="form-control">
            <option value="car">Voiture</option>
            <option value="motorbike">Moto</option>
            <option value="truck">Camion</option>
          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-brand">Marque</label>
          <select id="vehicle-brand" name="vehicle-brand" class="form-control">

            <option value="peugeot" data-type="car">Peugeot</option>
            <option value="citroen" data-type="car">Citroën</option>
            <option value="renaut" data-type="car">Renaut</option>
            <option value="audi" data-type="car">Audi</option>
            <option value="bmw" data-type="car">Bmw</option>

            <option value="honda" data-type="motorbike">Honda</option>
            <option value="bmw" data-type="motorbike">Bmw</option>
            <option value="yamaha" data-type="motorbike">Yamaha</option>
            <option value="suzuki" data-type="motorbike">Suzuki</option>
            <option value="kawasaki" data-type="motorbike">Kawasaki</option>

            <option value="renaut" data-type="truck">Renaut</option>
            <option value="volvo" data-type="truck">Volvo</option>
            <option value="daf" data-type="truck">Daf</option>
            <option value="iveco" data-type="truck">Iveco</option>
            <option value="man" data-type="truck">Man</option>

          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-color">Couleur</label>
          <select id="vehicle-color" name="vehicle-color" class="form-control">
            <option value="white">Blanc</option>
            <option value="blue">Bleu</option>
            <option value="red">Rouge</option>
            <option value="yellow">Jaune</option>
            <option value="black">Noir</option>
          </select>
        </div>

        <div class="form-group">
          <label for="vehicle-place">Nombre de place</label>
          <input type="number" id="vehicle-place" name="vehicle-place" class="form-control" value="1">
        </div>

        <div class="form-group">
          <label for="vehicle-wheel">Nombre de roue</label>
          <input type="number" id="vehicle-wheel" name="vehicle-wheel" class="form-control" value="1">
        </div>

        <button name="add-vehicle" class="btn btn-success">Ajouter</button>

      </form>
    </div>

  </div>

  <div class="row mt-2">

    <div class="col-12 col-lx-10">
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

        <?php 
          foreach($vehicles as $vehicle):
        ?>    
            <tr>
              <td><?= $vehicle->getType(); ?></td>
              <td><?= $vehicle->getBrand(); ?></td>
              <td><?= $vehicle->getColor(); ?></td>
              <td><?= $vehicle->getPlace(); ?></td>
              <td><?= $vehicle->getWheel(); ?></td>
              <td>
                <a href="./?page=vehicle&id=<?= $vehicle->getId() ?>" class="btn btn-info">Détails</a>
                
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $vehicle->getId(); ?>">
                  Modifier
                </button>

                <form method="post" action="./?&del" class="d-inline">
                  <input type="hidden" name="id" value="<?= $vehicle->getId() ?>">
                  <button name="delete-vehicle" class="btn btn-danger">
                    Supprimer
                  </button>
                </form>
              </td>
            </tr>
        <?php 
          endforeach;
        ?>
        </tbody>

      </table>
      
      <?php 
        foreach($vehicles as $vehicle):
      ?>
      <div class="modal fade" id="edit<?= $vehicle->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel">Modifier le véhicule</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="./?&put">
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
      <?php
        endforeach;
      ?>      

    </div>

  </div>

</div>
