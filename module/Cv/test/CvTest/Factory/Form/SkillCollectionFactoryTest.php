<?php
/**
 * YAWIK
 *
 * @filesource
 * @license MIT
 * @copyright  2013 - 2016 Cross Solution <http://cross-solution.de>
 */
  
/** */
namespace CvTest\Factory\Form;

use Core\Form\CollectionContainer;
use CoreTestUtils\TestCase\TestInheritanceTrait;
use Cv\Entity\Skill;
use Cv\Factory\Form\SkillCollectionFactory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceManager;

/**
 * Tests for \Cv\Factory\Form\SkillCollectionFactory
 * 
 * @covers \Cv\Factory\Form\SkillCollectionFactory
 * @author Mathias Gelhausen <gelhausen@cross-solution.de>
 * @group Cv
 * @group Cv.Factory
 * @group Cv.Factory.Form
 */
class SkillCollectionFactoryTest extends \PHPUnit_Framework_TestCase
{
    use TestInheritanceTrait;

    private $target = SkillCollectionFactory::class;

    private $inheritance = [ FactoryInterface::class ];

    public function testCreateService()
    {
        $container = $this->target->createService(new ServiceManager());

        $this->assertInstanceOf(CollectionContainer::class, $container);
        $this->assertAttributeEquals('CvSkillForm', 'formService', $container);
        $this->assertAttributeInstanceOf(Skill::class, 'newEntry', $container);
        $this->assertEquals('Skills', $container->getLabel());
    }
    
}