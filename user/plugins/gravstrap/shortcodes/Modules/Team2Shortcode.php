<?php
/**
 * This file is part of the Gravstrap plugin and it is distributed
 * under the MIT License. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) Giansimon Diblas <info@diblas.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://diblas.net
 *
 * @license    MIT License
 *
 */

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


/**
 * Class TeamShortcode handles a module to show a list of team members
 *
 * @author Giansimon Diblas
 */
class Team2Shortcode extends GravstrapShortcode
{
    /**
     * {@inheritdoc}
     */
    public function shortcodeName()
    {
        return 'gravstrap-team-2';
    }

    /**
     * {@inheritdoc}
     */
    protected function childrenShortcodes()
    {
        return array(
            'gravstrap-team-item-2'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function assets()
    {
        return array(
            'css' => array(
                'plugin://gravstrap/css/gravstrap_team.css',
            ),
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function template()
    {
        return 'modules/team_2.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    protected function aliases()
    {
        return array(
            'gravstrap-team-2' => array(
                'g-team-2'
            ),
            'gravstrap-team-item-2' => array(
                'g-team-item-2'
            ),
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function renderOutput(ShortcodeInterface $shortcode)
    {
        return $this->grav["twig"]->processTemplate($this->template(), [
            'name' => $shortcode->getParameter('name'),
            'content' => $this->fixContent($shortcode),
            'items' => $this->shortcode->getStates($this->shortcode->getId($shortcode)),
            'attributes' => $shortcode->getParameter('attributes'),
            'column_attributes' => $shortcode->getParameter('column_attributes'),
        ]);
    }
}
