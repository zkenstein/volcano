<?php

/**
 * Api Key model.
 *
 * @author Daniel Sposito <dsposito@static.com>
 */
class Model_Api_Key extends Model
{
	protected static $_properties = array(
		'id',
		'seller_id',
		'key',
		'status',
		'created_at',
		'updated_at',
	);
	
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);
	
	protected static $_belongs_to = array(
		'seller',
	);
}
