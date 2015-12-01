<?php

namespace CMS\CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class User extends Admin
{

    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('name')
            ->add('email')
            ->add('phone', null, [
                'required' => false
            ])
            ->add('plainPassword', 'text', [
                'label' => 'Password',
                'required' => false
            ])
            ->setHelps([
                'plainPassword' => 'If you want to update your password, enter a new password'
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('email')
            ->add('phone')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => []
                ]
            ])
        ;
    }

    public function preUpdate($object)
    {
        if (!$object->getPlainPassword()) {
            return ;
        }

        $manipulator = $this->getConfigurationPool()->getContainer()->get('fos_user.util.user_manipulator');
        $manipulator->changePassword($object->getUsername(), $object->getPlainPassword());
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('email')
            ->add('phone')
        ;
    }
}