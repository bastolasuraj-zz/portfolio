<?php

///
/// General Details Section
///
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'general_details';
	CSF::createOptions( $prefix, array(
		'title'          => 'General Details',
		'theme'          => 'light',
		'post_type'      => 'page',
		'data_type'      => 'serialize',
		'page_templates' => array( 'templates/home.php' ),
	) );
	CSF::createSection( $prefix, array(
		'id'     => 'general-details',
		'fields' => array(
			array(
				'id'    => 'gd_first_name',
				'title' => 'First Name',
				'type'  => 'text',
			),
			array(
				'id'    => 'gd_last_name',
				'title' => 'Last Name',
				'type'  => 'text',
			),
			array(
				'id'    => 'gd_address',
				'title' => 'Address',
				'type'  => 'text',
			),
			array(
				'id'    => 'gd_phone_number',
				'title' => 'Phone Number',
				'type'  => 'text',
			),
			array(
				'id'    => 'gd_email',
				'title' => 'Email Address',
				'type'  => 'text',
			),
		)
	) );

}
///
/// General Details Section
///

///
/// Work Experience Section
///
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'work_experiences';

	//
	// Create a metabox
	CSF::createOptions( $prefix, array(
		'title'          => 'Work Experiences',
		'theme'          => 'light',
		'post_type'      => 'page',
		'data_type'     =>  'serialize',
//		'page_templates' => array( 'templates/home.php' ),
	) );
	CSF::createSection( $prefix, array(
		'id'     => 'work-experiences',
		'fields' => array(
			array(
				'id'     => 'work_experience_repeater',
				'title'  => 'Jobs',
				'type'   => 'repeater',
				'fields' => array(
					array(
						'id'    => 'job_title',
						'title' => 'Job Title',
						'type'  => 'text',
					),
					array(
						'id'    => 'job_organization',
						'title' => 'Organization',
						'type'  => 'text',
					),
					array(
						'id'    => 'job_description',
						'title' => 'Job Description',
						'type'  => 'textarea',
					),
					array(
						'id'    => 'job_date_from',
						'title' => 'Worked From',
						'type'  => 'text',
					),
					array(
						'id'    => 'job_date_to',
						'title' => 'Worked to',
						'type'  => 'text',
					),
				),
			),
		)
	) );

}
///
/// Work Experience Section
///

///
/// Education Section
///
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'education';

	$prefix = 'education';

	//
	// Create a metabox
	CSF::createOptions( $prefix, array(
		'title'          => 'Education',
		'theme'          => 'light',
		'post_type'      => 'page',
//		'page_templates' => array( 'templates/home.php' ),
	) );
	CSF::createSection( $prefix, array(
		'id'     => 'educations',
		'fields' => array(
			array(
				'id'=>'ed_repeater',
				'title'=>'Education',
				'type'=>'repeater',
				'fields'=>array(
					array(
						'id'    => 'ed_institute',
						'title' => 'Uni / college / school',
						'type'  => 'text',
					),
					array(
						'id'    => 'ed_degree',
						'title' => 'Degree',
						'type'  => 'text',
					),
					array(
						'id'    => 'ed_date_from',
						'title' => 'Date From',
						'type'  => 'text',
					),
					array(
						'id'    => 'ed_date_to',
						'title' => 'Date To',
						'type'  => 'text',
					),
					array(
						'id'    => 'ed_gpa',
						'title' => 'GPA',
						'type'  => 'text',
					),
				)
			)
		)
	) );

}
///
/// Education Section
///
//
/////
///// Skills Section
/////
//if ( class_exists( 'CSF' ) ) {
//
//	//
//	// Set a unique slug-like ID
//	$prefix = 'skills';
//
//	//
//	// Create a metabox
//	CSF::self::createOptions( $prefix, array(
//		'title'          => 'Skills',
//		'theme'          => 'light',
//		'post_type'      => 'page',
//		'page_templates' => array( 'templates/home.php' ),
//	) );
//	CSF::createSection( $prefix, array(
//		'id'     => 'skills',
//		'fields' => array(
//			array(
//				'id'    => 'sk_first_name',
//				'title' => 'First Name',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'sk_last_name',
//				'title' => 'Last Name',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'sk_address',
//				'title' => 'Address',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'sk_phone_number',
//				'title' => 'Phone Number',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'sk_email',
//				'title' => 'Email Address',
//				'type'  => 'text',
//			),
//		)
//	) );
//
//}
/////
///// Skills Section
/////
//
/////
///// Interests Section
/////
//if ( class_exists( 'CSF' ) ) {
//
//	//
//	// Set a unique slug-like ID
//	$prefix = 'interests';
//
//	//
//	// Create a metabox
//	CSF::self::createOptions( $prefix, array(
//		'title'          => 'Interests',
//		'theme'          => 'light',
//		'post_type'      => 'page',
//		'page_templates' => array( 'templates/home.php' ),
//	) );
//	CSF::createSection( $prefix, array(
//		'id'     => 'Interests',
//		'fields' => array(
//			array(
//				'id'    => 'in_first_name',
//				'title' => 'First Name',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'in_last_name',
//				'title' => 'Last Name',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'in_address',
//				'title' => 'Address',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'in_phone_number',
//				'title' => 'Phone Number',
//				'type'  => 'text',
//			),
//			array(
//				'id'    => 'in_email',
//				'title' => 'Email Address',
//				'type'  => 'text',
//			),
//		)
//	) );
//
//}
/////
///// Interests Section
/////
//
///
/// Social Links Section
///
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'follow_me';

	//
	// Create a metabox
	CSF::createOptions( $prefix, array(
		'title'          => 'Social Links',
		'theme'          => 'light',
		'post_type'      => 'page',
//		'page_templates' => array( 'templates/home.php' ),
	) );
	CSF::createSection( $prefix, array(
		'id'     => 'social-repeater',
		'fields' => array(
			array(
				'id'     => 'social_link_name',
				'title'  => 'Social Links',
				'type'   => 'repeater',
				'fields' => array(
					array(
						'id'    => 'social_name',
						'title' => 'Social Media Name',
						'type'  => 'text',
					),
					array(
						'id'       => 'social_url',
						'title'    => 'Social Media url',
						'type'     => 'text',
						'subtitle' => 'Please Include Full URL',
					),
					array(
						'id'    => 'social_logo',
						'title' => 'Social Media Name',
						'type'  => 'icon',
					),
				)
			),
		)
	) );

}
///
/// Social Links Section
///