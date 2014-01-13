<?php
/**
 * yii\yandexmaps\Placemark class file.
 */

namespace yii\yandexmaps;

/**
 * Placemark
 */
class Placemark extends GeoObject
{
	/**
	 * @param array $geometry
	 * @param array $properties
	 * @param array $options
	 */
	public function __construct(array $geometry, array $properties = array(), array $options = array())
	{
		$feature = array(
			'geometry' => array(
				'type' => "Point",
				'coordinates' => $geometry,
			),
			'properties' => $properties,
		);
		parent::__construct($feature, $options);
	}

	/**
	 * @return array
	 */
	public function getGeometry()
	{
		$geometry = parent::getGeometry();
		if (isset($geometry['coordinates'])) {
			$geometry = $geometry['coordinates'];
		}
		return $geometry;
	}
}