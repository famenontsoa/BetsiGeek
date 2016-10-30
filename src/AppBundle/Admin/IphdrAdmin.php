<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class IphdrAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('cid')
            ->add('ipSrc')
            ->add('ipDst')
            ->add('ipVer')
            ->add('ipHlen')
            ->add('ipTos')
            ->add('ipLen')
            ->add('ipId')
            ->add('ipFlags')
            ->add('ipOff')
            ->add('ipTtl')
            ->add('ipProto')
            ->add('ipCsum')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('cid')
            ->add('ipSrc')
            ->add('ipDst')
            ->add('ipVer')
            ->add('ipHlen')
            ->add('ipTos')
            ->add('ipLen')
            ->add('ipId')
            ->add('ipFlags')
            ->add('ipOff')
            ->add('ipTtl')
            ->add('ipProto')
            ->add('ipCsum')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
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
            ->add('cid')
            ->add('ipSrc')
            ->add('ipDst')
            ->add('ipVer')
            ->add('ipHlen')
            ->add('ipTos')
            ->add('ipLen')
            ->add('ipId')
            ->add('ipFlags')
            ->add('ipOff')
            ->add('ipTtl')
            ->add('ipProto')
            ->add('ipCsum')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('cid')
            ->add('ipSrc')
            ->add('ipDst')
            ->add('ipVer')
            ->add('ipHlen')
            ->add('ipTos')
            ->add('ipLen')
            ->add('ipId')
            ->add('ipFlags')
            ->add('ipOff')
            ->add('ipTtl')
            ->add('ipProto')
            ->add('ipCsum')
        ;
    }
}
