<?php

session_start();
include('includes/header.php');
// include('includes/security.php');
include('includes/navbar.php');
include('includes/scripts.php');
 ?>


<div class="container">

  <div class="row justify-content-center">

    <h3>RISK ASSESSMENT</h3>
  </div>

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-bod p-0">
    <div class="row justify-content-center">



      <form action="" name="submit_risk" method="POST" >
        <div class="form-group">
          <label for="RA-Id">RA-Id:</label>
          <input type="text" id="RA-Id" class="form-control" name="RA-Id"><br>
        </div>
        <div class="form-group">
          <label for="Asset">Asset:</label>
          <input type="text" id="Asset" class="form-control" name="Asset"><br>
        </div>

        <div class="form-group">
          <label for="Risk-Owner">Risk Owner:</label>
          <input type="text" id="Risk-Owner" class="form-control" name="Risk-Owner"><br>
        </div>

        <div class="form-group">

          <label for="Category">Asset Category:</label>
          <select name="Category" id="Category" class="form-select" class="form-field">
            <option value selected>--</option>
            <option value="1">Access Management</option>
            <option value="2">Environmental Resilience</option>
            <option value="3">Monitoring</option>
            <option value="4">Physical Security</option>
            <option value="5">Policy and Procedure</option>
            <option value="6">Sensitive Data Management</option>
            <option value="7">Technical Vulnerability</option>
            <option value="8">Third-Party Management</option>
          </select><br>
        </div>

        <div class="form-group">

          <label for="Nature of risk">Nature of Risk:</label>
          <input type="text" id="Nature" class="form-control" name="Nature"><br>
        </div>

        <div class="form-group">

          <label for="vulnerability">Vulnerability</label>
          <input type="text" id="vulnerability" class="form-control" name="vulnerability"><br>
        </div>

        <div class="form-group">

          <label for="Threat">Threat</label>
          <input type="text" id="threat" class="form-control" name="threat"><br>
        </div>




        <button type="submit" form="user" value="Submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>
</div>


</div>

<?php

include('includes/footer.php');
 ?>
