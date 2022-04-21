<?php
include_once 'templates/header.php'; ?>
<div class="container p-2">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="images/user-3297.png" class="card-img-top mx-auto w-50" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Profile Information</h5>
                    <p class="card-text"><i class="fas fa-user">&nbsp;</i>User</p>
                    <p class="card-text"><i class="fas fa-user">&nbsp;</i>Admin</p>
                    <p class="card-text">Last Login: xxx-xxx-xxx</p>
                    <p class="card-text">User</p>

                    <a href="#" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 ">
            <div class="container-fluid bg-secondary text-light rounded-bottom p-4 h-100 ">

                <h1 class="">Welcome Admin</h1>

                <div class="row">
                    <div class="col-sm-6">
                        <iframe src="https://free.timeanddate.com/clock/i8alvppt/n137/szw160/szh160/hoced1c24/hbw10/cf100/hgr0/fiv0/fas34/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hhs1/hmc090/hms1/hss1" frameborder="0" width="160" height="160"></iframe>


                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-dark">

                            <div class="card-body">
                                <h5 class="card-title">New Orders</h5>
                                <p class="card-text">Her you can make invoices and create new orders </p>
                                <a href="#" class="btn btn-primary">New Orders</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="container p-2">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Categories</h5>
                <p class="card-text">Here you can manage your categories and sub categories.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-primary mb-2">New Category</a>
                <a href="#" class="btn btn-primary mb-2">Manage Category</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Brands</h5>
                    <p class="card-text">Here you can manage your brands and add new brand.</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#brandModal" class="btn btn-primary mb-2">New Brand</a>
                    <a href="#" class="btn btn-primary mb-2">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Here you can manage your products and add new products.</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" class="btn btn-primary mb-2">Add</a>
                    <a href="#" class="btn btn-primary mb-2">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/category.php'; ?>
<?php include_once 'templates/brand.php'; ?>
<?php include_once 'templates/product.php'; ?>




<?php include_once 'templates/footer.php'; ?>