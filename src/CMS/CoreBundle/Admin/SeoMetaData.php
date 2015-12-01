<?php

namespace CMS\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SeoMetaData extends Admin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('title', null, [
                'required' => false
            ])
            ->add('description', null, [
                'required' => false
            ])
            ->add('keywords', null, [
                'required' => false
            ])
            ->add('robots', null, [
                'required' => false
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('description')
            ->add('keywords')
            ->add('robots')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => []
                ]
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('description')
            ->add('keywords')
            ->add('robots')
        ;
    }
}
