<?php include_once 'templates/header.php'; ?>
<div class="container">
<div class="card mx-auto m-2" style="width: 18rem;">
    <img src="images/login-password-11921.png" class="card-img-top w-50 mx-auto" alt="...">
    <div class="card-body">
        <h5 class="card-title">Login</h5>
        <form>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" placeholder="password">
                <label for="floatingInput">Password</label>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <span class="ms-4"> <a href="register.php" style="text-decoration: none">Register</a> </span>
        </form>
    </div>
    <div class="card-footer "><a class="align-content-center" href="" style="text-decoration: none">Forgot Password?</a>

    </div>
</div>
</div>



<?php
include_once 'templates/footer.php';
?>
