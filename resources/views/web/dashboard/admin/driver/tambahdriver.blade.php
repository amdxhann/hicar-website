<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Customer Add</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>
                Driver Add
                <a href="web.dashboard.admin.driver.driver" class="btn btn-danger float-end ">BACK</a>
              </h4>
            </div>
            <div class="card-body">
              <form action="web.dashboard.admin.driver.tambahdriver" method="POST">
                @csrf
                <input type="hidden" name="id"  />

                <div class="mb-3">
                  <label for="">Foto Driver</label>
                    <input type="file" id="myFile" name="foto_profil" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>Usia</label>
                  <input type="text" name="usia" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>No SIM</label>
                  <input type="text" name="no_sim" class="form-control" />
                </div>
                <div class="mb-3">
                  <label>No HP</label>
                  <input type="text" name="no_hp" class="form-control" />
                </div>
                <div class="mb-3">
                  <button type="submit" name="update_student" class="btn btn-primary ">Add Driver</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
