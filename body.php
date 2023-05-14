<!-- Section-->
<section class="py-5" style="background : pink">
            <div class="container px-2 px-lg-4 mt-6" style="background : pink">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Tas</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/ennodia.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">ENNODIA BAG</h5>
                                    <!-- Product price-->
                                    Rp.189.900
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"> 
                                <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Makeup</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/makeup.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bedak</h5>
                                    <!-- Product price-->
                                    Rp.150.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">skincare</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/skincare.jpeg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">skincare</h5>
                                    <!-- Product price-->
                                    Rp.500.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Bodycare</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/bodycare.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">bodycare</h5>
                                    <!-- Product price-->
                                    Rp.200.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Lipstik</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/lipstik.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Lipstik</h5>
                                    <!-- Product price-->
                                    Rp.70.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">eyeliner</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/eyeliner.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">eyeliner</h5>
                                    <!-- Product price-->
                                    Rp.50.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Mascara</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/mascara.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mascara</h5>
                                    <!-- Product price-->
                                    Rp.50.000
                                    </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">eyeshadow</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="img/eyeshadow.jpg" alt="..." /><a href="#">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Eyeshadow</h5>
                                    <!-- Product price-->
                                    Rp.90.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <form action="produk_controller.php" method="post">
                      <a href="?hal=produk_detail&id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                          <i class="bi-eye-fill"></i>
                        </button>
                      </a>
                      <a href="?hal=produk_edit&idedit=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                          <i class="bi-pen-fill"></i>
                        </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                        <i class="bi-trash-fill"></i>
                      </button>
                      <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>