<?php
App::uses('Template', 'Model');

/**
 * Template Test Case
 *
 */
class TemplateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.template',
		'app.library',
		'app.lp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Template = ClassRegistry::init('Template');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Template);

		parent::tearDown();
	}

}
