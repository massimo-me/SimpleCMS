<?php

namespace CMS\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class Page extends Admin
{
    protected $datagridValues = [
        '_sort_order' => 'DESC',
        '_sort_by' => 'created'
    ];

    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->with('Pagina')
            ->add('title', null, [
                'label' => 'Titolo'
            ])
            ->add('content', 'ckeditor', [
                'config_name' => 'page',
                'label'       => 'Contenuto'
            ])
            ->end()
        ;

        if ($this->getSubject()) {
            $form
                ->with('Rotta')
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
            'slug' => "Se lasciato vuoto viene automaticamente creato dal titolo della pagina.<br/><br/> <b>Esempio:</b> <br/> <b>Titolo</b>: Chi Siamo <br/> <b>Slug</b>: chi-siamo"
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