<?php
use Hashtag\Actions\DefaultAction;

class ContentAction{
    private $default;
    public function __construct()
    {
        //$this->default=DefaultAction::getInstance();

        //sync hashtag contact form to hub backend
        $this->addSyncHashtagFormAction();
    }

    public function addSyncHashtagFormAction(){
	    // add_action("syncWithLead_book-a-time",array($this,'syncFormDataWithHub'),10,2);
	    // add_action("syncWithLead_contact-us",array($this,'syncFormDataWithHub'),10,2);
	    // add_action("syncWithLead_custom-packages",array($this,'syncFormDataWithHub'),10,2);
	    add_action("syncWithLead_property-enquiry",array($this,'syncPropertyEnquiryWithHub'),10,2);
    }

    public function syncFormDataWithHub($data,$form){
	    $data['lead_source']  = 'agent_portal';

        //custom packages form only
        if(!empty($data['suburb']) && is_array($data['suburb'])){
            $data['address_meta'] = json_encode($data['suburb']);
            unset($data['suburb']);
        }

	    if(!isset($data['subject'])) {
		    $data['subject'] = $form->getFormTitle();
	    }

	    $options=[
		    'body'    => $data,
		    'headers' => array(
			    'Authorization' => 'Basic ' . base64_encode( 'frontend_user' . ':' . 'justAuth' )
		    ),
	    ];

        return $this->ajaxPostLeads($options);
		// $options["sslverify"]   = WP_ENVIRONMENT==='dev'?false:true;
	    // $request = wp_remote_post( HUB_API_URL .'api/addHashtagFormEnquiry',$options);
	    // return json_decode( wp_remote_retrieve_body( $request ) );
    }

    // it will sync data from property enquiry form to hashtag hub
     public function syncPropertyEnquiryWithHub($data,$form)
    {
        $data['lead_source']='hashtag_portal';
        $data['form_title']=$form->getFormTitle();
        $options=[
		    'body'    => $data,
		    'headers' => array(
			    'Authorization' => 'Basic ' . base64_encode( 'frontend_user' . ':' . 'justAuth' )
		    ),
	    ];

        return $this->ajaxPostLeads($options);
    }

    //post leads to hashtag hub
    public function ajaxPostLeads($options)
    {
        $options["sslverify"]   = WP_ENVIRONMENT==='dev'?false:true;
	    $request = wp_remote_post( HUB_API_URL .'api/addHashtagFormEnquiry',$options);
	    return json_decode( wp_remote_retrieve_body( $request ) );
    }
}