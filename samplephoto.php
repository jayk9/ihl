<h3>Slider Master</h3>

	            <div class="section group">

				  <?php

					error_reporting(0);

					

					if(isset($_POST['submit']))

					{

							 $img=$_FILES['uploaded']['name'];

							 $path="images/playerpic".$img;

							 $tmp=$_FILES['uploaded']['tmp_name'];

							 copy($tmp,$path);

					

							//mysql_query("insert into slider values('','$img')");

							?><h2 align="center"><font color="#009900" size="+3">Slider Image Added successfully.</font></h2><?php

					}

			?>

            <br/>

            <center>

			

            <form  enctype="multipart/form-data" method="POST" >

              <table border="1" class="curvedEdges" align="center">

                <tr>

                  <td colspan="2" align="center"><h3>Add Images On Slider</h3></td>

                </tr>

                <tr>

                  <td><span>Select Image

                    <label>*</label>

                    </span></td>

                   <td><input name="uploaded" type="file" id="photoInput"  onchange="readURL(this);" required/></td>  

               </tr>

			  

			   <tr>

                <td>

                	Selected Image:

                </td>

                <td><img id="blah" src="#" alt="Please Select Image." /></td>

                </tr>

                <tr>

                   <td colspan="3"><div>               	

                      <input type="submit" value="Upload" name="submit"  class="mybutton">

                    

                      <div class="clear"></div>

                    </div></td>

                     

                </tr>

              </table>

              </center>

            </form>