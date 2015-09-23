<?php 

function parallax_bg_region1_validate($element, &$form_state)
{
    global $base_url;
    $validateFile = array('file_validate_is_image' => array());
	
    $UploadedFile = file_save_upload('parallax_bg_region1_image', $validateFile, "public://", FILE_EXISTS_REPLACE);
    
	if ($form_state['values']['delete_parallax_bg_region1_image'] == TRUE) {file_unmanaged_delete($form_state['values']['parallax_bg_region1_preview']);
        $form_state['values']['parallax_bg_region1_preview'] = NULL;
    }
    
	if ($UploadedFile) {
		$UploadedFile->status = FILE_STATUS_PERMANENT; file_save($UploadedFile); $file_url = file_create_url($UploadedFile->uri);
        $file_url = str_ireplace($base_url, '', $file_url);
        // set to form
        $form_state['values']['parallax_bg_region1_preview'] = $file_url;
    }
}

function parallax_bg_region2_validate($element, &$form_state)
{
    global $base_url;
    $validateFile = array('file_validate_is_image' => array());
	
    $UploadedFile = file_save_upload('parallax_bg_region2_image', $validateFile, "public://", FILE_EXISTS_REPLACE);
    
	if ($form_state['values']['delete_parallax_bg_region2_image'] == TRUE) {file_unmanaged_delete($form_state['values']['parallax_bg_region2_preview']);
        $form_state['values']['parallax_bg_region2_preview'] = NULL;
    }
    
	if ($UploadedFile) {
		$UploadedFile->status = FILE_STATUS_PERMANENT; file_save($UploadedFile); $file_url = file_create_url($UploadedFile->uri);
        $file_url = str_ireplace($base_url, '', $file_url);
        // set to form
        $form_state['values']['parallax_bg_region2_preview'] = $file_url;
    }
}

function parallax_bg_region3_validate($element, &$form_state)
{
    global $base_url;
    $validateFile = array('file_validate_is_image' => array());
	
    $UploadedFile = file_save_upload('parallax_bg_region3_image', $validateFile, "public://", FILE_EXISTS_REPLACE);
    
	if ($form_state['values']['delete_parallax_bg_region3_image'] == TRUE) {file_unmanaged_delete($form_state['values']['parallax_bg_region3_preview']);
        $form_state['values']['parallax_bg_region3_preview'] = NULL;
    }
    
	if ($UploadedFile) {
		$UploadedFile->status = FILE_STATUS_PERMANENT; file_save($UploadedFile); $file_url = file_create_url($UploadedFile->uri);
        $file_url = str_ireplace($base_url, '', $file_url);
        // set to form
        $form_state['values']['parallax_bg_region3_preview'] = $file_url;
    }
}

function parallax_bg_region4_validate($element, &$form_state)
{
    global $base_url;
    $validateFile = array('file_validate_is_image' => array());
	
    $UploadedFile = file_save_upload('parallax_bg_region4_image', $validateFile, "public://", FILE_EXISTS_REPLACE);
    
	if ($form_state['values']['delete_parallax_bg_region4_image'] == TRUE) {file_unmanaged_delete($form_state['values']['parallax_bg_region4_preview']);
        $form_state['values']['parallax_bg_region4_preview'] = NULL;
    }
    
	if ($UploadedFile) {
		$UploadedFile->status = FILE_STATUS_PERMANENT; file_save($UploadedFile); $file_url = file_create_url($UploadedFile->uri);
        $file_url = str_ireplace($base_url, '', $file_url);
        // set to form
        $form_state['values']['parallax_bg_region4_preview'] = $file_url;
    }
}

function parallax_bg_region5_validate($element, &$form_state)
{
    global $base_url;
    $validateFile = array('file_validate_is_image' => array());
	
    $UploadedFile = file_save_upload('parallax_bg_region5_image', $validateFile, "public://", FILE_EXISTS_REPLACE);
    
	if ($form_state['values']['delete_parallax_bg_region5_image'] == TRUE) {file_unmanaged_delete($form_state['values']['parallax_bg_region5_preview']);
        $form_state['values']['parallax_bg_region5_preview'] = NULL;
    }
    
	if ($UploadedFile) {
		$UploadedFile->status = FILE_STATUS_PERMANENT; file_save($UploadedFile); $file_url = file_create_url($UploadedFile->uri);
        $file_url = str_ireplace($base_url, '', $file_url);
        // set to form
        $form_state['values']['parallax_bg_region5_preview'] = $file_url;
    }
}

?>