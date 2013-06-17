<?php
App::uses('Lp', 'Model');

/**
 * Lp Test Case
 *
 */
class LpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lp',
		'app.template'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lp = ClassRegistry::init('Lp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lp);

		parent::tearDown();
	}

}
