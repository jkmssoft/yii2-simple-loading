<?php

/**
 * @package   yii2-simple-loading
 * @author    Edwin Artunduaga <edwinhaq@gmail.com>
 * @copyright Copyright &copy; Edwin Artunduaga, 2017
 * @version   1.0.1
 */
namespace edwinhaq\simpleloading;

use yii\web\AssetBundle;

/**
 * Asset bundle for SimpleLoading widget.
 *
 * @see https://github.com/edwinhaq/yii2-simple-loading
 * @since 1.0.0
 */
class SimpleLoadingAsset extends AssetBundle
{
	/**
	 * @inheritdoc
	 */
	public $depends = [
		'yii\web\JqueryAsset'
	];

	/**
	 *
	 * {@inheritDoc}
	 * @see \yii\web\AssetBundle::init()
	 */
	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';

		$this->css = [
			YII_DEBUG ? 'css/simple-loading.css' : 'css/simple-loading.min.css'
		];
		$this->js = [
			YII_DEBUG ? 'js/simple-loading.js' : 'js/simple-loading.min.js'
		];
		parent::init ();
	}
}
