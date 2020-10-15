
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          
          <form method="post" action="<?= base_url('Login/auth'); ?>">
            <h1>Login Form</h1>
            <div>
              <input id="username" type="text" name="username" class="form-control" placeholder="Username" required="Masukkan Username!" />
            </div>
            <div>
              <input id="password" type="password" name="password" class="form-control" placeholder="Password" required="Masukkan Password!" />
            </div>
            <div>
                  <button type="submit" id="login" name="login" class="btn btn-primary">Login</button>
            </div>

            <div class="clearfix"></div>

              <div>
                <h1><i class="fa fa-paw"></i> EAT FISH</h1>
                <p>EAT FISH &copy; 2020</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
