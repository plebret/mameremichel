<?php

namespace AdminBundle\Form\Type\Event;

use Admingenerated\AdminBundle\Form\BaseEventType\NewType as BaseNewType;

/**
 * NewType
 */
class NewType extends BaseNewType
{
    /**
     * Get form type for pictureFiles field.
     *
     * @return string|FormTypeInterface Field form type.
     */
    protected function getTypePictureFiles()
    {
        return 'Admingenerator\FormExtensionsBundle\Form\Type\BootstrapFieldsetCollectionType'; //'Symfony\Component\Form\Extension\Core\Type\CollectionType';
    }
    
    /**
     * Get form type for videoFiles field.
     *
     * @return string|FormTypeInterface Field form type.
     */
    protected function getTypeVideoFiles()
    {
        return 'Admingenerator\FormExtensionsBundle\Form\Type\BootstrapFieldsetCollectionType'; //'Symfony\Component\Form\Extension\Core\Type\CollectionType';
    }
}
