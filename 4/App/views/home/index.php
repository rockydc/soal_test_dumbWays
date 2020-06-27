
    <div class="container" style="padding-top: 66px;">
        <div class="row">
            <div class="col-8 align-self-start">
                <h1>Provinsi &amp; Kabupaten</h1>
            </div>
            <div class="col align-self-center">
                <div class="d-xl-flex justify-content-xl-end"><button class="btn btn-primary tampilModaltambah" type="button" style="margin-right: 20px;width: 136px;" data-toggle="modal" data-target="#provinsimodal">Add Provinsi</button><button class="btn btn-primary" type="button" style="width: 136px;" data-toggle="modal"
                        data-target="#kabupatenmodal">Add Kabupaten</button></div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding: 20px;"><select style="padding: 5px;"><option value="kabupaten">Kabupaten</option><option value="provinsi" selected="">Provinsi</option></select></div>
        </div>
        <div class="container" style="padding-bottom: 15px;padding-top: 15px;">

            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash()?>
                </div>
            </div>
            <div id="cards">
            <?php foreach($data['provinsi'] as $prov) :?>
                <div>

                    <div class="card d-xl-flex align-items-xl-center">
                        <div class="card-body"><img src="<?= BASEURL;?>/assets/img/jawa-barat-250x_.png">
                            <h1><?= $prov['nama'];?></h1>
                            <h6 class="card-title"><?= $prov['diresmikan']?></h6>
                            <a class="card-link tampilModalUbah" data-toggle="modal" data-target="#provinsimodal" data-id="<?= $prov['id'];?>" style="color: rgb(0,123,255);" href="<?= BASEURL;?>/home/ubah/<?= $prov['id']?>"><span><i class="fa fa-edit"></i></span></a><a class="card-link" onclick="return confirm('yakin mau menghapus?');" href="<?= BASEURL;?>/home/hapus/<?= $prov['id']?>"><span><i class="fa fa-trash"></i></span></a>
                        </div>
                    </div>
                </div>
            
                <?php endforeach;?>
            </div>
        </div>
    </div>

  

  
    <div class="modal fade" role="dialog" tabindex="-1" id="provinsimodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="forModalLabel"> Tambah Provinsi</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form action="<?= BASEURL;?>/home/tambah" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                        <div class="form-group"><label>Nama Provinsi</label><input class="form-control" type="text" required="" placeholder="Nama Provinsi" id="nama" name="nama"></div>
                        <div class="form-group"><label>Tanggal Diresmikan<input id="tglresmi" class="form-control" type="date" name="tglresmi"></label></div><label>Photo</label>
                        <div class="form-group" style="display: block;">
                        <input type="file" name="photo"></div>
                        <div class="form-group"><label>Pulau</label><select id="pulau" class="custom-select" required="" name="pulau"><optgroup label="Pulau"><option value="Sumatra" selected="">Sumatra</option><option value="Jawa">Jawa</option><option value="Kalimantan">Kalimantan</option><option value="Sulawesi">Sulawesi</option><option value="Kep.Riau">Kepulauan Riau</option><option value="Kep.Nusa tenggara">Kepulauan Nusa Tenggara</option><option value="papua">Papua</option></optgroup></select></div>
                        <div
                            class="d-xl-flex justify-content-xl-center"><button class="btn btn-primary d-xl-flex justify-content-xl-center align-items-xl-center" type="submit">Add</button></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="kabupatenmodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kabupaten</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group"><label>Nama Kabupaten</label><input class="form-control" type="text" placeholder="nama kabupaten" name="kabupaten"></div>
                        <div class="form-group"><label>Tanggal Diresmikan<input class="form-control" type="date" name="tglresmiKab"></label></div>
                        <div class="form-group"><label>Provinsi_ID</label><select class="form-control" name="idProv"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div><label>Photo</label>
                        <div
                            class="form-group" style="display: block;"><input type="file" name="fotoKab"></div>
                <div class="form-group"><label>Pulau</label><select class="custom-select" name="pulau"><optgroup label="Pulau"><option value="12" selected="">Sumatra</option><option value="13">Jawa</option><option value="14">Kalimantan</option><option value="">Sulawesi</option><option value="">Kepulauan Riau</option><option value="">Kepulauan Nusa Tenggara</option><option value="">Papua</option></optgroup></select></div>
                <div
                    class="d-xl-flex justify-content-xl-center"><button class="btn btn-primary d-xl-flex justify-content-xl-center align-items-xl-center" type="submit">Add</button></div>
            </form>
        </div>
    </div>
    </div>
    </div>
    
    <script src="<?= BASEURL;?>/assets/js/jquery.min.js"></script>
    <script src="<?= BASEURL;?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= BASEURL;?>/js/script.js"></script>
</body>

</html>