<?php 
  include('db_conn.php');
                        $event_name=$_GET['event_name'];
                        $sub_cat=$_GET['sub_cat'];
                        $student="SELECT * FROM details WHERE event_name='$event_name' AND sub_cat='$sub_cat'";
                        $execute=mysql_query($student);
                        $row=mysql_fetch_array($execute);
                        if($row)
                        {
                          echo '<textarea rows=15 cols=55 class="form-control" id="description" name="description">';echo $row['description'];echo '</textarea>';
                          echo '<input type="hidden" name="flag" id="flag" value="0">';
                        }
                        else
                        {
                          echo '<textarea rows=15 cols=25 class="form-control" id="description" name="description">';echo '</textarea>';
                          echo '<input type="hidden" name="flag" id="flag" value="1">';
                        }?>