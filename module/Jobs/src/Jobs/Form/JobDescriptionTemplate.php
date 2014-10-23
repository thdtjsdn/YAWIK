<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright (c) 2013-2014 Cross Solution (http://cross-solution.de)
 * @license   MIT
 */

/** Jobs forms */
namespace Jobs\Form;

use Core\Form\Container;

/**
 * Jobs forms container
 *
 * @author Mathias Weitz <weitz@cross-solution.de>
 */
class JobDescriptionTemplate extends Container
{

    /**
     * {@inheritDoc}
     *
     * Adds the standard forms and child containers.
     *
     * @see \Zend\Form\Element::init()
     */
    public function init()
    {
        $this->setForms(array(
            'descriptionFormBenefits' => array(
                'type' => 'Jobs/JobDescriptionBenefits',
                'property' => true,
            )
        ));

        $this->setForms(array(
            'descriptionFormTitle' => array(
                'type' => 'Jobs/JobDescriptionTitle',
                'property' => true,
            )
        ));

    }

}
