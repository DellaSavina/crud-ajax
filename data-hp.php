<div class="container" style="margin-top: 100px; ">
    <div class="row">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="text-center">Aplikasi Toko HP
                </h1>
                <button id="addButton" class="btn btn-primary">Tambah Data</button>
                <br>
                <br>
                <table class="table table-bordered table-info">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Tahun Produksi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM hp ORDER BY Id DESC") or die(mysqli_error($koneksi));
                        while ($result = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $no++; ?>
                                </td>
                                <td>
                                    <?php echo $result['Merk']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Tipe']; ?>
                                </td>
                                <td>
                                    <?php echo $result['Tahun']; ?>
                                </td>
                                <td>
                                    <button class="btn btn-primary" onclick="" id="EditButton" value="<?php echo $result['Id']; ?>">Edit</button>
                                    <button class="btn btn-danger" onclick="history.back()" id="DeleteButton" value="<?php echo $result['Id']; ?>">Delete</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>