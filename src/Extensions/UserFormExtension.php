<?php

/**
 * This file is part of SilverWare.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\UserForms\Extensions
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2018 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-userforms
 */

namespace SilverWare\UserForms\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Core\Injector\Injector;
use SilverWare\Validator\Validator;

/**
 * An extension which customises the user form object for use with SilverWare.
 *
 * @package SilverWare\UserForms\Extensions
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2018 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-userforms
 */
class UserFormExtension extends Extension
{
    /**
     * Updates the extended user form object.
     *
     * @return void
     */
    public function updateForm()
    {
        // Use Custom Validator?
        
        if ($this->owner->config()->custom_validator_enabled) {
            
            // Obtain Custom Validator Class:
            
            $class = $this->owner->config()->custom_validator_class;
            
            // Create Validator Object:
            
            $validator = Injector::inst()->get($class);
            
            // Add Required Fields:
            
            foreach ($this->owner->getRequiredFieldNames() as $name) {
                $validator->addRequiredField($name);
            }
            
            // Extend Validator Object:
            
            $this->owner->extend('updateValidator', $validator);
            
            // Update Form Object:
            
            $this->owner->setValidator($validator);
            
        }
    }
    
    /**
     * Answers an array containing the names of the required fields specified by the extended user form.
     *
     * @return array
     */
    public function getRequiredFieldNames()
    {
        return $this->owner->getRequiredFields()->getRequired();
    }
}
