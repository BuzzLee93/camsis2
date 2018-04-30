<?php echo form_open('asset_ctrl');?>
<?php $numberdate = 0; ?>
<div class="ui-middle-screen">
	<div class="content-workorder">
		<div class="div-p"></div>
		<div class="ui-main-form">
			<div class="ui-main-form-header">
				<table align="center" height="40px" border="0">
					<tr>
						<td><span style="margin-left:10px;">New Asset</span></td>
					</tr>
				</table>
			</div>
			<div class="n-req">Asset number will be automatically generated by the system.<br> <span style="color:red;"><?php echo validation_errors(); ?></span></div>
			<div class="ui-main-form-1">
				<div class="middle_d">
					<?php $RN="RQ/A4/B01714/14"; echo form_hidden('RN');?>
					<table width="100%" class="ui-content-form-reg" style="">
						<tr class="ui-color-contents-style-1" height="30px">
							<td colspan="2" class="ui-header-new"><b>Asset Details</b></td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<table class="ui-content-form" width="100%" border="0">
									<tr>
										<td style="padding-left:10px;" width="40%" valign="top">*Equipment Code : </td>
										<td style="padding-left:10px;" width="60%"><input type="text" id="n_equipment_code" name="n_equipment_code" value="<?php echo set_value('n_equipment_code'); ?>" class="form-control-button" style="width:75%;"> <span class="icon-windows" onclick="fCallVendor()"></span><br /><input type="text" id="n_equipment_code2" name="n_equipment_code2" value="<?php echo set_value('n_equipment_code2'); ?>" class="form-control-button" style="margin-top:4px;"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Asset Workgroup : </td>
										<td style="padding-left:10px;"><input type="text" id="n_asset_workgroup" name="n_asset_workgroup" value="<?php echo set_value('n_asset_workgroup'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*User Department :</td>
										<td style="padding-left:10px;"><input type="text" id="n_user_department" name="n_user_department" value="<?php echo set_value('n_user_department'); ?>" class="form-control-button" style="width:75%;"> <span class="icon-windows" onclick="fCalllocation()"><br /><input type="text" id="n_user_department1" name="n_user_department1" value="<?php echo set_value('n_user_department1'); ?>" class="form-control-button" style="margin-top:4px;"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*Location :  </td>
										<td style="padding-left:10px;" valign="top"><input type="text" id="n_location" name="n_location" value="<?php echo set_value('n_location'); ?>" class="form-control-button"><br /><input type="text" id="n_location2" name="n_location2" value="<?php echo set_value('n_location2'); ?>" class="form-control-button" style="margin-top:4px;"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Asset Tag Number : </td>
										<td style="padding-left:10px;" valign="top">AUTO GENERATED</td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*Register Date :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text"  id="date<?php echo $numberdate++; ?>" name="n_register_date" value="<?php echo set_value('n_register_date'); ?>" class="form-control-button" style="width: 83%"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Brand : </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_brand" value="<?php echo set_value('n_brand'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Manufacturer :   </td>
										<td style="padding-left:10px;" valign="top">
										<?php echo form_dropdown('n_manufacturer', $manufacturer_list, set_value('n_manufacturer','') , 'class="dropdown"'); ?>
										
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Model :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_model" value="<?php echo set_value('n_model'); ?>" class="form-control-button"></td>
									</tr>	
									<tr>
										<td style="padding-left:10px;" valign="top">T&C Request Number:   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" id="n_tnc_request" name="n_tnc_request" value="<?php echo set_value('n_tnc_request'); ?>" class="form-control-button" style="width:75%;"> <span class="icon-windows" onclick="fCalltc_r_number()"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Serial Number :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_serial" value="<?php echo set_value('n_serial'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*Remarks :  </td>
										<td style="padding-left:10px;"><textarea class="Input" name="n_remarks"  cols="22" rows="4" ><?php echo set_value('n_remarks'); ?></textarea></td>
									</tr>	
									<tr>
										<td style="padding-left:10px;" valign="top">*Make <br />(Country of Origin) : </td>
										<td style="padding-left:10px;" valign="top">
										<?php echo form_dropdown('n_make', $country_list, set_value('n_make','') , 'class="dropdown"'); ?>											
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Chasis No. :    </td>
										<td style="padding-left:10px;"><input type="text" name="n_chasis" value="Not Applicable" disabled class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Engine No. :     </td>
										<td style="padding-left:10px;"><input type="text" name="n_engine_no" value="Not Applicable" disabled class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Registration No. :    </td>
										<td style="padding-left:10px;"><input type="text" name="n_registration" value="Not Applicable" disabled class="form-control-button"></td>
									</tr>																																						
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="ui-main-form-2">
				<div class="middle_d">
					<table class="ui-content-form-reg" >
						<tr class="ui-color-contents-style-1" height="30px">
							<td colspan="2" class="ui-header-new"><b>General Information</b></td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<table class="ui-content-form" width="100%" border="0">
									<tr>
										<td style="padding-left:10px;" width="40%" valign="top">Supplier : </td>
										<td style="padding-left:10px;" width="60%">
										<input type="text" id="n_agent" name="n_agent" value="<?php echo set_value('n_agent'); ?>" class="form-control-button" style="width:75%;"> <span class="icon-windows" onclick="fCallpop_vendor(this)" value="updateacqu"></span><br />
										<input type="text" id="n_agent2" name="n_agent2" value="<?php echo set_value('n_agent2'); ?>" class="form-control-button" style="margin-top:4px;">
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Agent :   </td>
										<td style="padding-left:10px;"><input type="text" name="n_supplier" value="<?php echo set_value('n_supplier'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Cost :  </td>
										<td style="padding-left:10px;">RM&nbsp;&nbsp;<input type="text" name="n_cost" value="<?php echo set_value('n_cost','0.00'); ?>" size="18" class="form-control-button2"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">File Reference :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_file_reference" value="<?php echo set_value('n_file_reference'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">LPO : </td>
										<td style="padding-left:10px;"><input type="text" name="n_lpo" value="<?php echo set_value('n_lpo'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Purchase Date : </td>
										<td style="padding-left:10px;"><input type="text"  id="date<?php echo $numberdate++; ?>" name="n_purchase_date" value="<?php echo set_value('n_purchase_date'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Commissionned On: </td>
										<td style="padding-left:10px;"><input type="text"  id="date<?php echo $numberdate++; ?>" name="n_commissioned_on" value="<?php echo set_value('n_commissioned_on'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Warranty Expire On :   </td>
										<td style="padding-left:10px;"><input type="text"  id="date<?php echo $numberdate++; ?>" name="n_warranty" value="<?php echo set_value('n_warranty'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Technical Report Number : </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_technical_report" value="<?php echo set_value('n_technical_report'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Capacity : </td>
										<td style="padding-left:10px;"><input type="text" name="n_capacity" value="<?php echo set_value('n_capacity'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Depreciation :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_depreciation" value="<?php echo set_value('n_depreciation'); ?>" size="13" class="form-control-button"> years</td>
									</tr>	
									<tr>
										<td style="padding-left:10px;">Life Span :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_life_span" value="<?php echo set_value('n_life_span'); ?>" size="13" class="form-control-button"> years</td>
									</tr>	
									<tr>
										<td style="padding-left:10px;" valign="top">OP Hours Code :  </td>
										<td style="padding-left:10px;">
											<input type="radio" id="radio-1-1" name="n_op_hours" class="regular-radio" value="8" <?php echo set_radio('n_op_hours', '8', TRUE); ?>/> 
											<label for="radio-1-1"></label> 8 Hours <br />
											<input type="radio" id="radio-1-2" name="n_op_hours" class="regular-radio" value="16" <?php echo set_radio('n_op_hours', '16'); ?>/>   
											<label for="radio-1-2"></label>  16 Hours<br />
											<input type="radio" id="radio-1-3" name="n_op_hours" class="regular-radio" value="24" <?php echo set_radio('n_op_hours', '24'); ?>/> 
											<label for="radio-1-3"></label> 24 Hours
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Job Type Code :   </td>
										<td style="padding-left:10px;">
											<input type="radio" id="radio-1-4" name="n_job_type_code" class="regular-radio" value="In-House" <?php echo set_radio('n_job_type_code', 'In-House',TRUE); ?> checked/> 
											<label for="radio-1-4"></label> In-House <br />
											<input type="radio" id="radio-1-5" name="n_job_type_code" class="regular-radio" value="Contract" <?php echo set_radio('n_job_type_code', 'Contract'); ?>/>   
											<label for="radio-1-5"></label>  Contract<br />
											<input type="radio" id="radio-1-6" name="n_job_type_code" class="regular-radio" value="Non-Contract" <?php echo set_radio('n_job_type_code', 'Non-Contract'); ?>/>
											<label for="radio-1-6"></label> Non-Contract
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Contract Code :  </td>
										<td style="padding-left:10px;">
										<?php echo form_dropdown('n_contract_code', $contract_list, set_value('n_contract_code','') , 'class="dropdown"'); ?>
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;">User Name :   </td>
										<td style="padding-left:10px;"><input type="text" name="n_user_name" value="<?php echo set_value('n_user_name'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Procedure :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_procedure" value="<?php echo set_value('n_procedure'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Manual / Drawing<br />Reference Number : </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_manual_drawing" value="<?php echo set_value('n_manual_drawing'); ?>" class="form-control-button"></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Asset Group :</td>
										<td style="padding-left:10px;" valign="top">
										<?php 
											$assetgroup = array(
												'' => 'Please Select',
												'1' => 'Group 1',
												'2' => 'Group 2',
												'3' => 'Group 3',
												);
										?>
										<?php echo form_dropdown('a_group', $assetgroup, set_value('a_group') , 'class="dropdown"'); ?>
										</td>
									</tr>									
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<table align="center" height="40px" border="0" style="width:100%;" class="ui-main-form-m">
				<tr>
					<td align="center">Update Maintenance Status</td>
				</tr>
			</table>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px" >
						<td colspan="2" class="ui-header-new"><b>Asset Status</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td style="padding-left:10px;" valign="top" class="asst-s">Asset Status :  </td>
									<td style="padding-left:10px;">
										<input type="radio" id="radio-1-7" name="n_asset_status" class="regular-radio" value="S1:Functioning" <?php echo set_radio('n_asset_status','S1:Functioning',TRUE); ?> /> 
										<label for="radio-1-7"></label> S1 : Functioning <br />
										<input type="radio" id="radio-1-8" name="n_asset_status" class="regular-radio" value="S2:Not Functioning" <?php echo set_radio('n_asset_status','S2:Not Functioning'); ?>/>   
										<label for="radio-1-8"></label> S2 : Not Functioning<br />
										<input type="radio" id="radio-1-9" name="n_asset_status" class="regular-radio" value="S3:Not in Use" <?php echo set_radio('n_asset_status','S3:Not in Use'); ?>/>  
										<label for="radio-1-9"></label> S3 : Not in Use <br />
										<input type="radio" id="radio-1-10" name="n_asset_status" class="regular-radio" value="S4:Transferred" <?php echo set_radio('n_asset_status','S4:Transferred'); ?>/> 
										<label for="radio-1-10"></label> S4 : Transferred  <br />
										<input type="radio" id="radio-1-11" name="n_asset_status" class="regular-radio" value="S5:Disposed" <?php echo set_radio('n_asset_status','S5:Disposed'); ?>/> 
										<label for="radio-1-11"></label> S5 : Disposed 
									</td>
								</tr>																																								
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Condition</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td style="padding-left:10px;" valign="top">	
										<div class="ui-main-form-3">
											Asset Condition <span class="ui-left_web">:</span>  
										</div>
										<div class="ui-main-form-4">
										<input type="radio" id="radio-1-12" name="n_asset_condition" class="regular-radio" value="C1:Good" <?php echo set_radio('n_asset_condition','C1:Good',TRUE); ?> />   
										<label for="radio-1-12"></label> C1:Good<br>
										<input type="radio" id="radio-1-13" name="n_asset_condition" class="regular-radio" value="C2:Request for Exemption" <?php echo set_radio('n_asset_condition','C2:Request for Exemption'); ?>/>   
										<label for="radio-1-13"></label> C2:Request for Exemption<span class="ui-left_mobile"><br/></span><span class="span-m-1">Ref No :</span><input type="text" name="assetcon2" value="<?php echo set_value('assetcon2'); ?>" class="form-control-button2 assets-wid"  size="13" style="margin-top:4px;"><br />
										<input type="radio" id="radio-1-14" name="n_asset_condition" class="regular-radio" value="C3:Exemption approved" <?php echo set_radio('n_asset_condition','C3:Exemption approved'); ?>/>   
										<label for="radio-1-14"></label> C3:Exemption approved<span class="ui-left_mobile"><br/></span><span class="span-m-2">Ref No :</span><input type="text" name="assetcon3" value="<?php echo set_value('assetcon3'); ?>" size="13" class="form-control-button2 assets-wid" style="margin-top:4px;"><br />
										<input type="radio" id="radio-1-15" name="n_asset_condition" class="regular-radio" value="C4:Request for BER Certification" <?php echo set_radio('n_asset_condition','C4:Request for BER Certification'); ?>/>   
										<label for="radio-1-15"></label> C4:Request for BER Certification<span class="ui-left_mobile"><br/></span><span class="span-m-3">Ref No :</span><input type="text" name="assetcon4" size="13" value="<?php echo set_value('assetcon4'); ?>" class="form-control-button2 assets-wid" style="margin-top:4px;"><br />
										<input type="radio" id="radio-1-16" name="n_asset_condition" class="regular-radio" value="C5:BER" <?php echo set_radio('n_asset_condition','C5:BER'); ?>/>   
										<label for="radio-1-16"></label> C5:BER<span class="ui-left_mobile"><br/></span><span class="span-m-4">Ref No :</span><input type="text" name="assetcon5" value="<?php echo set_value('assetcon5'); ?>" size="13" class="form-control-button2 assets-wid" style="margin-top:4px;"><span style="margin-left:20px;">Date :</span><input type="text"  id="date<?php echo $numberdate++; ?>" name="d_assetcon1" value="" class="form-control-button2 assets-wid2"><br />
										<input type="radio" id="radio-1-17" name="n_asset_condition" class="regular-radio" value="C6:Request for Condemn" <?php echo set_radio('n_asset_condition','C6:Request for Condemn'); ?>/>   
										<label for="radio-1-17"></label> C6:Request for Condemn<span class="ui-left_mobile"><br/></span><span class="span-m-5">Ref No :</span><input type="text" size="13" name="assetcon6" value="<?php echo set_value('assetcon6'); ?>" class="form-control-button2 assets-wid" style="margin-top:4px;"><br />
										<input type="radio" id="radio-1-18" name="n_asset_condition" class="regular-radio" value="C7:Condemn approved" <?php echo set_radio('n_asset_condition','C7:Condemn approved'); ?>/>   
										<label for="radio-1-18"></label> C7:Condemn approved<span class="ui-left_mobile"><br/></span><span class="span-m-6">Ref No :</span><input type="text" size="13" name="assetcon7" value="<?php echo set_value('assetcon7'); ?>" class="form-control-button2 assets-wid" style="margin-top:4px;"><span style="margin-left:20px;">Date :</span><input type="text"  id="date<?php echo $numberdate++; ?>" name="d_assetcon2" value="" class="form-control-button2 assets-wid2"><br />
										</div>
									</td>
								</tr>																																								
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Variation</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td style="padding-left:10px;" valign="top">	
										<div class="ui-main-form-3">Variation Status <span class="ui-left_web">:</span></div>
										<div class="ui-main-form-4">
										<span class="main-checkbox">
											<input type="radio" id="radio-1-19"name="n_variation_status" value="V1:Existing" class="regular-radio" <?php echo set_radio('n_variation_status','V1:Existing'); ?>/>   
											<label for="radio-1-19"></label>
											<span class="blockspan">V1:Existing </span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l">Location&nbsp;:&nbsp;<input class="form-control-button2 v-input-l"  type="text" name="V1Location" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-20" name="n_variation_status" value="V2:Stop Service by IIUM" class="regular-radio" <?php echo set_radio('n_variation_status','V2:Stop Service by IIUM'); ?>/>   
											<label for="radio-1-19"></label>
											<span class="blockspan">V2:Stop Service by IIUM Development Division</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input type="text"  id="date<?php echo $numberdate++; ?>" name="v2_date" value="<?php echo set_value('v2_date'); ?>" class="form-control-button2 v_check-time"></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Remark&nbsp;:&nbsp; <input class="form-control-button2 v_check-drop" type="text" name="V2Remark" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-21"name="n_variation_status" value="V3:Added installed facilities" class="regular-radio" <?php echo set_radio('n_variation_status','V3:Added installed facilities'); ?>/>   
											<label for="radio-1-21"></label>
											<span class="blockspan">V3:Added installed facilities</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v3_date" value="<?php echo set_value('v3_date'); ?>" ></span>
											<span class="check-l"><span class="ui-left_web w-cat"></span>CAT&nbsp;:&nbsp; 
												<select class="dropdown v_check-drop" name="fAssetContractV3">
													<option selected></option>
													<option>New added equipment</option>
													<option>Asset found</option>
												</select>
											</span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-22" name="n_variation_status" value="V4:Stop Service by contract" class="regular-radio" <?php echo set_radio('n_variation_status','V4:Stop Service by contract'); ?>/>   
											<label for="radio-1-22"></label>
											<span class="blockspan">V4:Stop Service by contract hospitals</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v4_date" value="<?php echo set_value('v4_date'); ?>" ></span>
											<span class="check-l"><span class="ui-left_web w-cat"></span>CAT&nbsp;:&nbsp; 
												<select name="fAssetContractV4" class="dropdown v_check-drop">
													<option selected></option>
													<option>New added equipment</option>
													<option>Asset found</option>
												</select>
											</span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-20" name="n_variation_status" value="V2:Stop Service by MOH" class="regular-radio" <?php echo set_radio('n_variation_status','V2:Stop Service by MOH'); ?>/>   
											<label for="radio-1-19"></label>
											<span class="blockspan">V5:Transfer to other Hospitals/ Healthcare facility</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l">Location&nbsp;:&nbsp;<input class="form-control-button2 v-input-l" type="text" name="V5Location" ></span>
											<span class="check-l"><span class="ui-left_web  w-cat"></span>Date&nbsp;:&nbsp;<input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v5_date" value="<?php echo set_value('v4_date'); ?>" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-24" name="n_variation_status" value="V6:Transfer from other Hospitals/Healthcare facility" class="regular-radio" <?php echo set_radio('n_variation_status','V6:Transfer from other Hospitals/Healthcare facility'); ?>/>   
											<label for="radio-1-24"></label>
											<span class="blockspan">V6:Transfer from other Hospitals/Healthcare facility</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l">Location&nbsp;:&nbsp;<input class="form-control-button2 v-input-l" type="text" name="V6Location" ></span>
											<span class="check-l"><span class="ui-left_web  w-cat"></span>Date&nbsp;:&nbsp;<input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v6_date" value="<?php echo set_value('v6_date'); ?>" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-25" name="n_variation_status" value="V7:Donated by others" class="regular-radio" <?php echo set_radio('n_variation_status','V7:Donated by others'); ?>/>   
											<label for="radio-1-25"></label>
											<span class="blockspan">V7:Donated by others</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v6_date" value="<?php echo set_value('v6_date'); ?>" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-26" name="n_variation_status" value="V8:Upgraded Installed Facilities" class="regular-radio" <?php echo set_radio('n_variation_status','V8:Upgraded Installed Facilities'); ?>/>   
											<label for="radio-1-26"></label>
											<span class="blockspan">V8:Upgraded Installed Facilities</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v7_date" value="<?php echo set_value('v7_date'); ?>" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-26" name="n_variation_status" value="V8:Upgraded Installed Facilities" class="regular-radio" <?php echo set_radio('n_variation_status','V8:Upgraded Installed Facilities'); ?>/>   
											<label for="radio-1-26"></label>
											<span class="blockspan">V9:Project systems component</span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-26" name="n_variation_status" value="V8:Upgraded Installed Facilities" class="regular-radio" <?php echo set_radio('n_variation_status','V8:Upgraded Installed Facilities'); ?>/>   
											<label for="radio-1-26"></label>
											<span class="blockspan">V10:Asset in initial fee submission for any new or replacement hospital</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v10_date" value="<?php echo set_value('v10_date'); ?>" ></span>
										</span><br>
										<span class="main-checkbox">
											<input type="radio" id="radio-1-29" name="n_variation_status" value="V11:Old hospital asset moved to new replacement hospital" class="regular-radio" <?php echo set_radio('n_variation_status','V11:Old hospital asset moved to new replacement hospital'); ?>/>   
											<label for="radio-1-29"></label>
											<span class="blockspan">V11:Old hospital asset moved to new replacement hospital</span>
											<span class="ui-left_mobile"><br/></span>
											<span class="check-l"><span class="ui-left_web w-date"></span>Date&nbsp;:&nbsp; <input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="v11_date" value="<?php echo set_value('v11_date'); ?>" ></span>
										</span><br>
										<span style="color:red; display: inline-block; padding:5px;">The following fields are now mandatory if variation status is other than V1.</span>
										</div>
										<div class="ui-main-form-3">SNF / VNF Ref No : </div>
										<div class="ui-main-form-4">
											<span class="main-checkbox">
												<span class="check-l"></span><input class="form-control-button2 v_check-time" type="text" name="n_snfvnf" value="<?php echo set_value('n_snfvnf'); ?>"><span class="ui-left_mobile"><br/></span> <span class="v_text">Example: <span style="font-weight: bold;">XXX/SNF/VVF/MMMYYYY</span><span class="ui-left_mobile"><br/></span><i>(XXX-hosp code, MMM-month, YYYY-year)</i></span>
											</span> 
										</div>
										<div class="ui-main-form-3">Submission Date : </div>
										<div class="ui-main-form-4">
											<span class="main-checkbox">
												<span class="check-l"></span><input class="form-control-button v_check-time" type="text"  id="date<?php echo $numberdate++; ?>" name="n_submission_date" value="<?php echo set_value('n_submission_date'); ?>" > <span class="ui-left_mobile"><br/></span><span class="v_text"><i>Can be register date or estimate date of VO submission</i></span>
											</span> 
										</div>
									</td>
								</tr>																											
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Class</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td style="padding-left:10px;" valign="top" class="asst-s">Asset Class :  </td>
									<td style="padding-left:10px;">
										<input type="radio" id="radio-1-30" name="n_asset_class" value="1" class="regular-radio" <?php echo set_radio('n_asset_class','1'); ?>/>   
										<label for="radio-1-30"></label> 1 - True Asset <br>
										<input type="radio" id="radio-1-31" name="n_asset_class" value="2" class="regular-radio" <?php echo set_radio('n_asset_class','2'); ?>/>   
										<label for="radio-1-31"></label> 2 - Inventory With Safety <br />
										<input type="radio" id="radio-1-32" name="n_asset_class" value="3" class="regular-radio" <?php echo set_radio('n_asset_class','3'); ?>/>   
										<label for="radio-1-32"></label> 3 - Inventory Item <br />
										<input type="radio" id="radio-1-33" name="n_asset_class" value="4" class="regular-radio" <?php echo set_radio('n_asset_class','4'); ?>/>   
										<label for="radio-1-33"></label> 4 - Location Asset<br />
									</td>
								</tr>																																								
							</table>
						</td>
					</tr>
				</table>
			</div>
			<table align="center" height="40px" border="0" style="width:100%;" class="ui-main-form-footer">
				<tr>
					<td align="center"><input type="submit" class="btn-button btn-primary-button" style="width: 200px;" name="mysubmit" value="Confirm"></td>
				</tr>
			</table>
			<input type="hidden" name="n_asset_type" id="n_asset_type" value="<?php echo set_value('n_asset_type'); ?>" />
		</div>
	</div>
	</div>
</body>
<?php include 'content_jv_popup.php';?>
<?php echo form_close(); ?>
</html>