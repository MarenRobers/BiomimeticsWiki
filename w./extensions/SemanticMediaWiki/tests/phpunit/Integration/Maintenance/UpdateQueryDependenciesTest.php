<?php

namespace SMW\Tests\Integration\Maintenance;

use SMW\Tests\MwDBaseUnitTestCase;
use SMW\Tests\TestEnvironment;

/**
 * @group semantic-mediawiki
 * @group medium
 *
 * @license GNU GPL v2+
 * @since 3.1
 *
 * @author mwjames
 */
class UpdateQueryDependenciesTest extends MwDBaseUnitTestCase {

	protected $destroyDatabaseTablesAfterRun = true;
	private $runnerFactory;

	protected function setUp() : void {
		parent::setUp();

		$this->runnerFactory = TestEnvironment::getUtilityFactory()->newRunnerFactory();
	}

	protected function tearDown() : void {
		parent::tearDown();
	}

	public function testRun() {

		$maintenanceRunner = $this->runnerFactory->newMaintenanceRunner(
			'SMW\Maintenance\UpdateQueryDependencies'
		);

		$maintenanceRunner->setQuiet();

		$this->assertTrue(
			$maintenanceRunner->run()
		);
	}

}
