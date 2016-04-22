<?php

namespace AdminBundle\Form\Type\Tune;

use Admingenerated\AdminBundle\Form\BaseTuneType\NewType as BaseNewType;

/**
 * NewType
 */
class NewType extends BaseNewType
{
    /**
     * Get form type for audioFiles field.
     *
     * @return string|FormTypeInterface Field form type.
     */
    protected function getTypeAudioFiles()
    {
        return 'Admingenerator\FormExtensionsBundle\Form\Type\BootstrapFieldsetCollectionType'; //'Symfony\Component\Form\Extension\Core\Type\CollectionType';
    }
}
