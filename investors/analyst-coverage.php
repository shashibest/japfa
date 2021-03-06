<?php

include '../inc_header.php';

$page = 'page5.4';

?>

<section id="banner" class="img">

   <img src="http://<?php echo $url ?>images/content/banner/investor.jpg" alt="Banner Investor"/>

   <!--<div class="wrapper_12"><div class="banner_caption">Investors</div></div>-->

</section>

<section id="breadcrumb">

   <div class="wrapper_12">

      <a class="icon_home" href="http://<?php echo $url ?>"><img src="http://<?php echo $url ?>images/material/icon-home.png" alt="Logo Japfa"/></a> <span class="b_arrow">&rsaquo;</span>

      <a href="http://<?php echo $url ?>investors/corporate-governance.php">Investors</a> <span class="b_arrow">&rsaquo;</span> <span>Analyst Coverage</span>

   </div>

</section>

<!-- end breadcrumb -->



<section id="middle">

   <div class="wrapper_12">

      <aside class="minor_side">

         <?php include 'sidemenu.php';?>

      </aside>

      <!-- end minor_side -->

      <aside id="mainSide">

         <h1 class="content_title">Analyst Coverage</h1>

         



         <div class="sorting">

<!--            <form class="search_tbl" action="" method="post">

               <input type="text" value="" placeholder="By Title" />

               <input type="image" src="../images/material/icon-search.png" />

            </form>

            <div class="select_table">

               <form class="right append-left-1" action="" method="post">

                  <select class="styled">

                     <option value="">2014</option>

                     <option value="">2013</option>

                     <option value="">2012</option>

                     <option value="">2011</option>

                  </select>

               </form>

               <span class="right">By Year</span>

            </div>-->

         </div>

         

         <table class="table_simple" border="0" width="100%">

            <thead>

               <tr>

                  <th width="50%">Firm</th>

                  <th width="50%">Analyst</th>

               </tr>

            </thead>

            <tbody>

               <tr>

                  <td>PT Bahana Securities</td>

                  <td>Richard Kramer</td>

               </tr>

               <tr>

                  <td>PT Bahana Securities</td>

                  <td>Richard Kramer</td>

               </tr>

               <tr>

                  <td>PT Bahana Securities</td>

                  <td>Richard Kramer</td>

               </tr>

               <tr>

                  <td>PT Bahana Securities</td>

                  <td>Richard Kramer</td>

               </tr>

               <tr>

                  <td>PT Bahana Securities</td>

                  <td>Richard Kramer</td>

               </tr>

               <tr>

                  <td>PT Bahana Securities</td>

                  <td>Richard Kramer</td>

               </tr>

            </tbody>

         </table>

         <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

         <div class="paging">

            <ul>

               <li><a class="pag_prev" href="">&#9664;</a></li>

               <li><a class="active" href="">1</a></li>

               <li><a href="">2</a></li>

               <li><a href="">3</a></li>

               <li><a href="">4</a></li>

               <li><a href="">5</a></li>

               <li><a href="">6</a></li>

               <li><a href="">7</a></li>

               <li><a href="">8</a></li>

               <li><a href="">9</a></li>

               <li><a class="pag_next" href="">&#9654;</a></li>

            </ul>

         </div>

      </aside>

      <!-- end mainSide -->

   </div>

   <div class="clear"></div>

</section><!-- end middle -->

<?php include '../inc_footer.php'; ?>