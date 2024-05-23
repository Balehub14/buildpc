<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Komponen</h3>
            <?php foreach( $data['komponen'] as $komponen ) : ?>
           
            <ul>
                <li>CPU : <?= $komponen['nama_cpu'];?></li>
                <li>Harga : Rp. <?= $komponen['harga'];?></li>
                <li>Wattnya : <?= $komponen['daya_dasar_prosesor'];?></li>
            </ul>

            <?php endforeach; ?>
        </div>
    </div>


</div>