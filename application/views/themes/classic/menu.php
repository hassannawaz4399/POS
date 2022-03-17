<?php if (!empty($seoterm)) {
	$seoinfo = $this->db->select('*')->from('tbl_seoption')->where('title_slug', $seoterm)->get()->row();
} 
$webinfo = $this->webinfo;
$activethemeinfo = $this->themeinfo;
$acthemename = $activethemeinfo->themename;
?>
 <!--Start Menu Area-->
 <div class="modal fade" id="addons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"><?php echo display('food_details'); ?></h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body addonsinfo">

             </div>

         </div>
     </div>
 </div>
 <!--PAGE HEADER AREA-->
 <center>
    </p> </p>
    </p> </p>
 <script type = "text/javascript">
         <!--
            function Redirect() {
               window.location = "https://order.masterpizzauae.com/";
            }            
            document.write("You will be redirected to order page in 10 sec.");
            setTimeout('Redirect()', 1);
         //-->
      </script>
     </p> </p>
     </p> </p>
</center>
 <!--Start Menu Area-->
 
 <!--End Menu Area-->