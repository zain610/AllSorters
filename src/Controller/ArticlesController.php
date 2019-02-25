<?php
namespace App\Controller;

class ArticlesController extends AppController
{

    /**
     * Show a basic page with a persons name, and a short description of themselves.
     * The information to be rendered is passed to the template from this action.
     */
    public function home()
    {
        $this->set('personName', 'Pete');
        $this->set('favouriteColour', 'Green');
        $this->set('favouriteColourValue', '#009900');

        $goalForUnit = 'for students and staff to have fun, ' .
            'while students learn as much as possible about working as a professional IT team.';

        $this->set('goalForUnit', $goalForUnit);
        $this->render('home');
    }

}
