<?php
include "header.php";
include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="adminlogin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Add New Personality</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 500px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>General Info</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="addpersonality.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Name" name="AName" id="AName" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pic:</label>
              <div class="controls">
				<input type="file" id="APic"  name="APic">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Choose a Category :</label>
              <div class="controls">
              <select class="span11" id="job">
								<option hidden="hidden">Select a Category</option>
								<option value="army">Army</option>
								<option value="navy">Navy</option>
								<option value="airforce">Air Force</option>
								<option value="police">Police</option>
                <option value="researcher">Researchers</option>
                <option value="activestars">Active Stars</option>
							</select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" required>Short Description:</label>
              <div class="controls">
                <input type="text" class="span11" name="ADesc" />
                <span class="help-block">Description field</span> </div>
            </div>

            <div class="alert alert-danger" id="error" style="display:none">
                This data already exist!
            </div>

            <div class="form-actions">
              <button type="submit" name="submit1"  class="btn btn-success" id="submit1">Save</button>
            </div>

            <div class="alert alert-success" id="success" style="display:none">
                Inserted Successfully!
            </div>

          </form>
        </div>
      </div>
      
      <!-- <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Detailed Info:</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Name" name="AName" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pic:</label>
              <div class="controls">
              <input type="file" id="ppic" name="pic" required="" name="APic"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Service Date (dd-mm)</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Achievements :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Achievement" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Detail:</label>
              <div class="controls">
                <textarea class="span11" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div> -->

    </div>
        </div>

    </div>
</div>

<!--end-main-container-part-->
<script>
var select = document.getElementById('job');
var value = select.options[select.selectedIndex].value;
document.getElementById('value').value = option.value;
document.getElementById('text').value = option.text;
</script>
<?php
if(isset($_POST["submit1"]))
{
    $count=0;
    $res=mysqli_query($link,"SELECT AName FROM `army` WHERE AName='$_POST[AName]'");
    // $res=mysqli_query($link,"select * from army where AName='$_POST(AName)' && dep='$_POST(ADep)'");
    $count=mysqli_num_rows($res);
    if($count>0)
    {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("error").style.display="block";  
            </script>
            <?php
    }
    else
    {
      $sql = "SELECT * from army";

    if ($result = mysqli_query($link, $sql)) 
    {
        $rowcount = mysqli_num_rows( $result );
        $total=$rowcount+1;
    }
    mysqli_query($link,"INSERT INTO `army` (`AID`, `APic`, `AName`, `ADesc`) VALUES ('$total', '$_POST[APic]', '$_POST[AName]', '$_POST[ADesc]')");
    ?>
        <script type="text/javascript">
            document.getElementById("error").style.display="none";
            document.getElementById("success").style.display="block";
            </script>
            <?php
    }
}
?>

<?php
include "footer.php";
?>