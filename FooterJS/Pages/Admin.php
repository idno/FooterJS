<?php

    /**
     * FooterJS administration
     */

    namespace IdnoPlugins\FooterJS\Pages {

        /**
         * Default class to serve Facebook settings in administration
         */
        class Admin extends \Idno\Common\Page
        {

            function getContent()
            {
                $this->adminGatekeeper(); // Admins only
                $t = \Idno\Core\site()->template();
                $body = $t->draw('admin/footerjs');
                $t->__(['title' => 'Footer Javascript', 'body' => $body])->drawPage();
            }

            function postContent() {
                $this->adminGatekeeper(); // Admins only
                $footerjs = $this->getInput('footerjs');
                \Idno\Core\site()->config->config['footerjs'] = $footerjs;
                \Idno\Core\site()->config()->save();
                \Idno\Core\site()->session()->addMessage('Your Footer Javascript details were saved.');
                $this->forward('/admin/footerjs/');
            }

        }

    }