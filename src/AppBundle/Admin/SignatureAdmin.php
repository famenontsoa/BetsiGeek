<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class SignatureAdmin extends AbstractAdmin
{
    /**
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('edit');
        $collection->remove('create');
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('sigId')
            ->add('sigName')
            ->add('sigPriority')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('sigId')
            ->add('sigName')
            ->add('sigPriority')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'delete' => array(),
                    'ignorer' => array(
                        'template' => 'AppBundle:Buttons:ignore.html.twig'
                    )
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('sigId')
            ->add('sigName')
            ->add('sigClassId')
            ->add('sigPriority')
            ->add('sigRev')
            ->add('sigSid')
            ->add('sigGid')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('sigId')
            ->add('sigName')
            ->add('sigClassId')
            ->add('sigPriority')
            ->add('sigRev')
            ->add('sigSid')
            ->add('sigGid')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function createQuery($context = 'list')
    {
        $queryBuilder = parent::createQuery($context);
        $queryBuilder->innerJoin($queryBuilder->getRootAlias() . '.iphdr', 'i');
 //echo $queryBuilder->getDQL();die;

        return $queryBuilder;
    }
}
