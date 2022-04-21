<?php include_once 'templates/header.php'; ?>
<div class="container p-4">
    <div class="card mx-auto" style="width: 28rem;">
        <div class="card-header text-center">Register</div>
        <div class="card-body">
            <form>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="username">
                    <label for="floatingInput">Enter Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Re-enter Password</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Admin</option>

                    </select>

                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="fas fa-user"></span>&nbsp;Register</button>
                <span><a href="index.php" style="text-decoration: none">Login</a></span>
            </form>
        </div>
        <div class="card-footer text-muted">
            <a href="" style="text-decoration: none">Forgotten password?</a>
        </div>
    </div>

</div>

