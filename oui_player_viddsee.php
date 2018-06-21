<?php

/*
 * This file is part of oui_player,
 * an extendable plugin to easily embed
 * customizable players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_player
 *
 * Copyright (C) 2016-2017 Nicolas Morand
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT
 * OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/**
 * Viddsee
 *
 * @package Oui\Player
 */

namespace Oui\Player {

    if (class_exists('Oui\Player\Provider')) {

        class Viddsee extends Provider
        {
            protected static $patterns = array(
                'video' => array(
                    'scheme' => '#^(http|https)://(www\.)?(viddsee\.com/(video|player)/)(\S+/)?([^&?/]+)$#i',
                    'id'     => '6',
                ),
            );
            protected static $src = '//www.viddsee.com/';
            protected static $glue = array('player/', '?', '&amp;');
        }
    }
}

namespace {
    function oui_viddsee($atts) {
        return oui_player(array_merge(array('provider' => 'viddsee'), $atts));
    }

    function oui_if_viddsee($atts, $thing) {
        return oui_if_player(array_merge(array('provider' => 'viddsee'), $atts), $thing);
    }
}
