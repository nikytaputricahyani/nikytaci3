 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><? = $title ?></h1>

<div class="row">
    <div class="col-lg-6">
        <!-- pesan error -->
        <?= form_error(
            'menu',
            '<div class="alert alert-success" role="alert">
            </div>'
        ); ?>
        <?= $this->session->flashdata('message'); ?>
        <!-- akhir pesan error -->

        <!-- tombol tambah  -->
        <a href="" class="btn btn-primary mb-3" class="btn btn-primary"
        data-toggle="modal" data-target="#logoutModal">Add Menu</a>
        <!-- Tabel -->
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Menu</th>
                <th scope="col">Action</th>
                
            </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $m['menu']; ?></td>
                <td>
                <a href="#" class="btn btn-success btn-sm" data-toggle="modal" 
                 data-target="#examplemodaledit<?= $m['id']; ?>">edit</a>  
                <button onclick="hapusMenu('<?= base_url('menu/hapusmenu/') . $m['id'] ?>')" 
                class="btn btn-danger btn-sm" >Delete</button> 
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>
            <!-- Akhir tabel -->


         </div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1"
aria-labelledby="newMenuModallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModallabel">Add new Menu</h5>
                <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="menu"
                            name="menu" placeholder="Menu Nama">
                        </div>
                    </div>

                    <div class="modal-foooter">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
        </div>

<!-- Modal Edit -->
<?php foreach($menu as $m) : ?>
<div class="modal fade" id="examplemodaledit<?= $m['id']; ?>"
 tabindex="-1" role="document"
aria-labelledby="exampleModalLabeledit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Edit Menu</h5>
                <button type="button" class="close"
                data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="<?= base_url('menu/menuedit'); ?>" method="post">
                <input type="hidden" class="form-control" 
                            readonly value="<?= $m['id']; ?>" name="menu_id" > 


                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text"  class="form-control" id="menu"
                            name="menu" placeholder="Menu name" value="<?= $m['menu'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" 
                            readonly value="<?= $m['id'] ?>"> 
                        </div>
                     </div>
                     <div class="modal-foooter">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="edit" class="btn btn-primary">
                            <i class="fas fa-fw fa-pencil-alt fa-sm"></i>Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>