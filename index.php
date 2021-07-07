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



      <form action="controller.risksub.php" name="submit_risk" method="POST">

        <div class="form-group">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" class="form-control" name="subject">
        </div>



        <div class="form-group">
          <label for="Asset">Asset:</label>
          <input type="text" id="Asset" class="form-control" name="asset"><br>
        </div>

        <div class="form-group">
          <label for="Risk-Owner">Risk Owner:</label>
          <input type="text" id="Risk-Owner" class="form-control" name="riskowner"><br>
        </div>

        <div class="form-group">

          <label for="Category">Asset Category:</label>
          <select name="category" id="Category" class="form-select" class="form-field">
            <option value selected>--</option>
            <option value="Access Management">Access Management</option>
            <option value="Environmental Resilience">Environmental Resilience</option>
            <option value="Monitoring">Monitoring</option>
            <option value="Physical Security">Physical Security</option>
            <option value="Policy and Procedure">Policy and Procedure</option>
            <option value="Sensitive Data Management">Sensitive Data Management</option>
            <option value="Technical Vulnerability">Technical Vulnerability</option>
            <option value="Third-Party Management">Third-Party Management</option>
          </select><br>
        </div>

        <div class="form-group">

          <label for="Nature of risk">Nature of Risk:</label>
          <input type="text" id="Nature" class="form-control" name="nature"><br>
        </div>

        <div class="form-group">
          <label for="Risk Source">Risk Source:</label>
          <select name="Risk Source" id="Risk Source" class="form-select" class="form-field">
            <option value selected>---</option>
            <option value="External">External</option>
            <option value="People">People</option>
            <option value="Process">Process</option>
            <option value="System">System</option>
          </select>
        </div>
        <div class="form-group">
          <p>New Risk?</p>
          <input type="radio" id="new risk" name="new risk" value="Yes">
          <label for="new risk">Yes</label>
          <input type="radio" id="not new risk" name="new risk" value="No">
          <label for="new risk">No</label>
        </div>
        <div class="form-group">

          <label for="vulnerability">Vulnerability</label>
          <input type="text" id="vulnerability" class="form-control" name="vul"><br>
        </div>

        <div class="form-group">

          <label for="Threat">Threat</label>
          <input type="text" id="threat" class="form-control" name="threat"><br>
        </div>

        <div class="form-group">

        <label for="Impact">Impact:</label>
        <input type="text" id="impact" class="form-control" name="impact">
        </div>



        <button type="submit" class="btn btn-primary" name="riskbtn">Submit</button>



      </form>
    </div>
  </div>
</div>


</div>

<?php

include('includes/footer.php');
 ?>

