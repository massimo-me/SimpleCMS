<?php

namespace CMS\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class Page extends Admin
{
    protected $datagridValues = [
        '_sort_order' => 'DESC',
        '_sort_by' => 'created'
    ];

    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->with('Page')
            ->add('title')
            ->add('content', 'ckeditor', [
                'config_name' => 'page'
            ])
            ->end()
        ;

        if ($this->getSubject()) {
            $form
                ->with('Route')
                ->add('slug', null, [
                    'required' => false
                ])
                ->end()
            ;
        }

        $form
            ->with('SEO')
            ->add('seoMetaData', 'sonata_type_model_list', [
                'required' => false
            ])
            ->end()
        ;

        $form->setHelps([
            'slug' => "If you leave empty it will be automatically created from the page title.<br/><br/> <b>Example:</b> <br/> <b>Title</b>: This article <br/> <b>Slug</b>: this-article"
        ]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('slug')
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
            ->add('slug')
        ;
    }
}