<section class="contact" id="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 form-container">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>
        <form method="post" action="submit_contact.php">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="number" class="form-label">Number</label>
              <input type="text" class="form-control" id="number" name="number" required>
            </div>
            <div class="mb-3 col-md-6">
              <label for="country" class="form-label">Country</label>
              <input type="text" class="form-control" id="country" name="country" required>
            </div>
          </div>
          <div class="mb-3 col-md-12">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
          </div>
          <div class="mb-3 mt-4 col-md-12">
          <button type="submit" class="aboutus-btn" style="width: 100%;">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <img src="assets/img/banner/contact-us.jpg" class="img-fluid" alt="...">
      </div>
    </div>
  </div>
</section>


<style>
    .contact {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    /* .form-container{
        box-shadow: 0 1px 1px rgba(0,0,0,0.11), 0 2px 2px rgba(0,0,0,0.11), 0 4px 4px rgba(0,0,0,0.11), 0 8px 8px rgba(0,0,0,0.11), 0 16px 16px rgba(0,0,0,0.11), 0 32px 32px rgba(0,0,0,0.11);
    } */
</style>