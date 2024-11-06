<div class="container">
    <div class="row">
        <div class="col-md-6">
            <H3>Daftar Mahasiswa</H3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item " aria-current="true"><?= $mhs['nama']; ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>