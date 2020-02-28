<!-- Title and guide text  -->

<b>LIS Home Page (alternative)</b>

<!--   ======================================================   -->
<!--  BEGIN div buttons-Tab & table (the buttons are in a tables)-->
<div id=buttonsTab>
    <table style=\"font-weight: bold; font-size:125%; width:100%; margin:24px;\" border=0 cellpadding=5 cellspacing=5>
        <tbody>

<?php  echo $home_html;  // from .module; has the buttonsTab html?>  

<!--  CLOSE buttonsTabtbody,table, div  -->
        </tbody>
    </table>
</div>
<!--   ======================================================   -->
<!-- --------  ABOUT LIS: Collapsible Content  -----------  -->

<!--   Fieldset: PGI   -->
<?php 
  drupal_add_library('system', 'drupal.collapse');
?>

<fieldset class=" collapsible collapsed">
  <legend ><span class="fieldset-legend">Click for more about the Legume Information System (LIS) and sister projects ...</span> 
  </legend>
  <div  class="fieldset-wrapper"> 

    <h1>Welcome to LIS - the Legume Information System</h1>
    LIS contains agronomically useful information in legume species, including genome sequences, genetic maps, genes, gene families, and mapped traits.  
  
    The "legumeinfo" site makes use of several open-source projects (Tripal, Chado, GBrowse, JBrowse, and many others -- see <a href="https://github.com/legumeinfo" target="_blank">GitHub legumeinfo</a> and <a href="https://github.com/LegumeFederation/" target="_blank">GitHub LegumeFederation</a>), facilitating more efficient collaboration with other research groups using and developing these tools (e.g. <a href="https://peanutbase.org">PeanutBase</a>, <a href="http://knowpulse2.usask.ca/portal/" target="_blank">knowpulse</a> and  <a href="https://www.coolseasonfoodlegume.org/" target="_blank">coolseasonfoodlegume</a>). 
  
    <a href="/contact">Let us know</a> if you have questions, requests, or data to contribute.
  </div>
</fieldset>


<!-- --------  Acknowledgement  -----------  -->
    
<div style="text-align:center;vertical-align:bottom">
    Funded by the USDA-ARS. Developed and hosted by the National Center for Genome Resources (NCGR) and the USDA-ARS SoyBase and Legume Clade Database group at Ames, IA, with the help of many other researchers. 
   <br>
  <a href="http://www.ncgr.org" target="_blank"><img src="/sites/default/files/images/NCGR_logo_sm.png"></a>
  &nbsp;&nbsp;
  <a href="https://www.ars.usda.gov/main/main.htm" target="_blank"><img src="/sites/default/files/images/USDA_logo_sm.png"></a>
</div>









<! ================================== END ================================================  -->
<!-- SCRATCH PAD  -->

<!--<div id="speciescontent"   class="newspaper_col">
    <?php   //echo $species_html;  ?>
</div>    
-->
