<?php
namespace AdminBundle\Menu;

use Admingenerator\GeneratorBundle\Menu\AdmingeneratorMenuBuilder;

class AdminMenuBuilder extends AdmingeneratorMenuBuilder
{
    public function sidebarMenu(array $options)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'sidebar-menu'));
        
        $this->addLinkRoute($menu, 'menu.tune.label', 'AdminBundle_Tune_list')
            ->setExtra('translation_domain', 'mam_admin')
            ->setExtra('icon', 'fa  fa-music');
            
        $this->addLinkRoute($menu, 'menu.event.label', 'AdminBundle_Event_list')
            ->setExtra('translation_domain', 'mam_admin')
            ->setExtra('icon', 'fa  fa-calendar');
            
        $this->addLinkRoute($menu, 'menu.player.label', 'AdminBundle_Player_list')
            ->setExtra('translation_domain', 'mam_admin')
            ->setExtra('icon', 'fa  fa-group');
            
        $this->addLinkRoute($menu, 'menu.contact.label', 'AdminBundle_Contact_list')
            ->setExtra('translation_domain', 'mam_admin')
            ->setExtra('icon', 'fa  fa-send');
            
        $this->addLinkRoute($menu, 'menu.subscriber.label', 'AdminBundle_Subscriber_list')
            ->setExtra('translation_domain', 'mam_admin')
            ->setExtra('icon', 'fa  fa-envelope');

        /*
        if ($dashboardRoute = $this->dashboardRoute) {
            $this
                ->addLinkRoute($menu, 'admingenerator.dashboard', $dashboardRoute)
                ->setExtra('icon', 'fa fa-dashboard');
        }

        $overwrite = $this->addDropdown($menu, 'Replace this menu');

        $this->addLinkURI(
            $overwrite,
            'Create new menu builder',
            'https://github.com/symfony2admingenerator/AdmingeneratorGeneratorBundle'
            .'/blob/master/Resources/doc/cookbook/menu.md'
        )->setExtra('icon', 'fa fa-wrench');

        $this->addLinkURI(
            $overwrite,
            'Customize menu block',
            'https://github.com/symfony2admingenerator/AdmingeneratorGeneratorBundle'.
            '/blob/master/Resources/views/base_admin_navbar.html.twig'
        )->setExtra('icon', 'fa  fa-code-fork');
        */

        return $menu;
    }
}