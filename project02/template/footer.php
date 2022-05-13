
  <footer>

<div class="footer-top d-lg-flex d-sm-block">

  <div class="company">
    <h3>GET STARTED</h3>
    <a href="#">Visit Class</a>
    <a href="#">View Tuition and Aid</a>
    <a href="#">Apply Now</a>
  </div>

  <div class="contact-information">
    <h3>CONTACT INFORMATION</h3>
    <a href="#">301 The Greenhouse, Custard <br> London, E2 8DY.</a>
    <p>Email: <a href="#">example@gmail.com</a></p>
    <p>Phone: <a href="#">+00112233445</a></p>
  </div>

  <div class="f-b-menu">
    <h3>SOCIAL</h3>
    <ul>
      <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
    </ul>
  </div>

</div>
<hr>
<div class="footer-bottom">

  <img src="./img/logo.png" alt="">

  <p>Copy 2020. All Right Reserved.</p>

</div>


</footer>

<!-- Register Modal -->
<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Registration Form</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
      <div class="container">
        <form id="regForm" method="POST" action="Server/server.php">
          <div class="row">
            <div class="form-group col-6 mb-2">
              <label for="name">Name </label>
              <input type="text" name="name" placeholder="Enter Your Name" class="form-control mt-2"
                autocomplete="off" id="username">
              <div class="error text-danger"></div>
            </div>
            <div class="form-group col-6 mb-2">
              <label for="email">Email :</label>
              <input type="email" name="email" placeholder="Enter Your Email " class="form-control  mt-2"
                autocomplete="off" id="email">
              <div class="error text-danger"></div>
            </div>
          </div>
          <div class="row">
            <div class="form-group mb-2">
              <label for="password">Password :</label>
              <input type="password" name="password" placeholder="Enter Password" class="form-control  mt-2"
                id="password">
              <div class="error text-danger"></div>
            </div>
          </div>
          <div class="row">
            <div class="form-group mb-2">
              <label for="cpassword">Confirm Password :</label>
              <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control  mt-2"
                id="cpassword">
              <div class="error text-danger"></div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group mb-2 btn-right">
              <button type="submit" name="btnRegister" class="btn btn-primary" id="submit">Register</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Login Modal -->
<!-- The Modal -->
<div class="modal" id="LoginModal">
<div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Login Form</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
      <div class="container">
        <form class="login-form" id="loginForm" method="POST" action="Server/server.php">
          <div class="row">
            <div class="form-group mb-2">
              <label for="Email">Email :</label>
              <input type="email" name="email" placeholder="Enter Your Email" class="form-control mt-2"
                autocomplete="off" pattern="^[a-zA-Z0-9]+@gmail\.com$" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group mb-2">
              <label for="Password">Password :</label>
              <input type="password" name="password" placeholder="Enter Password" class="form-control mt-2"
                required>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group mb-2 btn-right">
              <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


<script>
const bars = document.querySelector("#bars");
const nav_menu = document.querySelector(".nav_menu");

const navbar_right_side = document.querySelector(".navbar_right_side")

bars.onclick = () => {
  nav_menu.classList.toggle("see")

  navbar_right_side.classList.toggle("see")

  bars.classList.toggle("fa-times");
};
window.onscroll = () => {
  nav_menu.classList.remove("see");

  navbar_right_side.classList.remove("see");

  bars.classList.remove("fa-times");
};
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
</body>

</html>