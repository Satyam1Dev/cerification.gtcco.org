

<div class="container mt-5 mb-5">
<form id="organizationForm" method="post" action="submit_accredited_form.php">
    <div class="row">
      <div class="form-group mb-2 col-md-6">
        <label for="orgName"><strong>Name of Organisation / Institute *</strong></label>
        <input type="text" class="form-control" id="orgName" name="orgName" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="addressLine1"><strong>Address Line 1 *</strong></label>
        <input type="text" class="form-control" id="addressLine1" name="addressLine1" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="addressLine2"><strong>Address Line 2</strong></label>
        <input type="text" class="form-control" id="addressLine2" name="addressLine2">
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="cityState"><strong>Province / City / State *</strong></label>
        <input type="text" class="form-control" id="cityState" name="cityState" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="country"><strong>Country *</strong></label>
        <input type="text" class="form-control" id="country" name="country" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="yearInception"><strong>Year of Inception *</strong></label>
        <input type="text" class="form-control" id="yearInception" name="yearInception" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="website"><strong>Website *</strong></label>
        <input type="url" class="form-control" id="website" name="website" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="profile"><strong>Brief Profile of Your Institution *</strong></label>
        <textarea class="form-control" id="profile" name="profile" required></textarea>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="headName"><strong>Name of Head / Authorized Signatory *</strong></label>
        <input type="text" class="form-control" id="headName" name="headName" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="phone"><strong>Phone *</strong></label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="email"><strong>Email *</strong></label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group mb-2 col-md-6">
        <label for="accreditations"><strong>Is your institution having any local or international accreditations ? *</strong></label>
        <select class="form-control" id="accreditations" name="accreditations" required>
          <option value="">Select</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
      <div class="form-group mb-2 col-md-12" id="accreditationsDetails" style="display: none;">
        <label for="accreditationDetails"><strong>Accreditation Details</strong></label>
        <textarea class="form-control" id="accreditationDetails" name="accreditationDetails"></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<!-- Add jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Add jQuery validation plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
  $(document).ready(function() {
    $('#organizationForm').validate();

    $('#accreditations').change(function() {
      if ($(this).val() === 'yes') {
        $('#accreditationsDetails').show();
        $('#accreditationDetails').attr('required', 'required');
      } else {
        $('#accreditationsDetails').hide();
        $('#accreditationDetails').removeAttr('required');
      }
    });
  });
</script>



