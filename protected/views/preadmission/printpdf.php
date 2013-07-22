

<style>

.listbxtop_hdng
{
	font-size:15px;	
	color:#1a7701;
	/*text-shadow: 0.1em 0.1em #FFFFFF;*/
	font-weight:bold;
	text-align:left;
	
}
tr td, tr th {
border-left:1px solid #ccc;
border-top:1px solid #ccc;
border-right:1px solid #ccc;

}
td.listbx_subhdng
{
	color:#333333;
	font-size:12px;	
	font-weight:bold;
	
	
}

.odd
{
	background:#DFDFDF;
}
td.subhdng_nrmal
{
	color:#333333;
	font-size:12px;	
}
.table_listbx
{
	margin:0px;
	padding:0px;
	width:1061px;
	
}
.table_listbx td
{
	padding:10px 0px 10px 10px;
	margin:0px;
	
	
}
.table_listbxlast td
{
	border-bottom:none;
	
}


td.subhdng_nrmal
{
	color:#333333;
	font-size:12px;	
}
.last
{
	border-bottom:1px solid #ccc;
}
.first
{
	border:none;
}
</style>


<table class="table_listbx" align="center" width="1061" cellspacing="0" cellpadding="0">
  <tr>
    <td class="first" style="width:50px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td class="first"><img width="93" height="117" src="images/pdf-but.png"></td>
    <td align="center" valign="middle" class="first"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td class="listbxtop_hdng first" style="text-align:center;"></td>
  </tr>
  <tr>
    <td class="listbxtop_hdng first" style="text-align:center; "></td>
  </tr>
  
</table>
</td>
  </tr>
</table>

    
    </td>
    <td class="first"></td>
  </tr>
  
  <tr class="listbxtop_hdng">
    <td width="280" style="border:none;"><?php echo $model->S_fname.'&nbsp;'.$model->S_mname.'&nbsp;'.$model->S_lname; ?></td>
    <td width="280" style="border:none;">&nbsp;</td>  
  </tr>
  
     <tr>
    <td class="listbx_subhdng">Class</td>
    <td class="subhdng_nrmal"><?php echo $model->S_class; ?></td> 
  </tr>
  
    <tr>
    <td class="listbx_subhdng odd">Subjects id </td>
    <td class="subhdng_nrmal odd"><?php echo $model->sc_id; ?></td>  
  </tr>

  <tr>
    <td class="listbx_subhdng">School</td>
    <td class="subhdng_nrmal"><?php echo $model->S_school; ?></td> 
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">School Timings</td>
    <td class="subhdng_nrmal odd"><?php echo $model->S_school_timings; ?></td>
  </tr>
  

  <tr>
    <td class="listbx_subhdng"> Date of Birth </td>
    <td class="subhdng_nrmal"><?php echo $model->S_dob; ?></td>  
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">Blood Group</td>
    <td class="subhdng_nrmal odd"><?php echo $model->S_bg; ?></td> 
  </tr>
  
  <tr>
    <td class="listbx_subhdng">Gender</td>
    <td class="subhdng_nrmal"><?php echo $model->S_gender; ?></td>
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">Address</td>
    <td class="subhdng_nrmal odd"><?php echo $model->S_addr; ?></td>
  </tr>

  <tr>
    <td class="listbx_subhdng"> City </td>
    <td class="subhdng_nrmal"><?php echo $model->S_city; ?></td>
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">State</td>
    <td class="subhdng_nrmal odd"><?php echo $model->S_state; ?></td> 
  </tr>
    
  <tr>
    <td class="listbx_subhdng">Pincode</td>
    <td class="subhdng_nrmal"><?php echo $model->S_pincode; ?></td>
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">Telephone</td>
    <td class="subhdng_nrmal odd"><?php echo $model->S_telephone; ?></td>
  </tr>

  <tr>
    <td class="listbx_subhdng"> Mobile </td>
    <td class="subhdng_nrmal"><?php echo $model->S_ph; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng odd">E-mail</td>
    <td class="subhdng_nrmal odd"><?php echo $model->S_email; ?></td>
   
  </tr>
    
  <tr>
    <td class="listbx_subhdng">Mothers Name</td>
    <td class="subhdng_nrmal"><?php echo $model->p_mom; ?></td>
    
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">Dad's Office Address</td>
    <td class="subhdng_nrmal odd"><?php echo $model->P_offaddrd; ?></td>
  </tr>

  <tr>
    <td class="listbx_subhdng">Mom's Office Address </td>
    <td class="subhdng_nrmal"><?php echo $model->P_offaddrm; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng odd">Dad's Phone no.</td>
    <td class="subhdng_nrmal odd"><?php echo $model->P_phd; ?></td> 
  </tr>
    
  <tr>
    <td class="listbx_subhdng">Mom's Phone no.</td>
    <td class="subhdng_nrmal"><?php echo $model->P_phm; ?></td>
    
  </tr>
  
  <tr>
    <td class="listbx_subhdng odd">Dad's E-mail id </td>
    <td class="subhdng_nrmal odd"><?php echo $model->P_emaild; ?></td>
  </tr>

  <tr>
    <td class="listbx_subhdng">Mom's E-mail id </td>
    <td class="subhdng_nrmal"><?php echo $model->P_emailm; ?></td>  
  </tr>
 
  </table>
