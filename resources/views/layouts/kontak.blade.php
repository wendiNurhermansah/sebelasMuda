<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase ">Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/bc.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">COACH</h5>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                        Lihat
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">COACHS</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama :</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Wendi Nurhermansah">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">No Hp :</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="081214255669">
                                </div>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/bc.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">KETUA PEMUDA</h5>
                      <a href="#" class="btn btn-warning">Lihat</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/bc.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">KETUA RW</h5>
                      <a href="#" class="btn btn-warning">Lihat</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-8">
            <div class="card" style="width: 40rem;">
              <div class="card-body">
                <h5 class="card-title text-center">MAPS</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.861384087202!2d107.97037551436846!3d-7.025575070777677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68cbc642b87309%3A0x88dc4afd59169f8d!2sPasirwaru%2C%20Kec.%20Balubur%20Limbangan%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat%2044186!5e0!3m2!1sid!2sid!4v1608566122708!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="visible-print text-center">
                  {!! QrCode::size(100)->generate('https://api.whatsapp.com/send/?phone=+6281214255669&text&app_absent=0'); !!}
                  <p>Scan</p>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>