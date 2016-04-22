<?php

namespace AdminBundle\Form\Type\Tune;

use Admingenerated\AdminBundle\Form\BaseTuneType\EditType as BaseEditType;

/**
 * EditType
 */
class EditType extends BaseEditType
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
